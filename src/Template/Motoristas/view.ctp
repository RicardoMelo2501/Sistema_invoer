<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Motorista'), ['action' => 'edit', $motorista->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Motorista'), ['action' => 'delete', $motorista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motorista->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Motoristas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motorista'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="motoristas view large-9 medium-8 columns content">
    <h3><?= h($motorista->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($motorista->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($motorista->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnh') ?></th>
            <td><?= h($motorista->cnh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($motorista->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($motorista->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($motorista->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Veiculos') ?></h4>
        <?php if (!empty($motorista->veiculos)) : ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Dono') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Modelo') ?></th>
                    <th scope="col"><?= __('Ano Fabricacao') ?></th>
                    <th scope="col"><?= __('Placa Veiculo') ?></th>
                    <th scope="col"><?= __('Placa Carroceria') ?></th>
                    <th scope="col"><?= __('Motorista Id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($motorista->veiculos as $veiculos) : ?>
                    <tr>
                        <td><?= h($veiculos->id) ?></td>
                        <td><?= h($veiculos->dono) ?></td>
                        <td><?= h($veiculos->status) ?></td>
                        <td><?= h($veiculos->modelo) ?></td>
                        <td><?= h($veiculos->ano_fabricacao) ?></td>
                        <td><?= h($veiculos->placa_veiculo) ?></td>
                        <td><?= h($veiculos->placa_carroceria) ?></td>
                        <td><?= h($veiculos->motorista_id) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Veiculos', 'action' => 'view', $veiculos->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Veiculos', 'action' => 'edit', $veiculos->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Veiculos', 'action' => 'delete', $veiculos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculos->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>