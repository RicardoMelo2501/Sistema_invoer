<?php

$this->Html->css('page', ['block' => true]);

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Cargas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="cargas view large-9 medium-8 columns content">
    <h3><?= h($carga->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($carga->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $carga->has('empresa') ? $this->Html->link($carga->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $carga->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota Fiscal') ?></th>
            <td><?= h($carga->nota_fiscal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carga->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($carga->peso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($carga->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($carga->modified) ?></td>
        </tr>
    </table>
</div>