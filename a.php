<?php

$a = 32;
$tablica = array("a" => "aa", "b" => "bb");

$tab2 = array("a", "b");
for ($i = 0; $i < 2; $i++) {
    echo $tablica[$tab2[$i]];
}
echo "<br>  ";
$s = "To JEST \"przykładowy\" <b>ciąg 'tekstowy'</b>";
echo "<br>  1 " . $s;
echo "<br>  2 " . addslashes($s);
echo "<br>  3 " . crc32($s);
$tab = explode(" ", $s);
echo "<br>  4 " . $tab[2];
echo "<br>  5 " . htmlspecialchars($s);
echo "<br>  6 " . htmlspecialchars_decode(htmlspecialchars($s));
echo "<br>  7 " . implode(" ", $tab);
echo "<br>  8 " . md5($s);
echo "<br>  9 " . sha1($s);
echo "<br> ";
$x = 5985;


echo var_dump($a);


$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }


    // $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // echo fread($myfile,filesize("webdictionary.txt"));
    // fclose($myfile);



    // function divide($dividend, $divisor) {
    //   if($divisor == 0) {
    //     throw new Exception("Division by zero");
    //   }
    //   return $dividend / $divisor;
    // }


    function otworz($plik)
    {
        echo "tasa";
        if (file_exists($plik)) {
            $myfile = fopen($plik, "r");
            echo fread($myfile, filesize($plik));
            fclose($myfile);
        } else {
            throw new Exception("bład");
        }
    }
    echo '<br><br>-----------------------';
    
    $file = fopen("ab.php","w");
    echo fwrite($file,"Hello World. Testing!");
    fclose($file);
   

    try {
        otworz("ab.php");
    } catch (Exception $e) {
        $code = $e->getCode();
        echo $code . "<br>";
        $message = $e->getMessage();
        echo $message . "<br>";
        $file = $e->getFile();
        echo $file . "<br>";
        $line = $e->getLine();
        echo $line . "<br>";
    } finally {
        echo "Process complete.";
    }



    ?>