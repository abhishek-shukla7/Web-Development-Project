<!-- An Atm allows a user to withdraw money
 The initial balance is rs 10000
 Ask the user to enter the withdrwal amount
 If amount is greater than balance-> show "insufficient balance
 If amount is valid->deduct from balance and display remaning balance.
 Allow the user to perform 3 transcation using a loop 
 Use if condition + for /while loop -->


<?php

$balance = 10000;

echo "<h2>ATM Withdrawal System</h2>";
echo "<b>Initial Balance : Rs $balance</b><br><br>";

if(isset($_REQUEST['withdraw'])){

    for($i=1;$i<=3;$i++){

        $amount = $_REQUEST['amt'.$i];

        if($amount > $balance){

            echo "Transaction $i : Insufficient Balance <br>";

        }
        elseif($amount <=0 || $amount==""){

            echo "Transaction $i : Invalid Amount <br>";
        }
        else{

            $balance = $balance - $amount;

            echo "Transaction $i Successful <br>";
            echo "Remaining Balance : Rs $balance <br>";
        }

        echo "--------------------------- <br>";
    }

    echo "<h3>Final Balance : Rs $balance</h3>";
}

?>

<h3>Withdraw Money</h3>

<form method="post">

Transaction 1 :
<input type="number" name="amt1"><br><br>

Transaction 2 :
<input type="number" name="amt2"><br><br>

Transaction 3 :
<input type="number" name="amt3"><br><br>

<input type="submit" name="withdraw" value="Withdraw Using POST">

</form>

<hr>

<form method="get">

Transaction 1 :
<input type="number" name="amt1"><br><br>

Transaction 2 :
<input type="number" name="amt2"><br><br>

Transaction 3 :
<input type="number" name="amt3"><br><br>

<input type="submit" name="withdraw" value="Withdraw Using GET">

</form>



