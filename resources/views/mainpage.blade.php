<?php
$f_name = "stella";
$l_name = "li";
$age = 44;
$height = 1.7;
$can_vote = true;
$address = array('street' => '123 main street', 'city' => 'mycity');
$state = NULL;
define('PI', 3.1415);

?>

<!DOCTYPE html> <!-- defines document as HTML5  -->

<html>

<head>
    <!-- contain meta info: info bout data/webpage or how to display content/refresh browser
        (specify character set,page description,key words,author of the document,&
        viewport settings. -->

    <meta charset="utf-8"> <!-- default character encoding, translate character num to binary-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge">
    <!--choose what version of IE
    it should render as, and ie=edge will let you display the highest mode possible -->

    <title>The Main Page</title>
</head>

<body>
    <!-- defines documnet's body, container for visible content -->

    <h1> HOWDY YALL</h1>

    <!-- no longer a string, it is an object-->
    <!-- give me the body of the message-->
    <p>{{$message -> body}}</p>
    <p>Name: <?php echo $f_name . ' ' . $l_name; ?> </p>

    <!-- calling upon php script you are in-->
    <form action="mainpage.blade.php" method="get">
        <label>Your state:</label>
        <input type="text" name="state" /> <br>
        <label>Number 1</label>
        <input type="text" name="num1" /> <br>
        <label>Number 2</label>
        <input type="text" name="num2" /> <br>
        <input type="submit" name="Submit"/> 
    </form>

    <?php 
        //check if information was passed to webpage
        //isset: check if variable was set
        if (isset($_GET) && array_key_exists('state', $_GET)){
            $state = $_GET['state']; //assign passed value of state
            if (isset($state) && !empty($state)){ //check state variable
                echo 'You live in '. $state. '.';
                echo "$f_name lives in $state<br>";
            }
        }
    ?>



</body>

</html>