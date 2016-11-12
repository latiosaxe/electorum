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
                        <div class="row">
                            <div class="col-md-4 text-left">
                                <h2 class="small-title">Relación de casillas</h2>
                            </div>
                            <div class="col-md-6 text-left">
                                <p class="up-aux"><strong><span class="color-green">2120 casillas ganadas</span>, <span class="color-orange">523 casillas perdidas</span></strong></p>
                            </div>
                            <div class="col-md-2 text-right">
                                <p><strong>48%</strong> de casillas revisadas</p>
                            </div>
                        </div>
                        {{--<h2>Relación de casillas</h2>--}}
                        {{--<p class="absolute-right"></p>--}}
                        {{--<div class="clearfix"></div>--}}
                    </div>


                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered bulk_action">
                            <thead>
                            <tr>
                                <th style="width: 1%">Registro</th>
                                <th style="width: 20%">Numero de Casilla</th>
                                <th>Partido 1er lugar</th>
                                <th>Partido 2do lugar</th>
                                <th>Diferencia</th>
                                <th>Votos nulos</th>
                                <th style="width: 50px">Ver acta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    <strong>PRI</strong> | 5,234 votos | 35% <span class="icon-spot"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19% <span class="icon-spot"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%</i>
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-pause">
                                <td>6</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    <strong>PRI</strong> | 5,234 votos | 35% <span class="icon-spot"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-done">
                                <td>8</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19% <span class="icon-spot"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-pause">
                                <td>10</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19% <span class="icon-spot"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-done">
                                <td>12</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    <strong>PRI</strong> | 5,234 votos | 35% <span class="icon-spot"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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
                                    <strong>PRI</strong> | 5,234 votos | 35%
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
                                <td>
                                    <a href="/boleta" class="btn btn-info"><i class="fa fa-search"></i></a>
                                </td>
                            </tr>
                            <tr class="table-done">
                                <td>14</td>
                                <td>
                                    XX1
                                </td>
                                <td>
                                    <strong>PRI</strong> | 5,234 votos | 35% <span class="icon-spot"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </td>
                                <td>
                                    <strong>PAN</strong> | 3,985 votos | 19%
                                </td>
                                <td>1,249</td>
                                <td>1,5487</td>
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