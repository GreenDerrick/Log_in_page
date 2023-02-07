<?php

$conn = mysqli_connect("localhost", "root","", "BS");
mysqli_select_db($conn, "BS");
if(!$conn) {
    die("There is no connection to the database");
}