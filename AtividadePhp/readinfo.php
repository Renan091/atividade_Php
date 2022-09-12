<?php
$id =$_GET['id'];
$texto = file("DadosSalvos/$id");
foreach($texto as $linha){
    echo "$linha <br>";
}