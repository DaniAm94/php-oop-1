<?php
class Actor{
   public $first_name;
   public $last_name;
   public $age;
   public $origin;
   public $debut;

   function __construct(String $first_name, String $last_name, int $age, String $origin, int $debut){
      $this->first_name= $first_name;
      $this->last_name= $last_name;
      $this->age= $age;
      $this->origin= $origin;
      $this->debut= $debut;
   }
   function getFullName(){
      return "$this->first_name $this->last_name";
   }
}