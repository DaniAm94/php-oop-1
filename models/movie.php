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
 function setDirector(object $director){
    $this->director= $director;
 }
}