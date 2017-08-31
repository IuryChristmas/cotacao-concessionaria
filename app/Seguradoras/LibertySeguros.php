<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 25/08/17
 * Time: 23:43
 */

namespace App\Seguradoras;

class LibertySeguros implements Seguro
{

    public function calculaSeguro($marca)
    {
        if($marca == 'fiat' or $marca == 'peugeot' or $marca == 'bmw' or $marca == 'troller' or $marca == 'toyota') {
            $porcentagem = 1500 * 0.09;
            return  1500 - $porcentagem;
        } else if($marca == 'chevrolet' or $marca == 'renault' or $marca == 'kia' or $marca == 'volkswagen' or $marca == 'porsche') {
            $porcentagem = 1500 * 0.02;
            return 1500 - $porcentagem;
        }
    }

}