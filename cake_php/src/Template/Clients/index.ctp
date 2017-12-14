
<h1>Clients</h1>
<p><?= $this->Html->link('Enregistrer un client', ['action' => 'add']) ?></p>

<table>
    <tr>
        <th>Prénoms</th>
        <th>Noms</th>
        <th>Emails</th>
        <th>Adresses</th>
        <th>Création</th>
        <th>Action</th>
    </tr>
    
    <?php foreach ($clients as $client): ?>
    <tr>
        <td>
            <?=$client->prenom?>
        </td>
        <td>
            <?=$this->Html->link($client->nom, ['action' => 'view', $client->id])?>
        </td>
        <td>
            <?=$client->email?>
        </td>
        <td>
            <?=$client->adresse?>
        </td>
        <td>
            <?=$client->cree->format(DATE_RFC850)?>
        </td>
        <td>
            <?=$this->Html->link('Modifier', ['action' => 'edit', $client->id])?>
            <?=$this->Form->postLink(
                    'Supprimer',
                    ['action' => 'delete', $client->id],
                    ['confirm' => 'Êtes-vous sûr?'])
            ?>
        </td>
    </tr>
    <?php endforeach;?>
</table>