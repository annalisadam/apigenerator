<?php

require_once('model/SingleProject.model.php');
require_once('model/Portfolio.model.php');

//Create my first project
$project1 = new SingleProject();
$project1->fakeIt();

//Create my first project
$project2 = new SingleProject();
$project2->fakeIt();

//Create my entier portfolio
$portfolio1 = new Portfolio();
$portfolio1->addProject($project1);
$portfolio1->addProject($project2);

print_r($portfolio1);