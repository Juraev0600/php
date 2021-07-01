<?php


class fruit{
    //свойство
    public $name;
    public $color = "зеленый";
    public $volume;
    public $age = 0;

    // Методы

    function make_juice(){
        return "\nДелаю фруктовый сок";
    }

    function hosil(){
        return $this -> volume * $this -> age;
    }

    function doru_dodan($doru){
        switch ($doru){
            case 'селитира':
                $this->volume = $this->volume * 2;
                break;
            case 'карбамит':
                $this->volume = $this->volume*1.5;
                break;
        }
    }




}