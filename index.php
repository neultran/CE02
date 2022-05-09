<html>
    <head>
        <meta charset="UTF-8">
        <title>Rando Page</title>
    </head>
    <body>
        <?php
        $score = 0;
        print("<table><tr><th>Player</th><th>Computer</th><th>Rounds</th></tr>\n");
        //here write a loop that will run 10 times and compare the scores, increment the score if grater, decrementing if less and leaving it if equal
        for ($round = 0; $round < 10; $round++)
        {
          $playerScore = rand(1,100);
          $comScore = rand(1,100);
          print("<tr><td>$playerScore</td><td>$comScore</td>");

          if($playerScore < $comScore)
          {
            print("<td>Player lost this round</td>\n");
            $score--;
          }
          elseif ($playerScore > $comScore)
          {
            print("<td>Player won this round</td>\n");
            $score++;
          }
          else
          {
            print("<td>Player and computer tied this round</td>");
          }
    }
        //this should print each round out in the table.
        print("<tr><td colspan=2>$score</td><td>Player Score</td></tr><table>\n");
          ($score > 0)?print("Good Job You Won"):print("Sorry You Lost");
        //Year of the---
print("<br>");
print("<br>");

        $year = date("Y");
        print("It is the year of the:<br>");
        //Here you will write out a switch that will print out the year using the modulo(% 12)
        //Monkey, roster, dog, boar, rat, ox, tiger, rabbit, dragon, snake, horse, and lamb is the order, do not forget a default case
        switch ($year % 12)
        {
          case 0:
            echo "Monkey";
          break;

          case 1:
            echo "Rooster";
          break;

          case 2:
            echo "Dog";
          break;

          case 3:
            echo "Boar";
          break;

          case 4:
            echo "Rat";
          break;

          case 5:
            echo "Ox";
          break;

          case 6:
              echo "Tiger";
          break;

          case 7:
              echo "Rabbit";
          break;

          case 8:
              echo "Dragon";
          break;

          case 9:
              echo "Snake";
          break;

          case 10:
              echo "Horse";
          break;

          case 11:
              echo "Lamb";
          break;

          default:
              echo "Something Broke";
        }

        ?>
    </body>
</html>
