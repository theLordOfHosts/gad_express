<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\Validation\Validator;
use Cake\Utility\Text;
use Cake\ORM\Table;
class ClientsTable extends Table{
    public function initialize(array $config) {
        parent::initialize($config);
        $this->addBehavior('Timestamp');
    }
    
    public function beforeSave($event, $entity, $option){
        if($entity->isNew() && !$entity->id){
            $idedTitle = Text::id($entity->title);
            $entity->id = substr($idedTitle, 0, 191);
        }
    }
    public function validationDefault(Validator $validator){
        $validator
                ->notEmpty('nom')
                ->minLength('nom', 2)
                ->maxLength('nom', 25)
                
                ->notEmpty('mail')
                ->minLength('nom', 2)
                ->maxLength('nom', 25)
                
                ->notEmpty('telephone')
                ->minLength('nom', 10)
                ->maxLength('nom', 20)
                
                ->notEmpty('adresse')
                ->minLength('adresse', 10)
                ->maxLength('adresse', 255);
        return $validator;
    }
    public function newEntity($data = null, array $options = array()) {
        parent::newEntity($data, $options);
    }
    public function patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = array()) {
        parent::patchEntity($entity, $data, $options);
    }
}