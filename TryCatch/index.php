<?php

try {
    throw new Exception("Erro ao processar dados",55);
} catch (Exception $e) {
    echo json_encode(
        array(
            "message"=>$e->getMessage(),
            "line"=>$e->getLine(),
            "code"=>$e->getCode()
        )
    );
}
