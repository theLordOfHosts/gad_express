<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Cake\ORM\Entity;

class Client extends Entity{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
    public function __construct(array $properties = array(), array $options = array()) {
        parent::__construct($properties, $options);
    }
}