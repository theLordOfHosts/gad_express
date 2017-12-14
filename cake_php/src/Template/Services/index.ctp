<h1>Services</h1>
    <p>
        <?= $this->Html->link("Ajouter un service", ['action' => 'add']) ?>
    </p>

    <table>
        <tr>
            <th>Designation</th>
            <th>Prestataire ID</th>
            <th>Action</th>
        </tr>
    <!-- C'est ici que nous bouclons sur notre objet Query $services pour afficher
    les informations de chaque service -->
        <?php foreach ($services as $service): ?>
            <tr>
                <td>
                    <?= $this->Html->link($service->designation, ['action' => 'view', $service->id]) ?>
                </td>
                <td>
                    <?= $service->created->format(DATE_RFC850) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
