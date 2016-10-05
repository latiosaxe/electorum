@extends('control.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><small>Jornada</small> Oaxaca, Gobrenador, 2015-2016</h3>
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
                        <h2>Listado de distritos</h2>
                        <div class="absolute-right" style="top:6px;">
                            <a href="/distrito" class="btn btn-electorum"><i class="fa fa-book"></i> Generar Demanda</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- start project list -->
                        <table id="datatable" class="table table-striped table-bordered bulk_action">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 20%">Nombre</th>
                                <th>Votos totales</th>
                                <th>Lista nominal</th>
                                <th style="width: 100px">% Participación</th>
                                <th style="width: 50px">Revisar</th>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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
                                    <a href="/distrito" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detalle</a>
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