<?php

$this->Html->css('page', ['block' => true]);

?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Listar Cargas'), ['controller' => 'Cargas', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">

    <h3>ID da Empresa: <?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($empresa->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Social') ?></th>
            <td><?= h($empresa->nome_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cargas') ?></h4>
        <?php if (!empty($empresa->cargas)) : ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Tipo') ?></th>
                    <th scope="col"><?= __('Empresa Id') ?></th>
                    <th scope="col"><?= __('Peso') ?></th>
                    <th scope="col"><?= __('Nota Fiscal') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($empresa->cargas as $cargas) : ?>
                    <tr>
                        <td><?= h($cargas->id) ?></td>
                        <td><?= h($cargas->tipo) ?></td>
                        <td><?= h($cargas->empresa_id) ?></td>
                        <td><?= h($cargas->peso) ?></td>
                        <td><?= h($cargas->nota_fiscal) ?></td>
                        <td><?= h($cargas->created) ?></td>
                        <td><?= h($cargas->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Cargas', 'action' => 'view', $cargas->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Cargas', 'action' => 'edit', $cargas->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cargas', 'action' => 'delete', $cargas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cargas->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>