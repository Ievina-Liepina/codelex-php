<?php
/*
The object of the class Account represents a bank account that has a balance (meaning some amount of money).
The accounts are used as follows:

$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state";
echo $bartos_account;
echo $bartos_swiss_account;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance();
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->balance();

echo "Final state";
echo $bartos_account;
echo $bartos_swiss_account;
Your first account
Create a program that creates an account with the balance of 100.0, deposits 20.0 and prints the account.

Note! do all the steps described in the exercise exactly in the described order!

Your first money transfer
Create a program that:

Creates an account named "Matt's account" with the balance of 1000
Creates an account named "My account" with the balance of 0
Withdraws 100.0 from Matt's account
Deposits 100.0 to My account
Prints both accounts
Money transfers
In the above program, you made a money transfer from one person to another. Let us next create a method that does
the same!

Create the method:

function transfer(Account $from, Account $to, int $howMuch) { }
The method transfers money from one account to another. You do not need to check that the from account has
enough balance.

After completing the above, make sure that your main method does the following:

Creates an account "A" with the balance of 100.0
Creates an account "B" with the balance of 0.0
Creates an account "C" with the balance of 0.0
Transfers 50.0 from account A to account B
Transfers 25.0 from account B to account C
 */

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdrawal(int $amount): void
    {
        $this->balance -= $amount;
    }

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }
}
$matt = new Account("Matt's account", 1000);
$my = new Account("My account", 0);
$matt->withdrawal(100.0);
$my->deposit(100.0);

echo $matt->getName() . ', ' . $matt->getBalance() . '$' . PHP_EOL;
echo $my->getName() . ', ' . $my->getBalance() . '$' . PHP_EOL;

function transfer(Account $from, Account $to, int $amount)
{
    $from->withdrawal($amount);
    $to->deposit($amount);
}

$A = new Account("Anna's account", 100.0);
$B = new Account("Brenda's account", 0.0);
$C = new Account("Christa's account", 0.0);

transfer($A, $B, 50.0);
transfer($B, $C, 25.0);

echo $A->getName() . ', ' . $A->getBalance() . '$' . PHP_EOL;
echo $B->getName() . ', ' . $B->getBalance() . '$' . PHP_EOL;
echo $C->getName() . ', ' . $C->getBalance() . '$' . PHP_EOL;
