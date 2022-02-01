<?php


namespace App\classes;
use App\classes\User;

class Calculator
//class Calculator extends User
{
    public $firstNumber = 10;
    protected $secondNumber =  20;
    private $operator = 30;
    public $result;

    public $user;

    public function index()
    {
        $this->user= new User();
        $this->user->login();
//        $this->user = new User();
//        echo $this->user->city;
//        echo $this->city;
    }

    protected function one(){
        echo 'In Two';
    }
    private function two()
    {
        echo 'In Three';
    }

}
