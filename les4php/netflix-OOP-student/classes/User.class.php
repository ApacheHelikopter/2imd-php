<?php
    require_once("Security.class.php");

    class User{

        private $email;
        private $password;
        private $passwordConfirmation;

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of passwordConfirmation
         */ 
        public function getPasswordConfirmation()
        {
                return $this->passwordConfirmation;
        }

        /**
         * Set the value of passwordConfirmation
         *
         * @return  self
         */ 
        public function setPasswordConfirmation($passwordConfirmation)
        {
                $this->passwordConfirmation = $passwordConfirmation;

                return $this;
        }

        /**
         * @return boolean - true if registration successful, false if unsuccessful
         */
        public function register(){

            $password = Security::hash($this->password);
    
            try{
    
                $conn = new PDO("mysql:host=localhost;dbname=netflix", "root", "root");
                $statement = $conn->prepare("insert into users (email, password) values (:email, :password)");
                $statement->bindParam(":email", $this->email);
                $statement->bindParam(":password", $password);
                $result = $statement->execute();
                return ($result);
            }
            catch( Throwable $t){
                return false;
            }
        }

    }