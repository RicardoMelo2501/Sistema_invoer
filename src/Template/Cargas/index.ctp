<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['controller' => 'Blog', 'action' => 'home']) ?></li>
        <li><?= $this->Html->link(__('Dashboard'), ['controller' => 'Blog', 'action' => 'dashboard']) ?></li>
        <li><?= $this->Html->link(__('Nova Carga'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Novo Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Novo Porto'), ['controller' => 'Portos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Nova Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Carga'), ['controller' => 'Cargas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Portos'), ['controller' => 'Portos', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cargas index large-9 medium-8 columns content">
    <h3><?= __('Cargas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso (Tonelada)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nota_fiscal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cargas as $carga) : ?>
                <tr>
                    <td><?= $this->Number->format($carga->id) ?></td>
                    <td><?= h($carga->tipo) ?></td>
                    <td><?= $carga->has('empresa') ? $this->Html->link($carga->empresa->nome_social, ['controller' => 'Empresas', 'action' => 'view', $carga->empresa->id]) : '' ?></td>
                    <td><?= $this->Number->format($carga->peso) ?></td>
                    <td><?= h($carga->nota_fiscal) ?></td>
                    <td><?= h($carga->created) ?></td>
                    <td><?= h($carga->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $carga->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $carga->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $carga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carga->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>