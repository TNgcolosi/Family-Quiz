<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style> 
    


    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }

  h1 {
      font-family: 'Fredoka One', "cursive";
    }

    .blue-text{
      color : blue;
      }
    
    </style>
    
    <title>Results</title>

</head>
<body>
    
<?php


 require('functions.php');

if ( isset( $_POST)) { 




$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];

$answer_1 = $_POST["answer0"];

$answer_2 = $_POST["answer1"];

$answer_3 = $_POST["answer2"];

$answer_4 = $_POST["answer3"];

$answer_5 = $_POST["answer4"];

$answer_6 = $_POST["answer5"];

$answer_7 = $_POST["answer6"];

$answer_8 = $_POST["answer7"];

$answer_9 = $_POST["answer8"];

$answer_10 = $_POST["answer9"];

$answer_11= $_POST["answer10"];

$answer_12 = $_POST["answer11"];

$answer_13 = $_POST["answer12"];

$answer_14 = $_POST["answer13"];

$answer_15 = $_POST["answer14"];

$answer_16 = $_POST["answer15"];

$answer_17 = $_POST["answer16"];

$answer_18 = $_POST["answer17"];

$answer_19 = $_POST["answer18"];

$answer_20 = $_POST["answer19"];
}


$totalCorrect = 0;

if ($answer_1 == "B") { $totalCorrect++; }

if ($answer_2 == "A") { $totalCorrect++; }

if ($answer_3 == "C") { $totalCorrect++; }

if ($answer_4 == "A") { $totalCorrect++; }

if ($answer_5 == "C") { $totalCorrect++; }

if ($answer_6 == "B") { $totalCorrect++; }

if ($answer_7 == "A") { $totalCorrect++; }

if ($answer_8 == "A") { $totalCorrect++; }

if ($answer_9 == "C") { $totalCorrect++; }

if ($answer_10 == "A") { $totalCorrect++; }

if ($answer_11 == "C") { $totalCorrect++; }

if ($answer_12 == "B") { $totalCorrect++; }

if ($answer_13 == "B") { $totalCorrect++; }

if ($answer_14 == "C") { $totalCorrect++; }

if ($answer_15 == "A") { $totalCorrect++; }

if ($answer_16 == "C") { $totalCorrect++; }

if ($answer_17 == "B") { $totalCorrect++; }

if ($answer_18 == "B") { $totalCorrect++; }

if ($answer_19 == "C") { $totalCorrect++; }

if ($answer_20 == "C") { $totalCorrect++; }



if ($totalCorrect<10) {
    echo (quiz_message($name, $surname, $age));
    echo "<h1 style='text-align:center' class='blue-text'>$totalCorrect / 20  \n Aaw, no surprise this time, try try try again!</h1>";
    echo "<img class='center' src='https://thumbs.gfycat.com/FlashyDopeyBarnswallow.webp'>";
} elseif($totalCorrect>=10 && $totalCorrect<15) {
    echo (quiz_message($name, $surname, $age));
    echo "<h1 style='text-align:center' class='blue-text'>Nice Try!! <br>  $totalCorrect / 20! <br> You can do better! <br> Keep trying to get the special surprise!! </h1>";
    echo "<img class='center' src='https://techflourish.com/images/animated-clipart-thumbs-up-25.jpg'>";
} else { 
    echo (quiz_message($name, $surname, $age));
    echo "<h1 style='text-align:center' class='blue-text'>Well done!! <br>  $totalCorrect / 20! <br> You get a super special hug! <br> And R10 </h1>";
    echo "<img class='center' src='https://i.giphy.com/media/fxsqOYnIMEefC/giphy.webp'>";
}


?>
    
</body>
</html>