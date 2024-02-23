<?php
require __DIR__.'/../models/director.php';
require __DIR__.'/../models/actor.php';
require __DIR__.'/../models/movie.php';

// Director
$chris_columbus= new Director('Chris', 'Columbus', 68,'Tutto quella notte', 'Qualcuno salvi il natale 2' );

// Actors
$daniel_radcliffe= new Actor('Daniel', 'Radcliffe', 35, 'England', 1999);
$ruper_grint= new Actor('Rupert', 'Grint', 36, 'Ireland', 2001);
$emma_watson= new Actor('Emma', 'Watson', 34, 'France', 2001);

 // Movies
$plot = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, accusamus nobis numquam voluptates earum eveniet dolorem ad ex iusto consectetur, quidem illum quia possimus laboriosam nostrum atque iure corrupti incidunt?';
$harry_potter = new Movie('Harry Potter and the philosopher\'s stone', $plot, 'english');
$harry_potter->addCastMember($daniel_radcliffe);
$harry_potter->addCastMember($ruper_grint);
$harry_potter->addCastMember($emma_watson);
$harry_potter->setDirector($chris_columbus);

$harry_potter_2= new Movie('Harry Potter and the chamber of secrets', $plot, 'english');
$harry_potter_2->addCastMember($daniel_radcliffe);
$harry_potter_2->addCastMember($ruper_grint);
$harry_potter_2->addCastMember($emma_watson);
$harry_potter_2->setDirector($chris_columbus);


$movies[]=$harry_potter;
$movies[]=$harry_potter_2;