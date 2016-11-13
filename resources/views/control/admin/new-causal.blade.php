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
                                <th>Tipo</th>
                                <th>Nombre</th>
                                <th>Color/Descripcion</th>
                                <th style="width: 50px">Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Recuento</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </td>
                                <td>
                                    <div class="circle-tooltip" style="background-color: #5BC0EB;" data-toggle="tooltip" data-placement="top" title="Motivo de incidencia"></div>
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Recuento</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </td>
                                <td>
                                    <div class="circle-tooltip" style="background-color: #FDE74C;" data-toggle="tooltip" data-placement="top" title="Motivo de incidencia"></div>
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Recuento</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </td>
                                <td>
                                    <div class="circle-tooltip" style="background-color: #9BC53D;" data-toggle="tooltip" data-placement="top" title="Motivo de incidencia"></div>
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Recuento</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </td>
                                <td>
                                    <div class="circle-tooltip" style="background-color: #E55934;" data-toggle="tooltip" data-placement="top" title="Motivo de incidencia"></div>
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nulidad</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad, adipisci
                                </td>
                                <td>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Recuento</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </td>
                                <td>
                                    <div class="circle-tooltip" style="background-color: #FA7921;" data-toggle="tooltip" data-placement="top" title="Motivo de incidencia"></div>
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Recuento</td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </td>
                                <td>
                                    <div class="circle-tooltip" style="background-color: #be65fa;" data-toggle="tooltip" data-placement="top" title="Motivo de incidencia"></div>
                                </td>
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
                        <h2>Nuevo <strong>causal</strong></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-5">
                                <h2>Recuento</h2>
                                <form action="" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombre">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group demo2">
                                                    <input type="text" value="#e01ab5" class="form-control"/>
                                                    <span class="input-group-addon"><i></i></span>
                                                </div>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{--<p>--}}
                                                    {{--<a href="#" class="color-green">Agregar otro causal <i class="fa fa-plus-circle"></i></a>--}}
                                                {{--</p>--}}
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <a href="#" class="btn btn-electorum">Crear causales</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 col-md-offset-2">
                                <h2>Nulidad</h2>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="Nombre">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Descripción">
                                            </div>
                                            <div class="col-md-1">
                                                <button class="btn btn-block color-green transparent"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{--<p>--}}
                                                    {{--<a href="#" class="color-green">Agregar otro causal <i class="fa fa-plus-circle"></i></a>--}}
                                                {{--</p>--}}
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <a href="#" class="btn btn-electorum">Crear causales</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
    <script src="assets/control/libs/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#datatable').dataTable({
            });
            $('.demo2').colorpicker();
        });
    </script>
@endsection