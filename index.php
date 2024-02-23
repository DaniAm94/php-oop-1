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
}

$chris_columbus= new Director('Chris', 'Columbus', 68,'Tutto quella notte', 'Qualcuno salvi il natale 2' );

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
}
$daniel_radcliffe= new Actor('Daniel', 'Radcliffe', 35, 'England', 1999);
$ruper_grint= new Actor('Rupert', 'Grint', 36, 'Ireland', 2001);
$emma_watson= new Actor('Emma', 'Watson', 34, 'France', 2001);

 class Movie{
    public $title;
    public $plot;
    public $language;
    public $cast;
    public $director;

 function __construct(String $title, String $plot, String $language){
    $this->title= $title;
    $this->plot= $plot;
    $this->language= $language;
 }
 function addCastMember($actor){
    $this->cast[]= $actor;
 }
 function setDirector(object $director){
    $this->director= $director;
 }

 
}
$plot = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, accusamus nobis numquam voluptates earum eveniet dolorem ad ex iusto consectetur, quidem illum quia possimus laboriosam nostrum atque iure corrupti incidunt?';
$harry_potter = new Movie('Harry Potter and the philosopher\'s stone', $plot, 'english');
$harry_potter->addCastMember($daniel_radcliffe);
$harry_potter->addCastMember($ruper_grint);
$harry_potter->addCastMember($emma_watson);
$harry_potter->setDirector($chris_columbus);
var_dump($harry_potter);

$harry_potter_2= new Movie('Harry Potter and the chamber of secrets', $plot, 'english');
$harry_potter_2->addCastMember($daniel_radcliffe);
$harry_potter_2->addCastMember($ruper_grint);
$harry_potter_2->addCastMember($emma_watson);
$harry_potter_2->setDirector($chris_columbus);
var_dump($harry_potter_2);

?>