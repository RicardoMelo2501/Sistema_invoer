<?php echo $this->Html->css("bootstrap.min.css"); ?>
<div style="margin: 20px;">
    <?= $this->Html->link('VOLTAR PARA CARGAS', ['controller' => 'Cargas', 'action' => 'index'], ['class' => 'button']) ?>
</div>

<div class="col-12 d-flex justify-content-center">
    <img class='logo-img' src="../img/logo.3.png" alt="logo da empresa">
</div>

<body style="background-color: #0F1733;">

    <div class="container overflow-hidden">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <h5 class="card-header">Total de Veiculos Cadastrados</h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $total_veiculos['total'] ?></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <i class="far fa-calendar-alt"></i>
                    <h5 class="card-header">Total de Empresas Ativas</h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $total_empresas['total'] ?></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <h5 class="card-header">Quantidade de Cargas</h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $total_cargas['total'] ?></h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="container overflow-hidden">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <h5 class="card-header">Toneladas Armazenadas</h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $total_peso['total'] ?> toneladas</h5>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <i class="far fa-calendar-alt"></i>
                    <h5 class="card-header">Faturamento</h5>
                    <div class="card-body">
                        <h5 class="card-title">R$ <?php echo $total_faturamento['total'] ?></h5>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <h5 class="card-header">Total Motoristas Cadastrados</h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $total_motoristas['total'] ?></h5>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <h5 class="card-header">Total Portos</h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $total_portos['total'] ?></h5>
                    </div>
                </div>
            </div>

            <img style="margin: 40px 26%; width: 900px;" src="../img/gps.jpg" alt="">

</body>