<?php
    $allBookings = [
        "IMD002" => [
            "client" => "James Holden",
            "paid"   => "yes",
            "email"  => "james.holden@gmail.com"
        ],
        "IMD003" => [
            "client" => "Harold P. Redman",
            "paid"   => "yes",
            "email"  => "HaroldPRedman@dayrep.com"
        ],
        "IMD004" => [
            "client" => "Marcus C. Nelson",
            "paid"   => "no",
            "email"  => "MarcusCNelson@armyspy.com"
        ]
    ];
    
    // Schrijf hier uw code die op basis van het tekstvak de juiste boeking zoekt
    // tip: lees en begrijp de code onderaan om te bepalen hoe uw variables moeten noemen
    $reference = $_POST['bookingReference'];
    echo $reference;
    foreach($allBookings as $bookings){
        foreach ($bookings[$reference] as $booking) {
    
        // PAS HIERONDER NIETS AAN
        if(!empty($_POST)) {
            $clientName = $booking['client'];
        }
        else {
            $clientName = null;
        };
        }
    
    }
    
?>
<!-- PAS HIERONDER NIETS AAN -->
<div class="myApp">
    <form method="post">
        <input type="text" name="bookingReference" placeholder="Booking Reference">
        <input type="submit" value="Find Client">
    </form>
    
    <h2 id="result_name">Client name: <em><?php echo $clientName; ?></em></h2>
    
</div>