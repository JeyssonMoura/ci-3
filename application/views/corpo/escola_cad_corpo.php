<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="mySmallModalLabel">Cadastro de escolas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" id="sucesso" role="alert">
                    Cadastrado com sucesso!
                </div>
                <form id="formCadastrarEscola" action="javascript:func()">
                    <div class=" form-row">
                        <div class="col-12 col-sm-4 col-md-9">
                            <label>Descriçao</label>
                            <input type="text" name="esc_descricao" id="esc_descricao" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-3 col-md-3">
                            <label>Data</label>
                            <input type="text" name="esc_data" id="esc_data" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-3 col-md-3">
                            <label>CEP</label>
                            <input type="text" name="esc_cep" id="esc_cep" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8">
                            <label>Cidade</label>
                            <input type="text" name="esc_cep" id="esc_cep" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-6 col-md-1">
                            <label>UF</label>
                            <input type="text" name="esc_cep" id="esc_cep" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-sm-5 col-md-5">
                            <label>Rua</label>
                            <input type="text" name="esc_cep" id="esc_cep" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4">
                            <label>Bairro</label>
                            <input type="text" name="esc_cep" id="esc_cep" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-3 col-md-3">
                            <label>Número</label>
                            <input type="text" name="esc_cep" id="esc_cep" class="form-control" required>
                        </div>
                    </div><br>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg">Salvar</button>
                        <button type="button" class="btn btn-danger " data-toggle="modal" data-target=".bd-example-modal-lg">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Escolas</h1>

    <div class="form-group">
        <div class="col-12 col-sm-8 col-md-9">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar</button>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<script>
    $('#formCadastrarEscola').submit(function(event){
        $.post('Controller_escola/addEscola', $('#formCadastrarEscola').serialize(), function (resposta){
            if(resposta === 'true'){
                $('#sucesso').html('Dados cadastrados com sucesso!');
                $('#sucesso').attr('class', 'alert alert-success');
            } else {
                $('#sucesso').html('Erro ao salvar os dados');
                $('#sucesso').attr('class', 'alert alert-danger');
            }
        }).fail(function (){
            $('#sucesso').html('Erro ao salvar os dados');
            $('#sucesso').attr('class', 'alert alert-danger');
        });
    });
</script>