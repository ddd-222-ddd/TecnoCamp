<?php
function criptar($msg){
    $list = [
        '1'=> "@",
        '2'=> "$",
        '3'=> "%",
        '4'=> "&",
        '5'=> "*",
        '6'=> "(",
        '7'=> ")",
        '8'=> "_",
        '9'=> "=",
        '0'=> "+",
        '.'=> "a",
        '-'=> "c"
    ];
    
    $msg = strtolower($msg);

    $msgEncript = '';
    for($i = 0; $i < strlen($msg); $i++){
        $very = $msg[$i];
        if (array_key_exists($very, $list)) {
            $msgEncript .= $list[$very];
        } else {
            $msgEncript .= $very;
        }
    }

    return $msgEncript;
}

function Descriptar($msg){
    $listD = [
        '@'=> "1",
        '$'=> "2",
        '%'=> "3",
        '&'=> "4",
        '*'=> "5",
        '('=> "6",
        ')'=> "7",
        '_'=> "8",
        '='=> "9",
        '+'=> "0",
        'a'=> ".",
        'c'=> "-"
    ];
    
    $msgDescript = '';
    for($i = 0; $i < strlen($msg); $i++){
        $very = $msg[$i];
        if (array_key_exists($very, $listD)) {
            $msgDescript .= $listD[$very];
        } else {
            $msgDescript .= $very;
        }
    }

    return $msgDescript;
}


$mensagem = "111.111.22-43";
$mensagemCriptografada = criptar($mensagem);
echo "Mensagem Criptografada: " . $mensagemCriptografada . "<br>";

$mensagemDescriptografada = Descriptar($mensagemCriptografada);
echo "Mensagem Descriptografada: " . $mensagemDescriptografada;
?>
