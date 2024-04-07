<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option id="km-milha" value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km - Metro</option>
        <option value="fahrenheit-celsius">Fahrenhrit > Celsius</option>
        <option value="celsius-fahrenheit">Celsius - Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>
<?php
//
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $parametro = $_POST['param'];
//     $conversor = $_POST['conversor'];

//     switch ($conversor) {
//         case 'km-milha':
//             $operacao = $parametro * 0.5;
//             echo "Valor convertido $operacao em Milhas.";
//             break;
//         case 'milha-km':
//             $operacao = $parametro * 1.5;
//             echo "Valor convertido $operacao em Km.";
//             break;
//         case 'metro-km':
//             $operacao = $parametro / 1000;
//             echo "Valor convertido $operacao em Km.";
//             break;
//         case 'metro-km':
//             $operacao = $parametro * 1000;
//             echo "Valor convertido $operacao em metros";
//             break;
//         default:
//         echo "Não Entendido";
//         break;
//     }
// }


// Solução do Professor
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas.";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km.";
        break;
    case 'km-metro':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia metros.";
        break;
    case 'metro-km':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param m = $distancia Km.";
        break;
    case 'fahrenheit-celsius':
        $temperatura = round((($param - 32) / 1.8), 0);
        $mensagem = "$param F = $temperatura C.";
        break;
    case 'celsius-fahrenheit':
        $temperatura = round((($param  * 1.8) + 32), 0);
        $mensagem = "$param C = $temperatura F.";
        break;
    default:
        $mensagem = "nenhum valor calculado";
}
echo "<p>$mensagem</p>";
?>