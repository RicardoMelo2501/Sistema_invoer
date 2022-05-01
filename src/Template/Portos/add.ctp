<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Portos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="portos form large-9 medium-8 columns content">
    <?= $this->Form->create($porto) ?>
    <fieldset>
        <legend><?= __('Add Porto') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('municipio');
            echo $this->Form->control('estado');
            echo $this->Form->control('faturamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
