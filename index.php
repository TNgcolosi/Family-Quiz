<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zulu Bhengu Forrest Words Quiz</title>
    
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <style>

  body, html {
    height: 100%;
    margin: 0;
  }

  

    .blue-text{
      color : blue;
    }

    p {
    font-size: 20px;
    font-family: monospace
    }

    h1 {
      font-family: 'Fredoka One', "cursive";
    }

    h3 {
      font-family: 'Fredoka One', monospace;
    }

    .larger-image {
      width: 100px
    }

    .smaller-image {
      width: 70px
    }

    .thick-yellow-border {
    border-color: yellow;
    border-width: 20px;
    border-style: solid;
    border-radius: 90%;
    }

    .green-background {
    background-color: green;
    }

    .orange-background {
      background-color: orange;
    }

    .red-background {
      background-color: red;
    }

    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    }

    * {
    box-sizing: border-box;
    }

  .column {
  float: left;
  width: 33.33%;
  padding: 10px;
  }

  .row::after {
  content: "";
  clear: both;
  display: table;
  }

  .box {
    border-style: solid;
    border-color: grey;
    border-width: 5px;
    text-align: center;
  }

  .yellow-box {
    background-color: yellow;
    padding: 10px;
  }

  .silver-box {
    background-color: silver;
    padding: 10px;
  }

    </style>
</head>
<body>

<?php require('functions.php'); ?>
    
<div style="padding-left:50px">
<div style="padding-right:50px">
  <h1 style="text-align:center" class="blue-text box yellow-box"> Zulu Bhengu Forrest New Words Quiz 2018 </h1>
  </div>
</div>

<div style="padding-right:50px">
<div style="padding-left:50px" class="row">
<div class="column">
<img class="smaller-image thick-yellow-border" src="http://www.kemtiyugraphics.com/wp-content/uploads/2018/02/QUEEN__NANDI-1.png" alt="Zulu Queen Nandi" style="width: 90%">
</div>
<div class="column">
<img class="smaller-image thick-yellow-border" src="https://thewso.org/wp-content/uploads/2017/04/67481779_s.jpg" alt="The solar system" style="width: 100%">
</div>
<div class="column">
<img class="smaller-image thick-yellow-border" src="http://www.dynamicbrushes.com/wp-content/uploads/2012/11/1182.jpg" alt="hieroglyphics" style="width: 90%">
</div>
</div>
</div>
</div>


<div style="padding-right:50px">
<div style="padding-left:50px">
<div class="box">

  <p>Let's see if you have been remembering all the new words you have learnt. Try your best and if you do well, you will see what your surprise is! </p>
 


  <?php if (!$_POST) { ?> 
 


 <form action="display.php" method="POST">
 
 <br><p><input type="text" name="name" placeholder="Enter your name" required>
 <input type="text" name="surname" placeholder="Enter your surname" required>
 <input type="number" name="age" placeholder="Enter your age" required ></p>
    
    </div>
    </div>
    </div>

    <div style="padding-left:50px">
    <div style="box silver-box ">
  <br><br><p id="top"> Choose the right answer </p>
 


 <?php 

 
 
 $questions = array("1. What does centenary mean?", "2. What do you call the line around the middle of the earth?", "3. Who is Malandela?", "4. What does atmosphere mean?", "5. What is the Zulu name for where you were born?", "6. What is the name of the hottest planet?", "7. Which planet is closest to the sun?", "8. What is a pantomime?", "9. What is Egyptian writing called?", "10. What does ripe mean?", "11. Finish the sentence: 'I am so thirsty, I need to __________", "12. What were the women shouting during the march on Women's Day?", "13. What is the name of the lady who fought the hardest for our freedom?", "14. What is the surname of the famous poet who's first name is Maya?", "15. What is the name of the day that we celebrate who we are and where we come from?", "16. What is in our skin that makes us brown and protects us from the sun?", "17. What are izithakazelo?", "18. What is Shaka Zulu's mother's name?", "19. Where is Cleopatra from?", "20. Who is the moon's best friend?");
 $answers= array("(A) A party of cents <br> (B)  A 100th birthday <br>(C)  Mommy Cs birthday", "(A) The equator <br> (B) The line of capricorn <br> (C)  A hula hoop", "(A)  Your dad <br> (B)  He follows you around <br> (C) The first father of the Zulu nation", "(A)  The air around us <br> (B)  The biggest planet <br> (C) A hundred years", "(A) It is called Indlulamithi <br> (B)  It is called kwaMalandela <br> (C) It is called eMngungundlovu", "(A) Mars <br> (B) Venus <br> (C) Earth", "(A) Mercury <br> (B) Earth <br> (C) Saturn", "(A) A funny play <br> (B) A song <br> (C) A type of car", "(A) Writing <br> (B) Pictures <br> (C) Hieroglyphics", "(A) Ready to eat <br> (B) Ready to fly <br> (C) Ready to sleep", "(A) Sleep <br> (B) Cry <br> (C) Hydrate", "(A) Vosho! <br> (B) Wathint' abafazi Wathint' imbokodo! <br> (C) We want high heels!", "(A) Winnie The Pooh <br> (B) Winnie Madikizela Mandela <br> (C) Cleopatra", "(A) Anderson <br> (B) The Bee <br> (C) Angelou", "(A) Heritage Day <br> (B) Worker's Day <br> (C) Christmas Day", "(A) Melons <br> (B) Money <br> (C) Melanin", "(A) Funny names that don't exist <br> (B) Clan names <br> (C) Zulu food", "(A) Queen of Spades <br> (B) Queen Nandi <br> (C) Queen Thandi", "(A) South Africa <br> (B) Germany <br> (C) Egypt", "(A) Anathi <br> (B) Olwethu <br> (C) uLwandle");

  
 for ($i=0;$i<20;$i++){
  
    
  
    ?>
    
    
    <h3><?php echo $questions[$i];?></h3>
    
  <?php
 
    
        echo "\n $answers[$i] \n";?>

      <form action="display.php" method="POST" >
       <br><br><input type="radio" name="<?php echo "answer".$i ?>" value="A" required> A <br>
       <input type="radio" name="<?php echo "answer".$i ?>" value="B" required> B <br>
       <input type="radio" name="<?php echo "answer".$i ?>" value="C" required> C <br>

      <?php
    }}
    ?>
    <div style="padding-bottom:50px">
    <br><a href="#top"><input type="button" value="Go back to the top and check your answers"></a>
    <input type="submit" value="Click to see if you get a surprise!!">
    </div>
  
 
<br>
 
<?php


   ?>     
</div>
</div>
</div>


</body>
</html>