<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 25/08/17
 * Time: 23:42
 */

//use Illuminate\Database\Eloquent\Model;

namespace App\Seguradoras;

class SulAmerica implements Seguro
{

    public function calculaSeguro($marca)
    {
        if($marca == 'fiat' or $marca == 'peugeot' or $marca == 'chevrolet') {
            $porcentagem = 1500 * 0.05;
            return  1500 - $porcentagem;
        } else if($marca == 'troller' or $marca == 'toyota') {
            $porcentagem = 1500 * 0.10;
            return 1500 + $porcentagem;
        } else if($marca == 'renault' or $marca == 'kia' or $marca == 'volkswagen') {
            $porcentagem = 1500 * 0.24;
            return 1500 + $porcentagem;
        } else if($marca == 'porsche' or $marca == 'bmw') {
            $porcentagem = 1500 * 0.08;
            return 1500 + $porcentagem;
        }
    }

}