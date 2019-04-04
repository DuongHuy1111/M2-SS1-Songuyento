<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function primeNumber($number)
{
    if ($number < 2) {
        return false;
    } else {
        for ($index = 2; $index < $number; $index++) {
            if ($number % $index === 0) {
                return false;
            }
        }
        return true;
    }

}
for ($index = 0; $index < 100; $index++){
    if (primeNumber($index)){
        echo "Số nguyên tố nhỏ hơn 100 là : ". $index . "<br>";
    }
}


?>
</body>
</html>