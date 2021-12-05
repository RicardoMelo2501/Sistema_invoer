<?php

$this->Html->css('page', ['block' => true]);

?>

<div style="margin: 3% 30%;">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
        echo $this->Form->control('username', ['label' => 'Usuário']);
        echo $this->Form->control('password', ['label' => 'Senha']);
        echo $this->Form->control('email', ['label' => 'Email']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>