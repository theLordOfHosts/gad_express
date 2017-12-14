<h1>Modifier profile</h1>
<?php
    echo $this->Form->create('Clients');
    echo $this->Form->control('id', ['type' => 'hidden']);
    echo $this->Form->control('nom');
    echo $this->Form->control('postnom');
    echo $this->Form->control('prenom');
    echo $this->Form->control('telephone');
    echo $this->Form->control('email');
    echo $this->Form->control('adresse');
    echo $this->Form->control('id', ['type' => 'hidden']);
    echo $this->Form->button(__('Enregistrer les modifications'));
    echo $this->Form->end();
?>