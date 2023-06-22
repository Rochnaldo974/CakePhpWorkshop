<div class="user index content">
    <?=$this->Html->link(__('Nouvel Utilisateur'), ['action'=> 'add'], ['class'=> 'button float-right']) ?>
    <h3><?=__('User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                <th>//Utiliser la méthode Paginator pour pouvoir triés les élements de la table</th>
                <th>//</th>
                <th>//</th>
                <th class="actions"><?=__('Actions') ?></th>
            </tr>
            </thead>
        <tbody>// afficher les élements de la table en boucle dans les balises <td>

        </tbody>
    </table>
</div>
<div class="paginator">// ajouter de la pagination pour pouvoir changer de pages</div>
</div>