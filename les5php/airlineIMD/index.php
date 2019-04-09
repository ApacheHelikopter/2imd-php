<?php 

    require_once("bootstrap.php");

    $passenger1 = new Passenger();
    $passenger1->setFirstname("Ruben");

    echo $passenger1->toJson();
    
    $passenger2 = new Passenger();
    $passenger2->setFirstname("Seb");

    $ticket = new Ticket();
    $ticket->setPassenger($passenger1);  //dependency injection
    $ticket->book();
    echo $ticket->getTicket();

    $ticketVip = new TicketVip();
    $ticketVip->setPassenger($passenger2);
    $ticketVip->setMeal("vegetarian");
    $ticketVip->setSeat(42);
    $ticketVip->book();
    echo $ticketVip->getTicket();

?>