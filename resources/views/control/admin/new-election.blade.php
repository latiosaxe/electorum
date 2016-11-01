@extends('control.master')
@section('content')
    <div class="">
        <div class="clearfix"></div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title text-center">
                        <h2>Nueva <strong>elección</strong></h2>
                        {{--<p class="absolute-right"><strong>48%</strong> de casillas revisadas</p>--}}
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
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
                                        <label class="btn btn-electorum" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="user-type" value="a" data-parsley-multiple="type"> Nueva
                                        </label>
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="user-type" value="b" data-parsley-multiple="type"> En progreso
                                        </label>
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="user-type" value="c" data-parsley-multiple="type"> Completada
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Partido/alianza asociad(a)
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option seleted="selected">Partido político</option>
                                        <option value="1">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Liga de PREP
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="url" required="required" class="form-control col-md-7 col-xs-12" placeholder="http://">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Partidos Políticos
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control">
                                        <option value="1" seleted="selected">PRI</option>
                                        <option value="1">PAN</option>
                                        <option value="1">PRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#" class="color-green">Agregar otro partido <i class="fa fa-plus-circle"></i> </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control" disabled="disabled">
                                        <option value="1" seleted="selected">Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control" disabled="disabled">
                                        <option value="1" seleted="selected">Nulos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Boleta
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="url" class="form-control col-md-7 col-xs-12" placeholder="http://">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Es visible para
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">
                                            <label for="control-label">
                                                <input type="checkbox"> Olegario
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="control-label">
                                                <input type="checkbox"> Rafael
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="control-label">
                                                <input type="checkbox"> Enrique
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">
                                    Machote de demanda
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="url" class="form-control col-md-7 col-xs-12" placeholder="http://">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">
                                    Causales
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" id="url" class="form-control" placeholder="Descripción">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#" class="color-green">Agregar otra incidencia <i class="fa fa-plus-circle"></i> </a>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Identificación de distritos
                                </label>
                                <div class="col-md-6 col-sm--6 col-xs-12">
                                    <p>Diferencia entre 1er lugar y 2do lugar es:</p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm--6 col-xs-12">
                                            <label for="type1">
                                                <input type="radio" name="type" id="type1"> Menor al 1%
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-sm--6 col-xs-12">
                                            <label for="type2">
                                                <input type="radio" name="type" id="type2"> Menor o igual al 1%
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Identificación de casillas
                                </label>
                                <div class="col-md-6 col-sm--6 col-xs-12">
                                    <p>Diferencia entre 1er lugar y 2do lugar comparada con los votos nulos es:</p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm--6 col-xs-12">
                                            <label for="type1">
                                                <input type="radio" name="type" id="type1"> Menor al 1%
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-sm--6 col-xs-12">
                                            <label for="type2">
                                                <input type="radio" name="type" id="type2"> Menor o igual al 1%
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-electorum">Crear</button>
                                    <p>La elección se mandará a aprobación, en cuanto este lista aparecerá como nueva en tu perfil y los demas asignados</p>
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
        });
    </script>
@endsection