<!DOCTYPE html>
<html>
  <head>
    <title>GOOD JOB!</title>
    <link rel="prefetch" href="good.png">
    <link rel="prefetch" href="good.gif">
  </head>
  <body>
    <?php
      $f = fopen("mary.txt", "w");
      $log = $_POST["log"];
      $t = $_POST["time"];
      if (!isset($_POST["log"])){
        echo "<style>body{display:none;}</style>";
      }else{
        fwrite($f, "TIME TAKEN: $t\n".str_replace("|", "\n", $log));
      }
      fclose($f);
    ?>
    <h1>GOOD JOB, MARY!</h1>
    <img src="good.gif">
    <p>Your progress has been written to <a href="mary.txt" target="_blank">a file</a> to let me know that you're finished. Since I'm in my final exams, don't expect me to be quick! Be patient and I'll give you something once I know you've finished this challenge.</p>
    <p>Thanks for sticking around, I hope you had fun! Now that you're 13, go watch <a href="https://id.m.wikipedia.org/wiki/Jailangkung:_Sandekala" target="_blank">Jailangkung Sandekala</a>, use Discord, or do something.</p>
    <p>P.S. if you exit your browser and reload this page, it'll be empty. Take a screenshot if you feel like it!</p>
    <p>P.P.S. if you want an extra challenge, there's a "hidden" image in this page - go find it!</p>
    <img src="good.png">
  </body>
</html>