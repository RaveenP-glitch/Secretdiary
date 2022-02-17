<?php
     $link = mysqli_connect("localhost", "user1", "1234", "secretdi");

     if (mysqli_connect_error()) {
 
         die("Database Connection Error");
     }
