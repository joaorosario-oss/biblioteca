<?php
require_once "bibliotecaFuncoes"

use function conversao/dolarParaReal;

use function conversao/libraParaReaL;

use function conversao/ieneParaReal;

use function conversao/euroParaReal;

use function conversao/pesoParaReal;

use function saude/calcularImc;

use function saude/valorIdealAgua;

use function saude/frquenciaCardiacaMaxima;

use function saude/converterLibrasParaQuila;

use function saude/calcularCaloriasBasais;

$cotacao = "";
$valor= "";
$opcao = "";
$escolha = "";


while ($opcao != 4) {
echo "escolha uma opção:\n ";
echo "1-conversao\n";
echo "2-geometria\n";
echo "3-saúde\n";
echo "4-sair\n";
$opcao = readline (">>> ");

switch ($opcao) {
case 1 

while ($escolha != 6){
switch ($escolha) {
echo "escolha uma opção:\n ";
echo "1-dolar para real\n";
echo "2-Libra para Real\n";
echo "3-iene para real\n";
echo "4-euro para real\n";
echo "5-peso para real\n";
echo "6-sair\n";
$escolha = readline (">>> ");

case 1

$valor = readline ("digite o valor em dolar: ")
$cotação  = readline ("digite a cotação do dolar ")


echo "Valor em real (R$): " dolarParaReal($valor,$cotação);


break

case 2
echo "Libra para real";

$valor = readline ("digite o valor em libra: ")
$cotação  = readline ("digite a cotação do dolar ")


echo "Valor em real (R$): " libraParaReal($valor,$cotação);

break


case 3
echo "iene para real";

$valor = readline ("digite o valor em iene: ")
$cotação  = readline ("digite a cotação do dolar ")


echo "Valor em real(R$): " ieneParaReal($valor,$cotação);

break


case 4
echo "Euro para real";
$valor = readline ("digite o valor em euro: ")
$cotação  = readline ("digite a cotação do dolar ")


echo "Valor em real (R$): " euroParaReal($valor,$cotação);

break


case 5
echo "peso para real";
$valor = readline ("digite o valor em peso: ")
$cotação  = readline ("digite a cotação do dolar ")


echo "Valor em real (R$): " pesoParaReal($valor,$cotação);

break


case 6
echo "saindo...";
break
}
break

case 2 
echo "geometria";
break

case 3 
while ($escolha != 6){
echo "escolha uma opção:\n ";
echo "1-imc\n";
echo "2-agua\n";
echo "3-frequencia cardiaca\n";
echo "4-libras para quilos\n";
echo "5-calcular calorias basais\n";
echo "6-sair\n";

$escolha = readline (">>> ");
}

switch ($escolha) {
echo "escolha uma opção:\n ";
echo "1-imc\n";
echo "2-agua\n";
echo "3-frequencia cardiaca\n";
echo "4-libras para quilos\n";
echo "5-calcular calorias basais\n";
echo "6-sair\n";

case 1
echo "imc";

break

case 2
echo "agua";
break

case 3
echo "frequencia cardiaca";
break

case 4
echo "libras para quilos";
break

case 5
echo "calcular calorias basais";
break

case 6
echo "saindo...";
break

}
break

case 4
echo "saindo...";
break

default
echo "opção inválida";


}






while ($escolha != 4){
echo "escolha uma opção:\n ";
echo "1-imc\n";
echo "2-agua\n";
echo "3-frequencia cardiaca\n";
echo "4-libras para quilos\n";
echo "5-cualcular calorias basais\n";
echo "6-sair\n";

$escolha = readline (">>> ");

}

switch ($escolha) {
echo "escolha uma opção:\n ";
echo "1-imc\n";
echo "2-agua\n";
echo "3-frequencia cardiaca\n";
echo "4-libras para quilos\n";
echo "5-calcular calorias basais\n";
echo "6-sair\n";

case 1
echo "imc";

break

case 2
echo "agua";
break

case 3
echo "frequencia cardiaca";
break

case 4
echo "libras para quilos";
break

case 5
echo "calcular calorias basais";
break

case 6
echo "saindo...";
break

}


}


<!-- while ($escolha != 4){
echo "escolha uma opção:\n ";
echo "1-imc\n";
echo "2-agua\n";
echo "3-frequencia cardiaca\n";
echo "4-libras para quilos\n";
echo "5-cualcular calorias basais\n";
echo "6-sair\n";

$escolha = readline (">>> ");

}






}

>?