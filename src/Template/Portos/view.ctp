<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Porto'), ['action' => 'edit', $porto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Porto'), ['action' => 'delete', $porto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $porto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Porto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portos view large-9 medium-8 columns content">
    <h3><?= h($porto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($porto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipio') ?></th>
            <td><?= h($porto->municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($porto->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($porto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faturamento') ?></th>
            <td><?= $this->Number->format($porto->faturamento) ?></td>
        </tr>
    </table>
</div>
