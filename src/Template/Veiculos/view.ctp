<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Veiculo'), ['action' => 'edit', $veiculo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Veiculo'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Veiculos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motoristas'), ['controller' => 'Motoristas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motorista'), ['controller' => 'Motoristas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="veiculos view large-9 medium-8 columns content">
    <h3><?= h($veiculo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Motorista') ?></th>
            <td><?= $veiculo->has('motorista') ? $this->Html->link($veiculo->motorista->nome, ['controller' => 'Motoristas', 'action' => 'view', $veiculo->motorista->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($veiculo->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Placa Carroceria') ?></th>
            <td><?= h($veiculo->placa_carroceria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Placa Veiculo') ?></th>
            <td><?= h($veiculo->placa_veiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($veiculo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($veiculo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($veiculo->modified) ?></td>
        </tr>
    </table>
</div>