<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $motorista->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $motorista->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Motoristas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Veiculo'), ['controller' => 'Veiculos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="motoristas form large-9 medium-8 columns content">
    <?= $this->Form->create($motorista) ?>
    <fieldset>
        <legend><?= __('Edit Motorista') ?></legend>
        <?php
        echo $this->Form->control('nome');
        echo $this->Form->control('cpf');
        echo $this->Form->control('cnh');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>