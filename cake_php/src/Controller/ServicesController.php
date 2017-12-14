<?php

/*
 * Jimminy
 */


namespace App\Controller;

class ServicesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $services = $this->Paginator->paginate($this->Services->find());
        $this->set(compact('services'));
    }
}
