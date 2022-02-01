<?php


namespace App\classes;
use App\classes\User;

class Calculator
//class Calculator extends User
{
    public $firstNumber;
    protected $secondNumber ;
    private $operator;
    public $result;
    public function __construct($data)
    {
//        echo is_array($data) ? 'data is array' : 'data is single variable';

        $this->firstNumber = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     =  $data['operator'];
    }


    public function index()
    {
        switch ($this->operator){
            case '+':
           $this->result = $this->add();
            break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;
            case '/':
                $this->result = $this->dev();
                break;
            case '%':
                $this->result = $this->devr();
                break;
        }
        return $this->result;
//        echo $this->multiplication();
//        $this->user= new User();
//        $this->user->login();
//        $this->user = new User();
//        echo $this->user->city;
//        echo $this->city;
    }

//    protected function one(){
//        echo 'In Two';

    protected function add(){
        return $this->firstNumber +  $this->secondNumber;
    }
//    private function two()
//    {
//        echo 'In Three';
//    }
    protected function sub(){
        return $this->firstNumber -  $this->secondNumber;
    }

    protected function multiplication(){
        return $this->firstNumber *  $this->secondNumber;
    }

    protected function dev(){
        return $this->firstNumber /  $this->secondNumber;
    }
    protected function devr(){
        return $this->firstNumber %  $this->secondNumber;
    }

}
