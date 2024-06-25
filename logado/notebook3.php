<?php 
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo1.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="buymenu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Cloudware</title>
</head>
<body>
    <header>
        <div id="company">
            <a href="index.php"><img src="logo1.jpeg" id="logo-figure" alt="Logo da Cloudware"></a>
            <a href="index.php"><p id="company-name">Cloudware</p></a>
        </div>
        <div id="support">
            <a href="support.php">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" id="icon-support" size="24"><path fill-rule="evenodd" clip-rule="evenodd" d="M20.4175 7.08151H21.8906C23.0537 7.08151 24 8.02776 24 9.18901V12.0015C24 13.1646 23.0537 14.1109 21.8906 14.1109H20.4087C19.275 16.8334 16.9169 18.8234 14.1094 19.4909V20.4396C14.1094 21.6028 13.1631 22.549 12 22.549C10.8369 22.549 9.89062 21.6028 9.89062 20.4396C9.89062 19.2765 10.8431 18.3303 12.0138 18.3303C15.275 18.3303 18.195 16.2596 19.2806 13.1771L19.2837 13.169C19.7212 11.9621 19.8419 10.6296 19.6306 9.31464C19.5681 8.87464 19.4581 8.44714 19.3013 8.03089L19.2956 8.01526C18.3244 5.29089 15.8725 3.29401 13.0487 2.92589C10.3781 2.57589 7.76437 3.59714 6.0525 5.66026C4.31062 7.75964 3.81562 10.504 4.695 13.1903L4.99688 14.1128H2.10938C0.94625 14.1128 0 13.1665 0 12.0034V9.19089C0 8.02776 0.94625 7.08151 2.10938 7.08151H3.5575C3.90313 6.25901 4.37438 5.47964 4.96938 4.76276C6.9925 2.32464 10.0844 1.11339 13.2313 1.53276C16.4062 1.94526 19.165 4.10714 20.4175 7.08151ZM5.67188 16.9253V15.519C6.3125 15.519 6.85375 15.099 7.02312 14.5059C6.14937 13.3947 5.67188 12.0197 5.67188 10.5972C5.67188 7.10717 8.51062 4.26904 12 4.26904C15.4894 4.26904 18.3281 7.10717 18.3281 10.5972C18.3281 14.0865 15.4894 16.9253 12 16.9253H5.67188ZM15.5156 9.89404H14.1094V11.3003H15.5156V9.89404ZM9.89062 9.89404H8.48438V11.3003H9.89062V9.89404ZM12.7031 9.89404H11.2969V11.3003H12.7031V9.89404Z" fill="white"></path></g></svg>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4175 7.08151H21.8906C23.0537 7.08151 24 8.02776 24 9.18901V12.0015C24 13.1646 23.0537 14.1109 21.8906 14.1109H20.4087C19.275 16.8334 16.9169 18.8234 14.1094 19.4909V20.4396C14.1094 21.6028 13.1631 22.549 12 22.549C10.8369 22.549 9.89062 21.6028 9.89062 20.4396C9.89062 19.2765 10.8431 18.3303 12.0138 18.3303C15.275 18.3303 18.195 16.2596 19.2806 13.1771L19.2837 13.169C19.7212 11.9621 19.8419 10.6296 19.6306 9.31464C19.5681 8.87464 19.4581 8.44714 19.3013 8.03089L19.2956 8.01526C18.3244 5.29089 15.8725 3.29401 13.0487 2.92589C10.3781 2.57589 7.76437 3.59714 6.0525 5.66026C4.31062 7.75964 3.81562 10.504 4.695 13.1903L4.99688 14.1128H2.10938C0.94625 14.1128 0 13.1665 0 12.0034V9.19089C0 8.02776 0.94625 7.08151 2.10938 7.08151H3.5575C3.90313 6.25901 4.37438 5.47964 4.96938 4.76276C6.9925 2.32464 10.0844 1.11339 13.2313 1.53276C16.4062 1.94526 19.165 4.10714 20.4175 7.08151ZM5.67188 16.9253V15.519C6.3125 15.519 6.85375 15.099 7.02312 14.5059C6.14937 13.3947 5.67188 12.0197 5.67188 10.5972C5.67188 7.10717 8.51062 4.26904 12 4.26904C15.4894 4.26904 18.3281 7.10717 18.3281 10.5972C18.3281 14.0865 15.4894 16.9253 12 16.9253H5.67188ZM15.5156 9.89404H14.1094V11.3003H15.5156V9.89404ZM9.89062 9.89404H8.48438V11.3003H9.89062V9.89404ZM12.7031 9.89404H11.2969V11.3003H12.7031V9.89404Z" fill="white"></path>
            </a>
        </div>
        <div id="session">
        <p id="user-logado" >Olá, <?php echo $_SESSION['nome'];?></p>
        </div>
    </header>
    <nav>
        <li>
            <a href="pc-gamer.php"><ul class="navmenu" id="menu-pcgamer">PC Gamer</ul></a>
            <a href="monitores.php"><ul class="navmenu" id="menu-monitor">Monitores</ul></a>
            <a href="hardwares.php"><ul class="navmenu" id="menu-hardwares">Hardwares</ul></a>
            <a href="notebooks.php"><ul class="navmenu" id="menu-notebooks">Notebooks</ul></a>
            <a href="peripherals.php"><ul class="navmenu" id="menu-peripherals">Periféricos</ul></a>
        </li>
    </nav>
    <main>
        <div id="product-info">
            <div id="blank"></div>
            <div id="blank2"></div>
            <h1 id="product-name">Notebook Acer Aspire 3 AMD Ryzen 5-7520U, 16GB RAM, SSD 512GB, 15.6" HD, AMD Radeon Graphics, Linux Gutta, Prata - A315-24P-R3CQ
            </h1>
            <picture>
                <img src="notebook3.jpg" id="product-image">
            </picture>
            <div id="product-detail">
                <p id="product-value">
                    <span>R$ 2.599,99</span> à vista <br>
                    <span id="pix-price">no PIX com 10% de desconto</span>
                </p>
                <p id="product-method">
                    <span id="span1">R$ 2.859,98</span> <br>
                    Em até 10x de <span id="span2"> R$ 285,99</span> sem juros no cartão <br>
                    Ou em 1x no cartão com até <span id="span3">5% OFF</span>
                </p>
                <a href="pagamenton3.php"><p id="buy-button">
                    Comprar
                </p></a>
            </div>
        </div>   
        <div id="product-border"></div>
        <div id="product-desc">
            <h2 id="product-title">Descrição do Produto</h2>
            <p id="product-technical">
                <strong>Notebook Acer Aspire 3 A315-24P-R3CQ</strong> <br> <br>
 
                <strong>Família Multitarefa</strong> <br>
                O Aspire 3 foi desenvolvido para aqueles que querem estudar, trabalhar ou se divertir com facilidade gastando pouco. 
                Independente do seu estilo de vida e da sua família, o processador AMD Ryzen 5 7000 series series não vai deixar ninguém na mão. <br> <br>

                <strong>Linux Gutta</strong> <br>
                Tenha uma experiência totalmente nova com o Linux Gutta! O novo sistema operacional oferece maior segurança, já que vem com seu próprio antivírus ativo. 
                Com navegabilidade fácil e muito acessível, o Gutta ainda permite que o usuário o personalize da forma que desejar, customizando avatar, proteção de tela e muito mais. <br> <br>

                <strong>Agilidade pra Quem Precisa</strong> <br>
                Nada melhor do que abrir arquivos e dispositivos importantes sem ter que esperar para ter acesso, não é mesmo?
                Com o SSD 512 GB a leitura e gravação das informações é feita em questão de segundos após ligar o notebook. <br> <br>

                <strong>Conforto na Ponta dos Dedos</strong> <br>
                Digitar por minutos ou por horas será mais confortável com o teclado de resposta rápida. 
                O dispositivo é programado para o português do Brasil, com padrão ABNT 2 e possui teclado numérico independente para facilitar sua rotina. <br> <br>

                <strong>Autonomia de Respeito</strong> <br>
                O Aspire 3 pode ficar ligado até 11 horas* para que você realize suas tarefas sem preocupações. Para completar a carga é só colocar para carregar quando for necessário. <br> <br>
            </p>
        </div>

        <footer>
            <p></p>
        </footer> 
    </main>
</body>
</html>