<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carga->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Cargas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cargas form large-9 medium-8 columns content">
    <?= $this->Form->create($carga) ?>
    <fieldset>
        <legend><?= __('Edit Carga') ?></legend>
        <?php
        echo $this->Form->control('tipo');
        echo $this->Form->control('empresa_id', ['options' => $empresas]);
        echo $this->Form->control('peso');
        echo $this->Form->control('nota_fiscal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>