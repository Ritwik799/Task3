<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(3 < 10){

    echo "three is less than ten"; //It is printed because the statement is true

}

if(3 > 10){

    echo "three is greater than ten"; //It is not printed because the statement is false

}  elseif(4 < 5){

    echo "ofcourse four is less than five";
} elseif(4 > 5){
    echo "4 is greater than 5"; //false statement it will print "it is not"

}


else {
    echo "it is not"; //if there is false then only we can write this 
}

?>
    
</body>
</html>