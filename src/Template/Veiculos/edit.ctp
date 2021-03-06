<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $veiculo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Motoristas'), ['controller' => 'Motoristas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motorista'), ['controller' => 'Motoristas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="veiculos form large-9 medium-8 columns content">
    <?= $this->Form->create($veiculo) ?>
    <fieldset>
        <legend><?= __('Edit Veiculo') ?></legend>
        <?php
        echo $this->Form->control('motorista_id', ['options' => $motoristas]);
        echo $this->Form->control('modelo');
        echo $this->Form->control('placa_carroceria');
        echo $this->Form->control('placa_veiculo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>