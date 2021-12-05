<?php

$this->Html->css('page', ['block' => true]);

?>

<div style="margin: 3% 30%;">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Adicionar Empresa') ?></legend>
        <?php
        echo $this->Form->control('nome_social');
        echo $this->Form->control('cnpj');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>