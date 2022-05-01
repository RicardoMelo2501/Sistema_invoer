<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Porto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portos index large-9 medium-8 columns content">
    <h3><?= __('Portos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('faturamento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($portos as $porto): ?>
            <tr>
                <td><?= $this->Number->format($porto->id) ?></td>
                <td><?= h($porto->nome) ?></td>
                <td><?= h($porto->municipio) ?></td>
                <td><?= h($porto->estado) ?></td>
                <td><?= $this->Number->format($porto->faturamento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $porto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $porto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $porto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $porto->id)]) ?>
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
