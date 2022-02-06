<?php


namespace App\classes;


class person
{
    public  $district = 'Savar';
    protected  $division = 'Dhaka';
    private $country = 'Bangladesh';

    public function district ()
    {
        echo 'Savar';

    }
    protected function division ()
    {
        echo 'Dhaka';
    }
    private function country ()
    {
        echo "Bangladesh";
    }

}