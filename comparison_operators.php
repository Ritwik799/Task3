<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--
<h2>Comparison operator</h2>
<pre>

equal ==
identical ===
compare > < >= <= <>
not equal !=
not identical !==
</pre> -->

<!--
<h2>Logical operators</h2>
<pre>

And &&
Or ||
Not ! 

</pre> -->


<?php

if(4 < 4){
    echo "it is true"; //it will not be executed as it is false
}

if(4 <= 4){
    echo "it is true"; // it will be executed as it is true
}

if(4 == 4){
    echo "it is true"; // it will be executed as it is true
}
if(4 != 5){
    echo "it is true"; // it will be executed as it is true
}
if(4 === 4){
    echo "it is true"; // it will be executed as it is true
}
if(4 === "4"){
    echo "it is true";  // it will not be executed as it is false 
}
if(4 === "4" || 5 < 10){
    echo "it is true"; // it will be executed as it is true
}
if(4 === "4" && 5 < 10){
    echo "it is true"; // it will not be executed as it is false
}
if(4 === 4 && 5 < 10){
    echo "it is true"; // it will be executed as both are true
}

?>
    
</body>
</html>