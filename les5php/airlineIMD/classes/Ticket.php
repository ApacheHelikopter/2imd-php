<?php 

    class Ticket{
        protected $seat;
        private $passenger;

        public function setPassenger($passenger)
        {
            $this->passenger = $passenger;
        }

        public function getPassenger()
        {
            return $this->passenger;
        }

        /**
         * Get the value of seat
         */ 
        public function getSeat()
        {
                return $this->seat;
        }

        /**
         * Set the value of seat
         *
         * @return  self
         */ 
        private function setSeat($seat)
        {
                $this->seat = $seat;

                return $this;
        }

        public function book(){
            
            $this->setSeat( rand(1, 60) );
            
            //connectie + query
            $conn = Db::getInstance();
        }

        public function getTicket(){

            $ticket = "<h3>Firstname : " . $this->getPassenger()->getFirstName() . "</h3>";
            $ticket .= "<h3>Seat : " . $this->getSeat() . "</h3>";
            
            return $ticket;
        }
    }