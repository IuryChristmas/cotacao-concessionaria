<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 25/08/17
 * Time: 23:42
 */

namespace App\Seguradoras;

class PortoSeguro implements Seguro
{

    public function calculaSeguro($marca)
    {
        if($marca == 'fiat' or $marca == 'renault' or $marca == 'kia') {
            $porcentagem = 1500 * 0.05;
            return 1500 - $porcentagem;
        } else if($marca == 'peugeot' or $marca == 'bmw' or $marca == 'troller') {
            $porcentagem = 1500 * 0.07;
            return 1500 - $porcentagem;
        } else if($marca == 'toyota' or $marca == 'chevrolet') {
            $porcentagem = 1500 * 0.14;
            return 1500 + $porcentagem;
        } else if($marca == 'volkswagen' or $marca == 'porsche') {
            $porcentagem = 1500 * 0.01;
            return 1500 + $porcentagem;
        }
    }
}