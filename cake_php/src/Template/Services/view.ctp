<h1><?= h($service->title) ?></h1>
<p><?= h($service->body) ?></p>
<p>
    <small>
        Créé le : <?= $service->created->format(DATE_RFC850) ?>
    </small>
</p>
<p>
    <?= $this->Html->link('Modifier', ['action' => 'edit', $service->slug]) ?>
</p>
