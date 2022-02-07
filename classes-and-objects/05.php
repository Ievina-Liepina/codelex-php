<?php
/*
Create a class called Date that includes: three pieces of information as instance variables — a month, a day and a year.

Your class should have a constructor that initializes the three instance variables and assumes that the values provided
are correct. Provide a set and a get for each instance variable.

Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.

Write a test application named DateTest that demonstrates class Date capabilities.
 */

class Date
{
    private int $month;
    private int $day;
    private int $year;

    /**
     * @throws Exception
     */
    public function __construct(int $month = 12, int $day = 31, int $year = 1999)
    {
        $this->month =  $month = intval(readline("Enter month: "));
        $this->day = $day = intval(readline("Enter day: "));
        $this->year = $year = intval(readline("Enter year: "));

        if($month > 0 && $month <= 12) {
            return true;
        } else {
            throw new Exception('That kind of month does\'nt exist!');
            exit;
        }
        if($day > 0 && $day <= 31) {
            throw new Exception('That kind of integer in month days does\'nt exist!');
            exit;
        }
        if(strlen($year) < 5) {
            return true;
        } else {
            throw new Exception('There cant be more than 4 numbers in year!');
            exit;
        }
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function displayDate() : void
    {
        echo ltrim(sprintf("%4d/%02d/%02d", $this->getMonth(), $this->getDay(), $this->getYear())) . PHP_EOL;
    }
}

(new Date())->displayDate();



