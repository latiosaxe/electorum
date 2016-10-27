@extends('control.master')
@section('content')
    <div class="">
        <div class="clearfix"></div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title text-center">
                        <h2>Lista <strong>partidos políticos</strong></h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered bulk_action">
                            <thead>
                            <tr>
                                <th style="width: 20px">ID</th>
                                <th>Nombre</th>
                                <th style="width: 20%">Nombre corto</th>
                                <th>Logotipo</th>
                                <th style="width: 50px">Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Partido Acción Nacional</td>
                                <td>
                                    PAN
                                </td>
                                <td>-</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Partido Acción Nacional</td>
                                <td>
                                    PAN
                                </td>
                                <td>-</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Partido Acción Nacional</td>
                                <td>
                                    PAN
                                </td>
                                <td>-</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Partido Acción Nacional</td>
                                <td>
                                    PAN
                                </td>
                                <td>-</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Partido Acción Nacional</td>
                                <td>
                                    PAN
                                </td>
                                <td>-</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title text-center">
                        <h2>Nuevo <strong>partido político</strong></h2>
                        {{--<p class="absolute-right"><strong>48%</strong> de casillas revisadas</p>--}}
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Nombre
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="url" required="required" class="form-control col-md-7 col-xs-12" placeholder="Partido Revolucionario Institucional">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Nombre corto
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="url" required="required" class="form-control col-md-7 col-xs-12" placeholder="PRI">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Logotipo
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="url" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-electorum">Crear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascript')
    <script src="assets/control/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/control/libs/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/control/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/control/libs/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/control/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/control/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/control/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/control/libs/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/control/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/control/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/control/libs/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/control/libs/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#datatable').dataTable({
            });
        });
    </script>
@endsection