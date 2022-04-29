<!DOCTYPE html> 
<html>
<head>
<link href="style.css" rel="stylesheet" />
</head>
<body>
    <p>if number is equal to 1 "Foo!!!"  would be displayed </br>
    if number is prime number "Foo Bar Baz!!!"  would be displayed </br>
    if number is divided by 2 "Bar!!!"  would be displayed </br>
    if number is divided by 3 "Baz!!!"  would be displayed </br>
    if number is divided by 2 and 3 "Bar Baz!!!"  would be displayed </br>
    <section>
<?php
if ($_POST["number"] == 1) {
    echo ("Foo!!!");
} else if(primeCheck($_POST["number"]) == 1) {
    echo "Foo Bar Baz!!!";
} else if ($_POST["number"] % 2 == 0 && $_POST["number"] % 3 == 0) {
    echo ("Bar Baz!!!");
} else if ($_POST["number"] % 2 == 0) {
    echo ("Bar!!!");
} else if ($_POST["number"] % 3 == 0) {
    echo ("Baz");
}  
else {
    echo ("Enter the number again");
}

$num = $_POST["number"];


function primeCheck($num) {
    if ($num == 1)
    return 0;
    for ($i = 2; $i <= $num/2; $i++){
        if ($num % $i == 0)
            return 0;
    }
    return 1;
}
 

?> <br>
</section>
</body>
</html> 