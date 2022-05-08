<?php
session_start();


if (isset($_POST['login']) and isset($_POST['haslo'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "baza";

    // Create connection
    //$conn = new mysqli($servername, $username, $password);
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO `ksiazki` (`id`, `tytul`, `opis`, `stan`) VALUES (NULL, 'aaa', 'vbb', '');";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


    echo $_POST['login'];
    $sql = "SELECT * FROM uczen where `imie`='" . $_POST['login'] . "'";
    // echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['zalogowany'] = 1;
        include("index.php");
    } else {
        include("logowanie.php");
    }


    $conn->close();
} else if ($_SESSION['zalogowany'] == 1) {
    include("index.php");
} else {
    include("logowanie.php");
}
