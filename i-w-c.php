<?php
            session_start();
             $conn = mysqli_connect("localhost", "root", '', "registration");
            if($conn === false){
                       die("ERROR: Could not connect. "
                           . mysqli_connect_error());
                   }

                   // Taking all 5 values from the form data(input)
                   $ime =  $_REQUEST['post'];
                   $sadrzaj = $_REQUEST['username'];


                   // Performing insert query execution
                   // here our table name is college
                   $sql = "INSERT INTO forum  VALUES ('$ime',
                       '$sadrzaj')";

                   if(mysqli_query($conn, $sql)){

                       echo nl2br("\n$ime\n $sadrzaj\n");
                   } else{
                       echo "ERROR: Hush! Sorry $sql. "
                           . mysqli_error($conn);
                   }

                   // Close connection
                   mysqli_close($conn);
                   ?>
<meta http-equiv="refresh" content="0; URL='index-workshop.php'" />
