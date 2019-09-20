<!-- Inicio do Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="mySmallModalLabel">Cadastro de Escolas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-12 col-sm-8 col-md-9">
                        <label>Descrição</label>
                        <input type="text" name="esc_descricao" id="esc_descricao" class="form-control" required>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3">
                        <label>Data</label>
                        <input type="text" name="esc_data" id="esc_data" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-sm-3 col-md-3">
                        <label>CEP</label>
                        <input type="text" name="esc_cep" id="esc_cep" class="form-control" required>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <label>Cidade</label>
                        <input type="text" name="esc_cidade" id="esc_cidade" class="form-control" required>
                    </div>
                    <div class="col-12 col-sm-1 col-md-1">
                        <label>UF</label>
                        <input type="text" name="esc_uf" id="esc_uf" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-sm-5 col-md-5">
                        <label>Rua</label>
                        <input type="text" name="esc_rua" id="esc_rua" class="form-control" required>
                    </div>
                    <div class="col-12 col-sm-5 col-md-5">
                        <label>Bairro</label>
                        <input type="text" name="esc_bairro" id="esc_bairro" class="form-control" required>
                    </div>
                    <div class="col-12 col-sm-2 col-md-2">
                        <label>Número</label>
                        <input type="text" name="esc_numero" id="esc_numero" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-sm-3 col-md-3">
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Fim do Modal -->

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