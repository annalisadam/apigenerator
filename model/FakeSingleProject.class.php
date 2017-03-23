<?php

class FakeSingleProject extends SingleProject{
    public function __construct(){
        parent::__construct();
        
        $this->title = 'Title of project '.$this->id;
    }
}