<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 25/08/17
 * Time: 23:43
 */

namespace App\Seguradoras;

class BradescoSeguros implements Seguro
{

    public function calculaSeguro($marca)
    {
        if($marca == 'fiat' or $marca == 'kia') {
            $porcentagem = 1500 * 0.05;
            return 1500 + $porcentagem;
        } else if($marca == 'peugeot' or $marca == 'renault') {
            $porcentagem = 1500 * 0.02;
            return 1500 + $porcentagem;
        } else if($marca == 'bmw' or $marca == 'chevrolet') {
            $porcentagem = 1500 * 0.14;
            return 1500 + $porcentagem;
        } else if($marca == 'troller' or $marca == 'porsche') {
            $porcentagem = 1500 * 0.18;
            return 1500 - $porcentagem;
        } else if($marca == 'toyota' or $marca == 'volkswagen') {
            $porcentagem = 1500 * 0.13;
            return 1500 - $porcentagem;
        }
    }

}