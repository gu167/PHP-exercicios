<?php
    function ola(){
        echo "<h1>Ola, Mundo!</h1>";
    }
    function mostraValor($v){
        echo "<h2>Acabei de receber o valor: $v</h2>";
    }
?>
/*a tag de fechamento é redundante e desnecessária
em uma função externa, pode ser excluida, deixar,
não afeta o código, porque funções externas são
apenas do tipo php, então é só preciso declarar
a abertura*/
