$(document).ready(function() {
    $('#cotacao').click(function() {
        var dados = $('#cotacao_form').serialize();
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: "/cotacao/salvar",
            async: true,
            data: dados,
            success: function(data) {

                $('#um').remove();
                $('#dois').remove();
                $('#tres').remove();
                $('#quatro').remove();
                $('#cinco').remove();
                $('#seis').remove();

                var cols = "<tr id='um'>";
                cols += "<td scope='row'>SulAmérica</td>";
                cols += "<td>"+ data.response.sulamerica +"<input id='sulamerica' type='hidden' value='"+data.response.sulamerica+"' /></td>";
                cols += "<td><button id='sulamerica_button' type='button'>Contratar</button></td>";
                cols += "</tr>";
                $('#table-cotacao').append(cols);

                var cols2 = "<tr id='dois'>";
                cols2 += "<td>Porto Seguro</td>";
                cols2 += "<td>"+data.response.portoseguro+"<input id='portoseguro' type='hidden' value='"+data.response.portoseguro+"' /></td>";
                cols2 += "<td><button id='portoseguro_button' type='button'>Contratar</button></td>";
                cols2 += "</tr>";
                $('#table-cotacao').append(cols2);

                var cols3 = "<tr id='tres'>";
                cols3 += "<td>Tókio Marine</td>";
                cols3 += "<td>"+data.response.tokiomarine+"<input id='tokiomarine' type='hidden' value='"+data.response.tokiomarine+"' /></td>";
                cols3 += "<td><button id='tokiomarine_button' type='button'>Contratar</button></td>";
                cols3 += "</tr>";
                $('#table-cotacao').append(cols3);

                var cols4 = "<tr id='quatro'>";
                cols4 += "<td>Bradesco Seguros</td>";
                cols4 += "<td>"+data.response.bradescoseguros+"<input id='bradesco' type='hidden' value='"+data.response.bradescoseguros+"' /></td>";
                cols4 += "<td><button id='bradescoseguros_button' type='button'>Contratar</button></td>";
                cols4 += "</tr>";
                $('#table-cotacao').append(cols4);

                var cols5 = "<tr id='cinco'>";
                cols5 += "<td>Liberty Seguros</td>";
                cols5 += "<td>"+data.response.libertyseguros+"<input id='liberty' type='hidden' value='"+data.response.libertyseguros+"' /></td>";
                cols5 += "<td><button id='libertyseguros_button' type='button'>Contratar</button></td>";
                cols5 += "</tr>";
                $('#table-cotacao').append(cols5);

                var cols6 = "<tr id='seis'>";
                cols6 += "<td>Maphre Seguros</td>";
                cols6 += "<td>"+data.response.maphreseguros+"<input id='maphreseguros' type='hidden' value='"+data.response.maphreseguros+"' /></td>";
                cols6 += "<td><button id='maphrseguros_button' type='button'>Contratar</button></td>";
                cols6 += "</tr>";

                document.getElementById("marca_veiculo").textContent = data.response.marca;

                $('#sulamerica_button').click(function () {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: "/cotacao/salvarConsulta",
                        async: true,
                        data: {
                            'valor': $('#sulamerica').val(),
                            'cliente': $('#nome').val(),
                            'seguradora': 'SulAmérica',
                            '_token': $('#_token').val()
                        },
                        success: function(data) {
                            window.location.href="/cotacao/historico";
                        }
                    });
                });

                $('#portoseguro_button').click(function () {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: "/cotacao/salvarConsulta",
                        async: true,
                        data: {
                            'valor': $('#portoseguro').val(),
                            'cliente': $('#nome').val(),
                            'seguradora': 'SulAmérica',
                            '_token': $('#_token').val()
                        },
                        success: function(data) {
                            window.location.href="/cotacao/historico";
                        }
                    });
                });

                $('#tokiomarine_button').click(function () {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: "/cotacao/salvarConsulta",
                        async: true,
                        data: {
                            'valor': $('#tokiomarine').val(),
                            'cliente': $('#nome').val(),
                            'seguradora': 'SulAmérica',
                            '_token': $('#_token').val()
                        },
                        success: function(data) {
                            window.location.href="/cotacao/historico";
                        }
                    });
                });

                $('#bradescoseguros_button').click(function () {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: "/cotacao/salvarConsulta",
                        async: true,
                        data: {
                            'valor': $('#bradesco').val(),
                            'cliente': $('#nome').val(),
                            'seguradora': 'SulAmérica',
                            '_token': $('#_token').val()
                        },
                        success: function(data) {
                            window.location.href="/cotacao/historico";
                        }
                    });
                });

                $('#libertyseguros_button').click(function () {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: "/cotacao/salvarConsulta",
                        async: true,
                        data: {
                            'valor': $('#liberty').val(),
                            'cliente': $('#nome').val(),
                            'seguradora': 'SulAmérica',
                            '_token': $('#_token').val()
                        },
                        success: function(data) {
                            window.location.href="/cotacao/historico";
                        }
                    });
                });

                $('#maphrseguros_button').click(function () {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: "/cotacao/salvarConsulta",
                        async: true,
                        data: {
                            'valor': $('#maphreseguros').val(),
                            'cliente': $('#nome').val(),
                            'seguradora': 'SulAmérica',
                            '_token': $('#_token').val()
                        },
                        success: function(data) {
                            window.location.href="/cotacao/historico";
                        }
                    });
                });

                $('#table-cotacao').append(cols6);
                $('#table-cotacao').css('display', 'block');
            }
        });
    });

});