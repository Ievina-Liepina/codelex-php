<?php
/**
The questions in this exercise all deal with a class Dog that you have to program from scratch.

1.Create a class Dog. Dogs should have a name, and a sex.
2.Make a class DogTest with a Main method in which you create the following Dogs:
 * Max, male
 * Rocky, male
 * Sparky, male
 * Buster, male
 * Sam, male
 * Lady, female
 * Molly, female
 * Coco, female
3.Change the Dog class so that each dog has a mother and a father.
4.Add to the main method in DogTest, so that:
 * Max has Lady as mother, and Rocky as father
 * Coco has Molly as mother, and Buster as father
 * Rocky has Molly as mother, and Sam as father
 * Buster has Lady as mother, and Sparky as father
5.Change the dog class to include a method fathersName that return the name of the father. If the father reference is
null, return "Unknown". Test in the DogTest main method that it works.
 * referenceToCoco.FathersName() returns the string "Buster"
 * referenceToSparky.FathersName() returns the string "Unknown"
6.Change the dog class to include a method boolean HasSameMotherAs(Dog otherDog). The method should return true on the
call
 * referenceToCoco.HasSameMotherAs(referenceToRocky). Show that the new method works in the DogTest main method.
 **/

class Dog
{
    private string $name;
    private string $sex;
    private string $mother;
    private string $father;

    public function __construct(string $name, string $sex, string $mother = "Unknown", string $father = "Unknown")
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getSex(): string
    {
        return $this->sex;
    }

    public function getMother(): string
    {
        return $this->mother;
    }

    public function getFather(): string
    {
        return $this->father;
    }

    public function sameMotherAs(Dog $dog): bool
    {
        if ($this->mother === $dog->getMother()) {
            return true;
        } else {
            return false;
        }
    }
}


class DogTest
{
    private array $dogs;

    public function __construct(array $dogs)
    {
        $this->dogs = $dogs;
    }

    public function getDogs(): array
    {
        return $this->dogs;
    }
}

$dogs = new DogTest([
    $dog1 = new Dog('Max', 'male', 'Lady', 'Rocky'),
    $dog2 = new Dog('Rocky', 'male', 'Molly', 'Sam'),
    $dog3 = new Dog('Sparky', 'male'),
    $dog4 = new Dog('Buster', 'male', 'Lady', 'Sparky'),
    $dog5 = new Dog('Sam', 'male'),
    $dog7 = new Dog('Lady', 'female'),
    $dog7 = new Dog('Molly', 'female'),
    $dog8 = new Dog('Coco', 'female', 'Molly', 'Sparky')
]);
echo PHP_EOL;

foreach ($dogs->getDogs() as $dog){
    echo $dog->getName() . ', (' . $dog->getSex() . ') has ' . $dog->getMother() . ' as mother, and ' . $dog->getFather(). ' as father' . PHP_EOL;
}

echo PHP_EOL;
echo $dog8->getName() . ' has same mother as' . $dog2->getName() . ':  ' . $dog8->sameMotherAs($dog2) . PHP_EOL;
echo PHP_EOL;
echo $dog4->getName() . ' has same mother as' . $dog1->getName() . ':  ' . $dog4->sameMotherAs($dog1) . PHP_EOL;
echo PHP_EOL;












































