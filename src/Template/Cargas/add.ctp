<?php

$this->Html->css('page', ['block' => true]);

?>

<div style="margin: 3% 30%;">
    <?= $this->Form->create($carga) ?>
    <fieldset>
        <legend><?= __('Cadastrar Carga') ?></legend>
        <?php
        echo $this->Form->control('tipo');
        echo $this->Form->control('empresa_id', ['options' => $empresas]);
        echo $this->Form->control('peso', ['label' => 'Peso (em Toneladas)']);
        echo $this->Form->control('nota_fiscal');
        ?>
    </fieldset>
    <?= $this->Form->button('Cadastrar', ['type' => 'submit']); ?>
    <?= $this->Form->end() ?>
</div>