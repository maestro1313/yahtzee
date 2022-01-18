<?php
if(isset($_POST["submit"])){
    
    $firstRollDieOne = rand(1,6);
    $firstRollDieTwo = rand(1,6);
    $firstRollDieThree = rand(1,6);
    $firstRollDieFour = rand(1,6);
    $firstRollDieFive = rand(1,6);
    
    //establish connection
    $conn = new mysqli('localhost','root','','yahtzee');
    
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    else {
        echo "Connected successfully.";
    }
    
    //insert first roll into sql
    $stmt = $conn->prepare("INSERT into first_roll (first_die, second_die,third_die,fourth_die,fifth_die)
    VALUES (?,?,?,?,?)");
    
    $stmt->bind_param("sssss",$firstRollDieOne,$firstRollDieTwo,$firstRollDieThree,$firstRollDieFour,$firstRollDieFive);
    
    $stmt->execute();
    
    echo 
        '<form action="secondRoll.php" method="post" style="text-align:center" />'.
            "<br>".$firstRollDieOne.
           "<input type='checkbox' id='firstDie' name='firstDie' value='First Die' />".
           "<label for='firstDie'> Keep this die</label>".
           "<br>".$firstRollDieTwo.
           "<input type='checkbox' id='secondDie' name='secondDie' value='Second Die'>".
           "<label for='secondDie'> Keep this die</label>".
           "<br>".$firstRollDieThree.
           "<input type='checkbox' id='thirdDie' name='thirdDie' value='Third Die'>".
           "<label for='thirdDie'> Keep this die</label>".
           "<br>".$firstRollDieFour.
           "<input type='checkbox' id='fourthDie' name='fourthDie' value='Fourth Die'>".
           "<label for='fourthDie'> Keep this die</label>".
           "<br>".$firstRollDieFive.
           "<input type='checkbox' id='fifthDie' name='fifthDie' value='Fifth Die'>".
           "<label for='fifthDie'> Keep this die</label>"."<br>".
    
           '<input type="submit" name="submit" value="Roll Again!"/>
        </form>';
    
    //send values for second roll over and use isset and boolean operators to determine what die were kept by the user
    //Plug that info into second_roll table and roll a third time.


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    echo "<table border='1';>
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
        
    $conn->close();
}
else {?>
<!DOCTYPE html/>
<head>
<style></style>
</head>
<body>
	<form action="" method="post" style="text-align:center" />
		<br>
		<input type="submit" name="submit" value="Roll" />
	</form>
    <table border="1";>
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
        <tr><td>Full House</td><td>Score 25</td><!--php stuff--></tr>
        <tr><td>Sm.Straight Seq.of 4</td><td>Score 30</td><td><!--php stuff--></td></tr>
        <tr><td>Lg.Straight Seq.of 5</td><td>Score 40</td><td><!--php stuff--></td></tr>
        <tr><td>YAHTZEE Five of a kind</td><td>Score 50</td><td><!--php stuff--></td></tr>
        <tr><td>Chance</td><td>Add total of all dice</td><td><!--php stuff--></td></tr>
        <tr><td>YAHTZEE bonus</td><td>Score 100 each bonus</td><td><!--php stuff--></td></tr>
        <tr><td>Total of Lower Section</td><td>--></td><td><!--php stuff--></td></tr>
        <tr><td>Total of Upper Section</td><td>--></td><td><!--php stuff--></td></tr>
        <tr><td>Grand Total</td><td>--></td><td><!--php stuff--></td></tr>
    </table>
</body>
</html>
<?php 
}
?>
