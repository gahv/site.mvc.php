<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= url("/Themes/assets/style.css"); ?>">
</head>
<body>
    <nav class="main_nav">
        <?php
        if ($this->section("sidebar")):
            echo $this->section("sidebar");
        else:
        ?>
        <a href="<?= url(); ?>">Home</a>
        <a href="<?= url("sobre"); ?>">Sobre</a>
        <a href="<?= url("contato"); ?>">Contato</a>
        <?php endif; ?>
    </nav>
    <main role="main" class="main_content">
        <?php
        if ($this->section("content")):
            echo $this->section("content");
        endif;
        ?>
    </main>
    <footer class="main_footer">
        <?=SITE?> Todos os direitos reservados
    </footer>
</body>
</html>