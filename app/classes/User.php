<?php


namespace App\classes;


class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Karwanbazar';

    public function login()
    {
        echo 'in Login';
    }
    private function logout()
    {
        echo 'in Logout';
    }

    private function profile()
    {
        echo 'in Profile';

    }

}