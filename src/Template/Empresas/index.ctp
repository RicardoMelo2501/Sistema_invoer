<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nova Empresa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Cargas'), ['controller' => 'Cargas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Carga'), ['controller' => 'Cargas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresas index large-9 medium-8 columns content">
    <h3><?= __('Empresas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresas as $empresa) : ?>
                <tr>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                    <td><?= h($empresa->nome_social) ?></td>
                    <td><?= h($empresa->cnpj) ?></td>
                    <td><?= h($empresa->created) ?></td>
                    <td><?= h($empresa->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $empresa->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empresa->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
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