<?php
include 'conn.php';

$firstDieSecondRoll = rand(1,6);
$secondDieSecondRoll = rand(1,6);
$thirdDieSecondRoll = rand(1,6);
$fourthDieSecondRoll = rand(1,6);
$fifthDieSecondRoll = rand(1,6);

echo "<form action='thirdRoll.php' method='post' style='text-align:center' />".
            "<br>";
            if(isset($_POST['firstDie'])){
                //select info from first roll sql and insert second roll info into new table
                //do this for each pair of die.
                //'firstDie' is just a placeholder for the first dice roll.
            
                $query = "SELECT first_die FROM first_roll ORDER BY id DESC LIMIT 1" ;  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_assoc($result))  
                        {  
                            $first_die = (int)$row['first_die'];
                            echo "<br>You kept ".$first_die;
                        }            
            }
            else {
                //if first die was not selected.  Show a box that's going to have a random number in it.
            echo "<br>".$firstDieSecondRoll.
                "<input type='checkbox' id='firstDie' name='firstDieSecondRoll' value='First Die' />".
                "<label for='firstDie'> Keep this die</label>";                
            } 
            
                      
    echo   "<br>".$secondDieSecondRoll.
           "<input type='checkbox' id='secondDie' name='secondDie' value='Second Die'>".
           "<label for='secondDie'> Keep this die</label>".
           "<br>".$thirdDieSecondRoll.
           "<input type='checkbox' id='thirdDie' name='thirdDie' value='Third Die'>".
           "<label for='thirdDie'> Keep this die</label>".
           "<br>".$fourthDieSecondRoll.
           "<input type='checkbox' id='fourthDie' name='fourthDie' value='Fourth Die'>".
           "<label for='fourthDie'> Keep this die</label>".
           "<br>".$fifthDieSecondRoll.
           "<input type='checkbox' id='fifthDie' name='fifthDie' value='Fifth Die'>".
           "<label for='fifthDie'> Keep this die</label>"."<br>".
    
           '<input type="submit" name="submit" value="Roll Again!"/>
        </form>';

        if(isset($_POST['firstDie'])){
            //select info from first roll sql and insert second roll info into new table
            //do this for each pair of die.
        
            $query = "SELECT first_die FROM first_roll ORDER BY id DESC LIMIT 1" ;  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_assoc($result))  
                    {  
                        $first_die = (int)$row['first_die'];
                        echo "<br>You kept ".$first_die;
                    }
        
        }
        else {
            //if first die was not selected.  Show a box that's going to have a random number in it.
        
            $first_die = rand(1,6);
        }    

            
 


 













echo "<table border='1' style='margin-top=-100px';>
        <tr><th>Upper Section</th><th>How to Score</th><th>Game #1</th></tr>
        <tr><td>Aces</td><td>Count and add only aces</td><td><!--PHP stuff--></td></tr>
        <tr><td>Twos</td><td>Count and add only twos</td><td><!--PHp stuff--></td></tr>
        <tr><td>Threes</td><td>Count and add only threes</td><td><!--php stuff--></td></tr>
        <tr><td>Fours</td><td>Count and add only fours</td><td><!--php stuff--></td></tr>
        <tr><td>Fives</td><td>Count and add only fives</td><td><!--php stuff--></td></tr>
        <tr><td>Sixes</td><td>Count and add only sixes</td><td><!--php stuff--></td></tr>
        <tr><td>Total Score</td><td>--></td><td><!--php stuff--></td></tr>
        <tr><td>BONUS If total score is 63 or over</td><td>SCORE 35</td><td><!--php stuff--></td></tr>
        <tr><td>Total of upper section</td><td>--></td><td><!--php stuff--></td></tr>
        <tr><th>Lower Section</th></tr>
        <tr><td>3 of a kind</td><td>Add total of all dice</td><td><!--php stuff--></td></tr>
        <tr><td>4 of a kind</td><td>Add total of all dice</td><td><!--php stuff--></td></tr>
        <tr><td>Full House</td><td>Score 25</td><td><!--php stuff--></td></tr>
        <tr><td>Sm.Straight Seq.of 4</td><td>Score 30</td><td><!--php stuff--></td></tr>
        <tr><td>Lg.Straight Seq.of 5</td><td>Score 40</td><td><!--php stuff--></td></tr>
        <tr><td>YAHTZEE Five of a kind</td><td>Score 50</td><td><!--php stuff--></td></tr>
        <tr><td>Chance</td><td>Add total of all dice</td><td><!--php stuff--></td></tr>
        <tr><td>YAHTZEE bonus</td><td>Score 100 each bonus</td><td><!--php stuff--></td></tr>
        <tr><td>Total of Lower Section</td><td>--></td><td><!--php stuff--></td></tr>
        <tr><td>Total of Upper Section</td><td>--></td><td><!--php stuff--></td></tr>
        <tr><td>Grand Total</td><td>--></td><td><!--php stuff--></td></tr>
    </table>";