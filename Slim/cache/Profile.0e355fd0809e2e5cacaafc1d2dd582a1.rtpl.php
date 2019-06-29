<?php if(!class_exists('Rain\Tpl')){exit;}?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<div class="container">
    <h1 class="title">Bem vindo de volta, <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?> !</h1>

    <p class="subtitle">Isso é um template, utilizando variáveis</p>
</div>
