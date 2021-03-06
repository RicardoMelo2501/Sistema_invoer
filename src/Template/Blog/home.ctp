<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transvoer</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <header class="cabecario">
        <img class='logo-img' src="../img/logo.3.png" alt="logo da empresa">
        <div id="atalhos">
            <?= $this->Html->link(__('Entrar'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'btn btn-success']) ?>
            <?= $this->Html->link(__('Cadastro'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'logo-img']) ?>
        </div>
    </header>
    <main>
        <div class="apresentacao">
            <div class="container">
                <div class="conteudo-apresentacao">
                    <h1>GERENCIE A SUA CARGA NA PALMA DA MÃO</h1>
                    <p>TRANSVOER - Exportação e Importação</p>
                </div>
                <div class="botao-apresentacao">
                    <?= $this->Html->link(__('Cadastro'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'botao']) ?>
                </div>
            </div>
        </div>
    </main>
    <article>
        <div class="conteudo-2">
            <h2>Como Funcionamos</h2>
            <div style="margin-top: 60px;">
            <img src="../img/Expedição_Nacional-removebg-preview 1.png" alt="">
            </div>
        </div>
        <div class="quem-somos">
            <div class="conteudo">
                <h2>Atuamos na ligação entre os Portos do Nordeste.</h2>
                <p>A TRANSVOER foi desenvolvida visando suprir as novas demandas e necessidades apresentadas pelo mercado. Para isso, contamos com toda a experiência dos parceiros para viabilizar o fechamento de negócios dos seus clientes.</p>
            </div>
            <div class="botao-quem-somos">
                <a href="sobre-a-plataforma.html" class="botao">Sobre a plataforma</a>
            </div>
            <!-- <video id="video" poster="poster.JPG" autoplay muted loop> 
                <source src="videos/pexels-kelly-lacy-6756500.mp4" type="video/mp4">
            </video> -->
        </div>
    </article>
    <article>
        <div class="Tela-beneficios">
            <div class="conteudo">
                <h2>Por que escolher a <span style="color: #163295;">TRANSVOER</span>?</h2>
                <p>Além de contar com o conhecimento técnico de nossa equipe a uma ampla carteira de fornecedores e empresas parceiras, o que favorece o fechamento de negócios são:</p>
            </div>
            <div class="beneficios">
                <div class="descricao-beneficios">
                    <ul class="lista-beneficios">
                        <li><i class="fas fa-route" style="font-size: 50px;"></i> Cáculo de trajetos e horários de entregas.</li>
                        <li><i class="fas fa-comment-dots" style="font-size: 50px;"></i> Facilidade de comunicação com os transportadores e clientes.</li>
                        <li><i class="fas fa-comment-dollar" style="font-size: 50px;"></i> Informações sobre o custo previsto em relação ao valor do frete.</li>
                        <li><i class="fas fa-map-marked-alt" style="font-size: 50px;"></i> Escolha do trajeto intermodal.</li>
                    </ul>
                </div>
                <div class="imagem">
                    <!-- <img src="img/suape 1.png" alt=""> -->
                    <iframe width="530" height="700" src="https://www.youtube.com/embed/cxpVlKTgTdk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </article>
    <footer>
        <div class="tela-suporte">
            <div class="questionario">
                <h3>Como podemos te ajudar?</h3>
                <p>Deixe aqui sua mensagem, retornaremos em breve.</p>
                <form action="">
                    <p>Nome</p>
                    <input type="text" name="" id="">
                    <p>Email</p>
                    <input type="email" name="" id="">
                    <p>Assuto</p>
                    <input type="text" name="" id="">
                    <p>Mensagem</p>
                    <input type="text" name="" id="">
                    <p>Telefone</p>
                    <input type="number" name="" id="">
                </form>
                <a href="" class="botao-ajuda">Enviar</a>
            </div>
            <div class="entre-em-contato">
                <h3>Entre em contato</h3>
                <p><i class="fas fa-map-marker-alt">&nbsp;Recife-PE</i></p>
                <p><i class="fas fa-phone">&nbsp;+55(81)00000-0000 </i></p>
                <p><i class="fas fa-envelope">&nbsp;transvoer@transvoer.com</i></p>
                <p><i class="fas fa-clock">&nbsp;Segunda-Feira á Sexta-Feira 09:00 - 18:00</i></p>
            </div>
        </div>
        <div class="rodape">
            <p>Copyright © 2021 - Todos Os Direitos Reservados - TRANSVOER Exportação e Importação</p>
        </div>
    </footer>
</body>

</html>