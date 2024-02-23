<?php
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
 function setDirector($director){
    $this->director= $director;
 }

 
}
$plot = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, accusamus nobis numquam voluptates earum eveniet dolorem ad ex iusto consectetur, quidem illum quia possimus laboriosam nostrum atque iure corrupti incidunt?';
$harry_potter = new Movie('Harry Potter and the philosopher stone', $plot, 'english');
$harry_potter->addCastMember('Daniel Radcliffe');
$harry_potter->addCastMember('Rupert Grint');
$harry_potter->addCastMember('Emma Watson');
$harry_potter->setDirector('David Yates');
var_dump($harry_potter);

$harry_potter_2= new Movie('Harry Potter and the chamber of secrets', $plot, 'english');
$harry_potter_2->addCastMember('Tom Felton');
$harry_potter_2->addCastMember('Matthew Lewis');
$harry_potter_2->addCastMember('Bonnie Wright');
$harry_potter_2->setDirector('David Yates');
var_dump($harry_potter_2);

?>