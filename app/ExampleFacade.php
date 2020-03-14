<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use Illuminate\Support\Facades\Facade;
/**
 * Description of ExampleFacade
 *
 * @author alexy
 */
class ExampleFacade extends Facade{
    
    protected static function getFacadeAccessor() {
        return Example::class;
    }
    
}
