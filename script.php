<?php 
$number = $_POST["number"];
$base = $_POST["base"];

function countdown($number) {

    if ($number == 0) {
        
        echo "VA BENE LO STESSO";
    }else {
        echo $number . "<br>" ;
        countdown(--$number);
    }
}
function factorial($number) {
    if ($number == 0) {
        return 1;
        echo "VA BENE LO STESSO";
    } else {
        return factorial($number -1) * $number;
    }


}
function baseConvert($number, $base) {
    if($number == 0) {
       
    } else {

        return baseConvert(intval($number / $base), $base) . ($number % $base) ;
        
    }
    
}
$convertedNumber = base_convert($number, 10, $base);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
    <div >
        <p>
            <?php  countdown($number) ;?>
            
        </p>
        <p>
            <?php echo factorial($number) ;?>
        </p>
        <p>
            <?php echo  $convertedNumber  ?>
        </p>
        <p>
            <?php echo  baseConvert($number, $base) ?>
        </p>
    </div>

</body>

</html>