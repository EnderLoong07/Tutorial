<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Example
 *
 * @author alexy
 */
class Example {
    protected $collaborator;
    protected $foo;
    
    public function _construct(Collaborator $collaborator, $foo){
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }
    
    
    public function handle(){
        die("it's work");
    }
}
