
<h1><?= h($client->nom),' ', h($client->prenom) ?></h1>
<p><?= h($client->telephone) ?></p>
<p><?= h($client->email) ?></p>
<p><?= h($client->adresse) ?></p>
<p><small>Creé le: <?= $client->cree->format(DATE_RFC850) ?></small></p>
<p><small>Modifié le: <?= $client->modifie->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Modifier', ['action' => 'edit', $client->id]) ?></p>
