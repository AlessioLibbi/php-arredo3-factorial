<?php 
$userNumber = $_POST["userNumber"];


function countdown($userNumber) {

    if ($userNumber == 0) {
        
        echo "VA BENE LO STESSO";
    }else {
        echo $userNumber . "<br>" ;
        countdown(--$userNumber);
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
            <?php  countdown($userNumber) ;?>
            
        </p>
        <p>
            <?php echo factorial($userNumber) ;?>
        </p>
    </div>

</body>

</html>