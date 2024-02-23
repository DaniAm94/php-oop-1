<?php
class Director{
    public $first_name;
    public $last_name;
    public $age;
    public $first_production;
    public $last_production;
 
    function __construct(String $first_name, String $last_name, int $age, String $first_production, String $last_production){
       $this->first_name= $first_name;
       $this->last_name= $last_name;
       $this->age= $age;
       $this->first_production= $first_production;
       $this->last_production= $last_production;
    }
 
    function getFullName(){
       return "$this->first_name $this->last_name";
    }
 }