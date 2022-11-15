<?php 
function buscarCEP($cep){
    $cep = str_replace("-", "", $cep);
    @$url = file_get_contents("https://viacep.com.br/ws/$cep/json/");
    if (strlen($url) > 0) {
        return $url;

    }
    else{
        return "";
    }
}
 echo buscarCEP($_POST["cep"]);
 
?>