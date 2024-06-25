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
    <link rel="stylesheet" href="pagamento.css">
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
        <div id="product-payment">
            <h2 id="product-title">Pagamento</h2>
            <div id="payment">
                <button type="button" id="payment-pix" onclick="clickPix()">PIX <svg fill="#000000" height="20px" width="20px" version="1.1" class="redirect" id="redirect-pix" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M388.418,240.915L153.752,6.248c-8.331-8.331-21.839-8.331-30.17,0c-8.331,8.331-8.331,21.839,0,30.17L343.163,256 L123.582,475.582c-8.331,8.331-8.331,21.839,0,30.17c8.331,8.331,21.839,8.331,30.17,0l234.667-234.667 C396.749,262.754,396.749,249.246,388.418,240.915z"></path> </g> </g> </g></svg></button>
                <button type="button" id="payment-card" onclick="clickCard()">Cartão de Crédito <svg fill="#000000" height="20px" width="20px" version="1.1" class="redirect" id="redirect-card" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M388.418,240.915L153.752,6.248c-8.331-8.331-21.839-8.331-30.17,0c-8.331,8.331-8.331,21.839,0,30.17L343.163,256 L123.582,475.582c-8.331,8.331-8.331,21.839,0,30.17c8.331,8.331,21.839,8.331,30.17,0l234.667-234.667 C396.749,262.754,396.749,249.246,388.418,240.915z"></path> </g> </g> </g></svg></button>
            </div>
        </div>
        <div id="product-resume">
            <h2 id="title">Resumo</h2>
            <p id="value">Valor do produto <span><strong>R$ 2.749,98</strong></span></p>
            <p id="discount">Descontos <span><strong>- R$ 249,99</strong></span></p>
            <p id="total-value">Valor a vista <span id="change"></span> <span><strong>R$ 2.499,99</strong></span></p>
            <button type="button" id="buy-button">
            Finalizar a compra
            </p>
        </div>
    </main>
    <footer>
        <p></p>
    </footer>
    <script src="script.js">
    </script>
</body>
</html>
