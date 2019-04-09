<?php

    class TicketVip extends Ticket{

        private $meal;

        /**
         * Get the value of meal
         */ 
        public function getMeal()
        {
                return $this->meal;
        }

        /**
         * Set the value of meal
         *
         * @return  self
         */ 
        public function setMeal($meal)
        {
                $this->meal = $meal;

                return $this;
        }

        public function setSeat($seat){

            $this->seat = $seat;
        }

        public function book(){
            
            //connectie + query
            $conn = Db::getInstance();
        }

        public function getTicket(){
            $ticket = parent::getTicket();
            $ticket .= "<h3>Meal : " . $this->getMeal() . "</h3>";
            return $ticket;
        }
    }