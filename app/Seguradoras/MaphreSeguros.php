<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 25/08/17
 * Time: 23:44
 */

namespace App\Seguradoras;

class MaphreSeguros implements Seguro
{

    public function calculaSeguro($marca)
    {
        if($marca == 'fiat') {
            $porcentagem = 1500 * 0.01;
            return 1500 + $porcentagem;
        } else if($marca == 'peugeot' or $marca == 'chevrolet') {
            $porcentagem = 1500 * 0.02;
            return 1500 + $porcentagem;
        } else if($marca == 'bmw' or $marca == 'kia') {
            $porcentagem = 1500 * 0.08;
            return 1500 + $porcentagem;
        } else if($marca == 'troller') {
            $porcentagem = 1500 * 0.04;
            return 1500 + $porcentagem;
        } else if($marca == 'toyota') {
            $porcentagem = 1500 * 0.05;
            return 1500 + $porcentagem;
        } else if($marca == 'renault') {
            $porcentagem = 1500 * 0.07;
            return 1500 + $porcentagem;
        } else if($marca == 'volkswagen') {
            $porcentagem = 1500 * 0.15;
            return 1500 + $porcentagem;
        } else if($marca == 'peugeot') {
            $porcentagem = 1500 * 0.10;
            return 1500 + $porcentagem;
        }
    }

}