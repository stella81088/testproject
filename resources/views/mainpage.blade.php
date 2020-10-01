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

</body>

</html>