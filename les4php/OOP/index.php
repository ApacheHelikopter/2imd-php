<?php 

    class Student{
        private $firstname;


        
        /*
        public function setFirstname($p_sFirstname){
            if(empty($p_sFirstname)){
                throw new Exception("Firstname cannot be empty.");
            }

            $this->firstname = $p_sFirstname;
            return $this;
        }

        public function getFirstname(){
            return $this->firstname;
        }

        // -CONSTRUCTOR-
        public function __construct($p_sFirstname){
            if(empty($p_sFirstname)){
                echo "Firstname cannot be empty.";
            }
            $this->firstname = $p_sFirstname;
            echo "Hello " . $this->firstname;
        }*/
    }

    
    try{
        $student1 = new Student();
        $student1->setFirstname("Ruben");
        echo $student1->getFirstname();
    }
    catch(Throwable $t){
        echo $t->getMessage();


    }
    


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>