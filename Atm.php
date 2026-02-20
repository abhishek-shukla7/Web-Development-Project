<!-- An Atm allows a user to withdraw money
 The initial balance is rs 10000
 Ask the user to enter the withdrwal amount
 If amount is greater than balance-> show "insufficient balance
 If amount is valid->deduct from balance and display remaning balance.
 Allow the user to perform 3 transcation using a loop 
 Use if condition + for /while loop -->


<?php

$balance = 10000;  

echo "Initial Balance : Rs " . $balance . "<br><br>";

for ($i = 1; $i <= 3; $i++) {

    $amount = readline("Enter withdrawal amount for Transaction $i : ");

    if ($amount > $balance) {

        echo "Insufficient Balance\n";

    } elseif ($amount <= 0) {

        echo "Invalid Amount\n";

    } else {

        $balance = $balance - $amount;

        echo "Withdrawal Successful\n";
        echo "Remaining Balance : Rs " . $balance . "\n";
    }

    echo "-------------------------\n";
}

echo "Final Balance : Rs " . $balance;

?>





