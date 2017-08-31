<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 25/08/17
 * Time: 23:42
 */

namespace App\Seguradoras;

class TokioMarine implements Seguro
{

    public function calculaSeguro($marca)
    {
        if($marca == 'fiat' or $marca == 'porsche' or $marca == 'toyota') {
            $porcentagem = 1500 * 0.40;
            return 1500 + $porcentagem;
        } else if($marca == 'peugeot' or $marca == 'troller' or $marca == 'renault' or $marca == 'kia') {
            $porcentagem = 1500 * 0.42;
            return 1500 - $porcentagem;
        } else if($marca == 'bmw' or $marca == 'chevrolet' or $marca = 'volkswagen') {
            $porcentagem = 0;
            return 1500 + $porcentagem;
        }
    }

}