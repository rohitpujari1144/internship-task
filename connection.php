<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="signup_page_data";

    $conn=mysqli_connect($servername, $username, $password, $dbname);

    if($conn)
        {
            echo "Connection Ok";
        }
    else
        {
            echo "Connection faled";
        }
?>