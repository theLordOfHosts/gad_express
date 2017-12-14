<h1>Ajouter un service</h1>
<?php
    echo $this->Form->create($service);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Sauvegarder le service'));
    echo $this->Form->end();
?>
