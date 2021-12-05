<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Motorista'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="motoristas index large-9 medium-8 columns content">
    <h3><?= __('Motoristas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motoristas as $motorista) : ?>
                <tr>
                    <td><?= $this->Number->format($motorista->id) ?></td>
                    <td><?= h($motorista->nome) ?></td>
                    <td><?= h($motorista->cpf) ?></td>
                    <td><?= h($motorista->cnh) ?></td>
                    <td><?= h($motorista->created) ?></td>
                    <td><?= h($motorista->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $motorista->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $motorista->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $motorista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motorista->id)]) ?>
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