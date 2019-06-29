<?php


?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<form action="cadastrar.php" method="post">
    <input placeholder="email" type="email" name="email"><br>
    <div class="g-recaptcha" data-sitekey="6LfqT6sUAAAAAET4nRuDVXCkE8XXrOP4V8QRMKmg"></div><br>
    <button type="submit" name="enviar">Enviar</button>
</form>