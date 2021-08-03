<?php
class Calculadora {
	public function calcula($caixa) {
        if(!isset($caixa) || $caixa == 0){
            return;
        }

        $cem = 0;
        $cinquenta = 0;
        $vinte = 0;
        $dez = 0;
        $cinco = 0;
        $dois = 0;
        $um = 0;
        while($caixa > 0) {
            if($caixa >= 100){
                $cem+=1;
                $caixa-=100;
           }else if($caixa >= 50){
                $cinquenta+=1;
                $caixa-=50;
           }else if($caixa >= 20){
                $vinte+=1;
                $caixa-=20;
            }else if($caixa >= 10){
                $dez+=1;
                $caixa-=10;
            }else if($caixa >= 5){
                $cinco+=1;
                $caixa-=5;
            }else if($caixa >= 2){
                $dois+=1;
                $caixa-=2;
            }else if($caixa >= 1){
                $um+=1;
                $caixa-=1;
            }
        }
        
        $_SESSION["relatorio"] = "<p class='w-100 text-center p-0 m-0'>Notas entregues: ". $cem . " notas de R$100,00, ". $cinquenta." notas de R$50,00, " . $vinte ." notas de R$20,00, " . $dez . " notas de R$10,00, " . $cinco . " notas de R$5,00, " . $dois . " notas de R$2,00 e " . $um ." notas de R$1,00</p>";
	}
}