<?php
session_start();

//após verificação de login e senha, reiniciar o ID da session, da seguinte forma.

session_destroy();

session_start();

session_regenerate_id();

echo session_id();