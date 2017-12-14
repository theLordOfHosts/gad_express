<?php

use Cake\ORM\Entity;

class Service extends Entity
{
    protected $_accessible = [
    '*' => true,
    'id' => false,
    ];
}
