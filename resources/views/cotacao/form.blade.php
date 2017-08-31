@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="cotacao_form" action="" method="post" >
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digitar Nome" />
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Digitar E-mail" />
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Digitar Telefone" />
                            </div>
                            <div class="form-group">
                                <label for="nascimento">Data de Nasc.</label>
                                <input type="date" name="nascimento" id="nascimento" class="form-control" placeholder="Digitar Data de Nascimento" />
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digitar CPF" />
                            </div>
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" name="cep" class="form-control" id="cep" placeholder="Digitar CEP" />
                            </div>
                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <select class="form-control" name="marca" id="marca">
                                    <option value="fiat">Fiat</option>
                                    <option value="peugeot">Peugeot</option>
                                    <option value="chevrolet">Chevrolet</option>
                                    <option value="troller">Troller</option>
                                    <option value="toyota">Toyota</option>
                                    <option value="renault">Renault</option>
                                    <option value="kia">Kia</option>
                                    <option value="volkswagem">Volkswagem</option>
                                    <option value="porsche">Porsche</option>
                                    <option value="bmw">BMW</option>
                                </select>
                            </div>

                            <button id="cotacao" type="button" class="btn btn-info">Fazer Cotação</button>
                        </form>


                        <div id="table-cotacao" style="display:none">
                            <h4>Cotação para o carro da marca <span id="marca_veiculo"></span></h4>
                            <table class="table table-bordered" >
                                <thead>
                                <tr>
                                    <th>Seguradora</th>
                                    <th>Valor</th>
                                    <th>Adquira</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>


                        <div id="table-historico" style="display:none">
                            <h3>Você será atendido em breve pelo <span id="vendedor"></span>, o e-mail de contato do vendedor é o
                            <span id="email_vendedor"></span>! Obrigado!</h3>

                            <h4>Histórico de atendimentos</h4>
                            <table class="table table-bordered" >
                                <thead>
                                <tr>
                                    <th>Data e Hora</th>
                                    <th>Nome do cliente</th>
                                    <th>Seguradora</th>
                                    <th>Valor</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
