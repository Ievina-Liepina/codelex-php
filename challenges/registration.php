<?php

class Person
{
    private $name;
    private $lastName;
    private $personalCode;

    public function __construct(string $name, string $lastName, int $personalCode)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->personalCode = $personalCode;
    }
}

class Register{
    private array $regist= [];

    public function addToRegist(Person $person): Person
    {
        return $this->regist[] = $person;
    }

    public function getRegist(): array
    {
        return $this->regist;
    }
}
$sara = new Person('Sarah', 'James', 12312445);
$registr = new Register();
$registr->addToRegist($sara);

while (true){
    echo "Good Day! Please enter data in registration database!" . PHP_EOL;
    echo "[1] Add data to registration" . PHP_EOL;
    echo "[2] Check registration data: " . PHP_EOL;

    $select = intval(readline(">> "));

    if($select == 1)
    {
        $name = readline("Please enter your name: ");
        $lastName = readline("Please enter your lastname: ");
        $personalCode = intval(readline("Please enter your personal code: "));

        $person = new Person($name, $lastName, $personalCode);
        $registr = new Register();
        $registr->addToRegist($person);
       // $registr->getRegist();

    } elseif ($select == 2)
    {
        print_r($registr->getRegist());

    } else {
        exit . PHP_EOL;
    }
    echo "Thank you! Your data is safe!" . PHP_EOL;
    echo PHP_EOL;
}
