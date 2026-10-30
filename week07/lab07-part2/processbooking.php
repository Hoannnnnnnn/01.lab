<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php

        $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";

        $tours = array();
        if (isset($_POST["4day"])) {
            $tours[] = "4 day tour";
        }
        if (isset($_POST["10day"])) {
            $tours[] = "10 day tour";
        }
        
       
        if (count($tours) > 1) {
            $tour_str = implode(" and ", $tours);
        } elseif (count($tours) == 1) {
            $tour_str = $tours[0];
        } else {
            $tour_str = "no tour";
        }

   
        $species = isset($_POST["species"]) ? $_POST["species"] : "";

        $age = isset($_POST["age"]) ? $_POST["age"] : "";

       
        $food = isset($_POST["food"]) ? $_POST["food"] : "";

        $partysize = isset($_POST["partysize"]) ? $_POST["partysize"] : "";

        echo "<p>Welcome $firstname $lastname!</p>";
        echo "<p>You are now booked on the $tour_str.</p>";
        echo "<p>Species: $species</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Meal Preference: $food</p>";
        echo "<p>Number of travellers: $partysize</p>";
    ?>
</body>
</html>