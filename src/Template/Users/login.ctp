<?php

$this->Html->css('page', ['block' => true]);

?>
<div style="margin: 15% 40%;">
    <?= $this->Form->create() ?>


    <?= $this->Form->control('username'); ?>
    <?= $this->Form->control('password'); ?>


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>