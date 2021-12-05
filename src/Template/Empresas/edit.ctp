<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cargas'), ['controller' => 'Cargas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carga'), ['controller' => 'Cargas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Edit Empresa') ?></legend>
        <?php
        echo $this->Form->control('cnpj');
        echo $this->Form->control('nome_social');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>