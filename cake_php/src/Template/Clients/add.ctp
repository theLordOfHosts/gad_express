
<h1>Enregistrer un client</h1>
<?php
    echo $this->Form->create('Clients');
    //echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('nom');
    echo $this->Form->control('postnom');
    echo $this->Form->control('prenom');
    echo $this->Form->control('telephone');
    echo $this->Form->control('email');
    echo $this->Form->control('adresse', ['rows' => '2']);
    echo $this->Form->button(__('Enregistrer'));
    echo $this->Form->end();
?>
