<?php
class Animal
{
    public $from, $age;

    public function getInfo()
    {
        return "$this->from $this->age";
    }
}

class Cat extends Animal
{
    public $name;
    protected $privateNumber;

    public function getInfo()
    {
        return parent::getInfo() . " " . $this->name;
    }

    public function set_privateNumber($privateNumber)
    {
        if (is_numeric($privateNumber)) {
            return $this->_privateNumber = $privateNumber;
        } else return $this->_privateNumber = " Number only";
    }
    public function get_privateNumber(){
        return strval($this->_privateNumber);
    }
}


class Mleko extends Cat
{
    public $eat;

    public function getInfo()
    {
        return parent::getInfo() . " " . $this->eat;
    }
}


$tiger = new Mleko();

$tiger->name = 'Jo';
$tiger->from = 'Africa';
$tiger->age = 3;
$tiger->eat = "milk";
$tiger->set_privateNumber('457');
echo $tiger->getInfo();
echo $tiger->get_privateNumber();
