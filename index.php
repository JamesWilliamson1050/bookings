<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>

    <h1>My resturant<h2>

    <h2>Book a table</h2>
    <!--this is the booking form-->
    <form method ="POST" action="book.php">
        <label>Name</label>
        <input type="text" name="namebox">
        <label>Date</label>
        <input type="date" name="datebox">
        <label>Time</label>
        <input type="time" name="timebox">
        <!--this allows is to check which type of foem was used -->
        <input type="hidden" value="book" name="book"></input>
        <input type="submit" value="book">
        
        
    
    </form>

     <h2>Searching for booking</h2>
     <!--this is the booking form-->
</body>
</html>

<?php

?>