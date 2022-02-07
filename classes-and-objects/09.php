<?php
/*
https://github.com/codelex-io/php-syllabus/blob/main/php-basics/classes-and-objects/bank-account.php

Add the following method:

     function show_user_name_and_balance() { }

 * Your method should return a string that contains the account's name and balance separated by a comma and space.
For example, if an account object named ben has the name "Benson" and a balance of 17.25, the call of
ben.show_user_name_and_balance() should return:

    Benson, $17.25

 * There are some special cases you should handle. If the balance is negative, put the - sign before the dollar sign.
Also, always display the cents as a two-digit number. For example, if the same object had a balance of -17.5,
your method should return:

   Benson, $17.50
 */

class BankAccount
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

    function show_user_name_and_balance(): string
    {
        $format = abs(round($this->getBalance(), 2));
        $format = number_format($format, 2, ".", "");
        $format = sprintf("%s, $%01.2f", $this->getName(), $format);
        return $format;
    }
}

$benson = new BankAccount("Benson", 17.25);
$benson1 = new BankAccount("Benson", -17.5);

echo $benson->show_user_name_and_balance() . PHP_EOL;
echo $benson1->show_user_name_and_balance() . PHP_EOL;