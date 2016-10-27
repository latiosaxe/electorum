@extends('control.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><small>Elección</small> Oaxaca, Gobrenador, 2015-2016</h3>
            </div>
            <div class="title_right">
                <h4 class="text-right color-orange">En progreso</h4>
            </div>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title text-center">
                        <h2>Distritos</h2>
                        <div class="absolute-right" style="top:6px;">
                            <a href="#" id="generate" class="btn btn-electorum"><i class="fa fa-book"></i> Generar Demanda</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- start project list -->
                        <table id="datatable" class="table table-striped table-bordered bulk_action">
                            <thead>
                            <tr>
                                <th style="width: 1%">Distrito</th>
                                <th style="width: 20%">Nombre</th>
                                <th>Número de casillas</th>
                                <th>Votación Total</th>
                                <th>Voto Nulos</th>
                                <th style="width: 40px">Detalle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    XXXX1
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    XXXX2
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    XXXX3
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    XXXX4
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    XXXX5
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    XXXX6
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    XXXX7
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    XXXX8
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    XXX
                                </td>
                                <td>
                                    X%
                                </td>
                                <td>
                                    <a href="/distrito" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-title">
            <div class="title_left color-green">
                <h3>Area de administración <small class="color-gray">Se precavido</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Lugar
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="select2_group form-control">
                                <option value="1" seleted="selected">Oaxaca</option>
                                <option value="1">Querétaro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="select2_group form-control">
                                <option value="1" seleted="selected">Gobernador</option>
                                <option value="1">Diputado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Periodo
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="select2_group form-control">
                                <option value="1" seleted="selected">2015 - 2016</option>
                                <option value="1">2016 - 2017</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estatus</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="user-type" value="a" data-parsley-multiple="type"> Nueva
                                </label>
                                <label class="btn btn-electorum" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="user-type" value="b" data-parsley-multiple="type"> En progreso
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="user-type" value="c" data-parsley-multiple="type"> Completada
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success btn-electorum">Actualizar</button>
                        </div>
                    </div>
                </form>

                {{--<div class="x_panel">--}}
                    {{--<div class="x_title text-center">--}}
                        {{--<h2>Distritos</h2>--}}
                        {{--<div class="absolute-right" style="top:6px;">--}}
                            {{--<a href="#" id="generate" class="btn btn-electorum"><i class="fa fa-book"></i> Generar Demanda</a>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div class="x_content">--}}
                    {{--</div>--}}
                {{--</div>--}}
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
            $('#datatable').dataTable();

            $("#generate").on('click', function(event){
                event.preventDefault();
                if (confirm("¿Estas seguro que deseas continuar?") == true) {
                    window.location.replace("/demanda");
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
@endsection