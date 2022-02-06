<?php


namespace App\classes;
use App\classes\person;


class Example extends person
{
    public $firstName;
    protected $middleName;
    private $lastName;
    public $firstNumber=5;
    protected  $secondNumber=20;
    private $lastNumber = 30;

    public function index()
    {

        $this->firstName='MD';
        echo $this->firstName;

    }
    public  function methodOne ()
    {
        $this->middleName ='Habibur';
        echo $this->middleName;
    }
    public function methodTwo ()
    {
        $this->lastName ='Rahaman';
        echo $this->lastName;
    }
    public function methodThree()
    {
        /*echo $this->distict;*/
        /*echo $this->Division();*/
        $this->district();
        $this->division();
       // $this->country();

    }

}