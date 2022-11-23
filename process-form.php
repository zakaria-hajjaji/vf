<?php

    session_start();

    $selectBar = filter_input(INPUT_POST, "selectBar", FILTER_DEFAULT);

    $selectBar1 = filter_input(INPUT_POST, "selectBar1", FILTER_DEFAULT);

    $id = $_POST['id'];

    
    $iduser = $_SESSION['iduser'];

   

    $host = "localhost";

    $username = "root";

    $password = "";

    $dbname = "jou";



    // creating a connection

    $con = mysqli_connect($host, $username, $password, $dbname);



    // to ensure that the connection is made

    if (!$con)

    {

        die("Connection failed!" . mysqli_connect_error());

    }



    // using sql to create a data entry query

    $sql = "INSERT INTO matchesres (id, iduser, team1, team2) VALUES ('$id', '$iduser', '$selectBar', '$selectBar1')";

 

    // send query to the database to add values and confirm if successful

    $rs = mysqli_query($con, $sql);

    if($rs)

    {
        echo "<div class='alert alert-danger'>Your prognosis Saved </div>";
        header("Location: index.php");

    }

 

    // close connection



?>