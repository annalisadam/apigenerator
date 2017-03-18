<?php
/**
 * This is the class that contains all the 
 * single projects of the portfolio
 */
class Portfolio{
    
    var $projects = array(); //array of SingleProjects
    
    function addProject($var1)
    {
        array_push($this->projects,$var1);
    }
    
    function deleteProject($project)
    {
        for($i=0; $i<count($this->projects);$i++){
            if($this->projects[$i]->title == $project->title){
                unset($this->projects[$i]);
            }
        }
        
        return;
    }
    
    function fakeIt()
    {
        //Create my first project
        $project1 = new SingleProject();
        $project1->fakeIt();
        
        //Create my first project
        $project2 = new SingleProject();
        $project2->fakeIt();
        
        $this->addProject($project1);
        $this->addProject($project2);
    }
    
}