@extends('control.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><small>Distrito</small> XXXX1</h3>
            </div>
            <div class="title_right">
                <p class="text-right" style="margin-top: 15px;">
                    <strong><span class="color-green">Verde</span></strong> = Recuento confirmado, <strong><span class="color-gray-2">Gris</span></strong> = Recuento posible
                </p>
            </div>
        </div>

        <div class="clearfix"></div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title text-center">
                        <h2>Relación de casillas</h2>
                        <p class="absolute-right"><strong>48%</strong> de casillas revisadas</p>
                        <div class="clearfix"></div>
                    </div>


                    <div class="x_content">
                        <!-- start project list -->
                        <table id="datatable" class="table table-striped table-bordered bulk_action">
                            <thead>
                            <tr>
                                <th style="width: 1%">Registro</th>
                                <th style="width: 20%">Numero de boleta</th>
                                <th>Partido 1er lugar</th>
                                <th>Partido 2do lugar</th>
                                <th>Diferencia</th>
                                <th>Votos nulos</th>
                                <th style="width: 50px">Ver boleta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-pause">
                                <td>2</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-done">
                                <td>3</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-sign">
                                <td>4</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-sign">
                                <td>7</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-sign">
                                <td>10</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-sign">
                                <td>13</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    PAN
                                </td>
                                <td>
                                    PRI
                                </td>
                                <td>0.5%</td>
                                <td>
                                    <strong>1.5%</strong> (15487)
                                </td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
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
            $('#datatable').dataTable({
                ordering:  false,
                paging: false
            });
        });
    </script>
@endsection