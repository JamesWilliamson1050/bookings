<?php
require('dbconnect.php');

if($_POST["book"]=="book"){

    echo "booking ";

    $name=$_POST["namebox"];
    $date=$_POST["datebox"];
    $time=$_POST["timebox"];

    echo "";
    
    $sql = "INSERT INTO bookings (name,date,time) VALUES ('$name', '$date', '$time')";

    if(mysqli_query($conn,$sql)){
        echo 'Thanks for booking';
        
    }
    else {
        echo "Error".$sql." ".mysqli_error($conn);
    }

}
function display_all(){
$myquery = "SELECT * FROM bookings";

    if(mysqli_query($conn,$myquery)){
        
       
    }
    else {
        echo "Error".$sql." ".mysqli_error($conn);
    }
    
    if($result->num_rows>0){
        //while this is row
       while($row=$result->fetch_assoc()){
           echo "Name".$row[" name "]." Date ".$row[" date "]. " Time ".$row[" time "]. "<br/>";
       }
    }
}//end of function display all

display_all();
?>