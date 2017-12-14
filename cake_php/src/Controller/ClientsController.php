<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ClientsController extends AppController{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }
    public function index(){
        $this->loadComponent('Paginator');
        $clients = $this->Paginator->paginate($this->Clients->find());
        $this->set(compact('clients'));
    }
    public function view($id){
        $client = $this->Clients->findById($id)->firstOrFail();
        $this->set(compact('client'));
    }
//    public function edit($id){
//        
//        $client = $this->Clients->findById($id)->firstOrFail();
//        if ($this->request->is(['post', 'put'])){
//            $this->Clients->patchEntity($client, $this->request->getData());
//            if (true) {
//                $this->Flash->success(__('Profile mis à jour'));
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('Impossible de modifier ce compte'));
//        }
//        $this->set('client', $client);
//    }
    public function edit($id){
        if($this->request->is('post')){
            $clients_table= TableRegistry::get('clients');
            $clients=$clients_table->get($id);
            $clients->nom=$this->request->data('nom');
            $clients->postnom=$this->request->data('postnom');
            $clients->prenom=$this->request->data('prenom');
            $clients->telephone=$this->request->data('telephone');
            $clients->email=$this->request->data('email');
            $clients->adresse=$this->request->data('adresse');
            
            if($clients_table->save($clients)){
                $this->Flash->success(__('Profile mis à jour'));
                return $this->redirect(['action' => 'index']);
            }
        }else{
            $clients_table= TableRegistry::get('clients')->find();
            $clients=$clients_table->where(['id' => $id])->first();
            $this->set('client', $clients);
        }
    }
//    public function add(){
//        if($this->request->is('post')){
//            $clients_table= TableRegistry::get('clients');
//            $clients=$clients_table->newEntity();
//            $clients->nom=$this->request->data('nom');
//            $clients->postnom=$this->request->data('postnom');
//            $clients->prenom=$this->request->data('prenom');
//            $clients->telephone=$this->request->data('telephone');
//            $clients->email=$this->request->data('email');
//            $clients->adresse=$this->request->data('adresse');
//            
//            if($clients_table->save($clients)){
//                $this->Flash->success(__('Profile mis à jour'));
//                return $this->redirect(['action' => 'index']);
//            }
//        }
//    }
    public function add(){
        if($this->request->is('post')){
            $nom    = $this->request->data('nom');
            $postnom    = $this->request->data('postnom');
            $prenom     = $this->request->data('prenom');
            $telephone  = $this->request->data('telephone');
            $email      = $this->request->data('email');
            $adresse    = $this->request->data('adresse');
            
            $clients_table  = TableRegistry::get('clients');
            
            $clients    = $clients_table->newEntity();
            
            $clients->nom   = $nom;
            $clients->postnom   = $postnom;
            $clients->prenom    = $prenom;
            $clients->telephone = $telephone;
            $clients->email     = $email;
            $clients->adresse   = $adresse;
            
            if($clients_table->save($clients)){
                echo 'Hello word!';
            }
        }
    }
//    public function add(){
//        $client = $this->Clients->newEntity();
//        //$clients = \Cake\ORM\TableRegistry::get('Clients');
//        
//        if($this->request->is('post')){
//            $client = $this->Clients->patchEntity($client, $this->request->data());
//            $client=$client->newEntities($this->request->data());
//            //$client->id=1;
//            if($this->Client->save($client)){
//                $this->Flash->success(__('Enregistrement effectué avec succès'));
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('Echec de l\'enregistrement'));
//        }
//        $this->set('client', $client);
//    }

    public function delete($id){
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->findById($id)->firstOrFail();
        if($this->Clients->delete($client)){
            $this->Flash->success(__('The {0} client has been deleted.', $client->nom));
            return $this->redirect(['action' => 'index']);
        }
    }
}