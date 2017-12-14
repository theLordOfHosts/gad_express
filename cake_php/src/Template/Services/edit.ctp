<h1>Modifier un service</h1>
<?php
    echo $this->Form->create($service);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Sauvegarder le service'));
    echo $this->Form->end();
?>
