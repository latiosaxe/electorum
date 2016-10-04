@extends('control.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Lista <small>Jornadas Electorales</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ej. Oaxaca">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    {{--<div class="x_title">--}}
                        {{--<h2>Projects</h2>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    <div class="x_content">
                        <p>Simple table with project listing with progress and editing options</p>
                        <!-- start project list -->
                        <table id="datatable" class="table table-striped table-bordered bulk_action">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 20%">Lugar</th>
                                <th>Tipo</th>
                                <th>Periodo</th>
                                <th>Estatus</th>
                                <th style="width: 100px">Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Oaxaca
                                </td>
                                <td>
                                    Gobernador
                                </td>
                                <td class="project_progress">
                                    2015 - 2016
                                </td>
                                <td>
                                    En progreso
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Oaxaca
                                </td>
                                <td>
                                    Diputado
                                </td>
                                <td class="project_progress">
                                    2015 - 2016
                                </td>
                                <td>
                                    Completada
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Oaxaca
                                </td>
                                <td>
                                    Gobernador
                                </td>
                                <td class="project_progress">
                                    2015 - 2016
                                </td>
                                <td>
                                    Completada
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    Queretaro
                                </td>
                                <td>
                                    Gobernador
                                </td>
                                <td class="project_progress">
                                    2015 - 2016
                                </td>
                                <td>
                                    <Completada></Completada>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- end project list -->
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
            $('#datatable').dataTable();
        });
    </script>
@endsection