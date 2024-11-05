<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <center>
            <div>
                <h1>Tutor Directory</h1>
            </div>
            <form method="post">
                <select name="location" id="location" aria-valuetext="location">
                    <option value="">Location</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Pune">Pune</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Lucknow">Lucknow</option>

                </select>
                <button type="submit">Submit</button>
            </form>
        </center>
    </div>
</body>
</html>

<?php

$tutorsData = [
    [
        "location" => "Mumbai",
        "name" => "Amit Sharma",
        "phone" => "9876543210"
    ],
    [
        "location" => "Delhi",
        "name" => "Priya Verma",
        "phone" => "9823456789"
    ],
    [
        "location" => "Bangalore",
        "name" => "Rajesh Kumar",
        "phone" => "9765432109"
    ],
    [
        "location" => "Hyderabad",
        "name" => "Sneha Reddy",
        "phone" => "9867543210"
    ],
    [
        "location" => "Chennai",
        "name" => "Arjun Ramesh",
        "phone" => "9845678901"
    ],
    [
        "location" => "Kolkata",
        "name" => "Soham Bose",
        "phone" => "9834567890"
    ],
    [
        "location" => "Pune",
        "name" => "Neha Patil",
        "phone" => "9823456701"
    ],
    [
        "location" => "Jaipur",
        "name" => "Anil Mehta",
        "phone" => "9812345678"
    ],
    [
        "location" => "Ahmedabad",
        "name" => "Pooja Shah",
        "phone" => "9871234567"
    ],
    [
        "location" => "Lucknow",
        "name" => "Vikram Singh",
        "phone" => "9801234567"
    ],
    [
        "location" => "Lucknow",
        "name" => "Aditya Kumar",
        "phone" => "9768945269"
    ],
];


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST['location'];

    // Search for the subTutorData containing the search value
    $result = null;
    foreach ($tutorsData as $singleTutorData) {
        if (in_array($location, $singleTutorData)) {
            echo "<pre>";
            echo "$singleTutorData[name]";
            echo "<br>";
            echo "$singleTutorData[phone]";
            echo "<br>";
            echo "<pre>";
            
            if(!in_array($location, $singleTutorData)) {
                echo "<p>No match found.</p>";
            };
        };
    };
};
?>