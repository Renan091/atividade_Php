<?php
extract($_POST);
$file = fopen("DadosSalvos/$id.txt", 'a+');
fwrite($file, "Id: $id\nNome: $nome\nCargo: $cargo\nSalário: $sal\nDependentes: $depen\n");
$arquivo = scandir('DadosSalvos');
array_shift($arquivo);
array_shift($arquivo);
foreach($arquivo as $linha){
    echo '<a href=readinfo.php?id='.$linha.'>'.$linha.'<br>';
}
fclose($file);
?>