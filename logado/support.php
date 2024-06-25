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
    <link rel="stylesheet" href="support.css">
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
        <div id="support">
            <h2 id="title">Suporte técnico</h2>
            <form method="" action="">
                <input placeholder="Nome de usuário*" type="text" name="username" class="support-input" id="username">
                <input placeholder="E-mail*" type="text" name="email" class="support-input" id="email">
                <input placeholder="Descreva o seu problema..." type="text" name="problem" class="support-input" id="problem">
                <button id="send-support">Solicitar suporte</button>
            </form>
        </div>
    </main>
    <footer>
        <p></p>
    </footer>
</body>
</html>

