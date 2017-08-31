<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 25/08/17
 * Time: 21:37
 */

namespace App\Http\Controllers;

use App\Cotacao;
use App\Seguradoras\BradescoSeguros;
use App\Seguradoras\LibertySeguros;
use App\Seguradoras\MaphreSeguros;
use App\Seguradoras\PortoSeguro;
use App\Seguradoras\SulAmerica;
use App\Seguradoras\TokioMarine;
use Illuminate\Http\Request;

class CotacaoController extends Controller
{

    public function index()
    {
        return view('cotacao.form');
    }

    public function salvar(Request $request)
    {
        if ($request->isMethod('post')){

            $sulAmerica = new SulAmerica();
            $portoSeguro = new PortoSeguro();
            $libertySeguros = new LibertySeguros();
            $maphreSeguros = new MaphreSeguros();
            $tokioMarine = new TokioMarine();
            $bradescoSeguros = new BradescoSeguros();

            $dataNascimento = explode("-", $request->nascimento);

            $idade = date("Y") - $dataNascimento[0];

            $porcentagemIdade = '';
            if($idade >= 18 and $idade <= 24) {
                $porcentagemIdade = 1500 * 0.14;
            } elseif ($idade >= 25 and $idade <= 32) {
                $porcentagemIdade = 1500 * 0.18;
            } elseif ($idade >= 33 and $idade <= 40) {
                $porcentagemIdade = - (1500 * 0.08);
            } elseif ($idade >= 41 and $idade <= 48) {
                $porcentagemIdade = 1500 * 0.03;
            } elseif ($idade >= 49 and $idade <= 60) {
                $porcentagemIdade = 1500 * 0.11;
            } elseif ($idade > 60) {
                $porcentagemIdade = 1500 * 0.15;
            }


            $valoresSeguro = array(
                'marca'      => $request->marca,
                'sulamerica' =>  $sulAmerica->calculaSeguro($request->marca) + $porcentagemIdade,
                'portoseguro' => $portoSeguro->calculaSeguro($request->marca) + $porcentagemIdade,
                'libertyseguros' => $libertySeguros->calculaSeguro($request->marca) + $porcentagemIdade,
                'maphreseguros' => $maphreSeguros->calculaSeguro($request->marca) + $porcentagemIdade,
                'tokiomarine' => $tokioMarine->calculaSeguro($request->marca) + $porcentagemIdade,
                'bradescoseguros' => $bradescoSeguros->calculaSeguro($request->marca) + $porcentagemIdade,
            );


            //$valoresSeguro = json_encode($valoresSeguro);

            return response()->json(['response' => $valoresSeguro]);
        }

    }

    public function salvarConsulta(Request $request)
    {
        $vendedores[] = array(
            'nome'  => 'Bruno Avelino',
            'email' => 'bruno@bannet.com.br'
        );
        $vendedores[] = array(
            'nome'  => 'Vicente Pinheiro',
            'email' => 'vicente@bannet.com.br'
        );
        $vendedores[] = array(
            'nome'  => 'Sara',
            'email' => 'sara@bannet.com.br'
        );
        $vendedores[] = array(
            'nome'  => 'Ana Karine',
            'email' => 'ana@bannet.com.br'
        );

        $index = mt_rand(0, 3);

        $cotacao = new Cotacao();

        $cotacao->nome = $request->cliente;
        $cotacao->seguradora = $request->seguradora;
        $cotacao->valor = $request->valor;
        $cotacao->data_hora = date('Y-m-d H:s:i');

        $cotacao->save();

        \Session::flash('flash_message', [
            'msg'   => "Você será atendido em breve pelo ".$vendedores[$index]['nome'].", 
                       o e-mail de contato do vendedor é ".$vendedores[$index]['email']."! Obrigado",
            'class' => 'alert-success',
        ]);

        return response()->json(['response' => 'sucesso']);
    }

    public function historico()
    {
        $cotacoes = \App\Cotacao::paginate(10);

        return view('cotacao.historico', compact('cotacoes'));
    }
}