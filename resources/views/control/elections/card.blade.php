<!doctype html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>Revisión de boleta</title>
    {{--<link rel="stylesheet" href="assets/less/style.css"/>--}}
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link href="assets/control/libs/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/control/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/control/libs/select2/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/control/css/custom.min.css"/>
    <link rel="stylesheet" href="assets/control/css/card.css"/>
</head>
<body>
<header style="background: #FFF">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3><strong>Distrito : I</strong>, Oaxaca, Gobrenador, 2015-2016</h3>
            </div>
            <div class="col-md-6">
                <select class="select2_group form-control">
                    <option value="1">XXX1</option>
                    <option value="1">XXX2</option>
                    <option value="1">XXX3-C</option>
                    <option value="1">XXX4</option>
                    <option value="1">XXX5</option>
                    <option value="1">XXX6</option>
                    <option value="1">XXX7</option>
                    <option value="1">XXX8</option>
                    <option value="1">XXX9</option>
                    <option value="1">XX10</option>
                    <option value="1">XX11</option>
                    <option value="1">XX11-B</option>
                </select>
            </div>
        </div>
    </div>
</header>
<div class="horizontal-scroll">
    <div class="data">
        <div class="relative">
            <div id="zone"></div>
        </div>
    </div>
    <div id="canvasBoleta" style="background-image: url('/assets/control/images/boleta1.jpg')"></div>
    <div class="selectZone">
        <ul class="problems">
            <li><a href="#" class="sendError">Problema 1</a></li>
            <li><a href="#" class="sendError">Problema 2</a></li>
            <li><a href="#" class="sendError">Problema con nombre largo</a></li>
            <li><a href="#" class="sendError">Problema 4</a></li>
            <li><a href="#" class="sendError">Problema 5</a></li>
        </ul>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <h4 class="text-info">Esta boleta tiene <strong class="color-red"><span id="number">1</span> incidencia</strong></h4>
            </div>
            <div class="col-md-4 text-center">
                <select class="select2_group form-control">
                    <option value="1">XXX1</option>
                    <option value="1">XXX2</option>
                    <option value="1">XXX3-C</option>
                    <option value="1">XXX4</option>
                    <option value="1">XXX5</option>
                    <option value="1">XXX6</option>
                    <option value="1">XXX7</option>
                    <option value="1">XXX8</option>
                    <option value="1">XXX9</option>
                    <option value="1">XX10</option>
                    <option value="1">XX11</option>
                    <option value="1">XX11-B</option>
                </select>
            </div>
            <div class="col-md-4 text-right">
                <div class="btn-inline">Siguiente</div>
                <div class="btn-inline">Anterior</div>
            </div>
        </div>
    </div>
</footer>
</body>

<script src="assets/control/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/control/libs/select2/dist/js/select2.full.min.js"></script>
<script>
    $(document).ready(function () {
        var texts = [
            'Acatlán de Pérez Figueroa',
            'Aquiles Serdán',
            198,
            500,
            6,
            506,
            504
        ];

//        top, left
        var positions = [
            [363, 131],
            [423, 131],
            [510, 611],
            [586, 611],
            [663, 611],
            [735, 611],
            [810, 611]
        ];

        $.each(texts, function(index, value){
            $("#zone").append('' +
            '<p class="dragme" style="top:'+positions[index][0]+'px; left:'+positions[index][1]+'px;">'+ value +
            '<span class="options">' +
            '<a class="itsFine"><i class="fa fa-check"></i> No es un error</a>' +
            '<a class="addError"><i class="fa fa-flag-o"></i> Reportar incidencia</a>' +
            '</span>'+
            '</p>');
        });

        var problem = $("#zone .dragme:eq(6)");
        problem.addClass('warning');

        var problemsFloat = $(".selectZone"),
                sendError = $(".sendError");

        $(".itsFine").click(function(){
            $(this).closest(".dragme").removeClass('warning').addClass("succes");
            problemsFloat.hide();
            validateErros();
        });

        $(".addError").click(function(){
            var $this = $(this),
                    $parent = $this.closest('.dragme'),
                    positionTop,
                    positionLeft,
                    width,
                    height
                    ;

            positionTop = $parent.position().top;
            positionLeft = $parent.position().left;
            width = $parent.width();
            height = $parent.height();
            $parent.addClass('hover');
            problemsFloat.css({
                left: positionLeft + width,
                top: positionTop + height
            }).show();
        });

        sendError.click(function(){
            var $this = $(this),
                    $parent = $(".dragme.hover")
                    ;
            $parent.removeClass('succes hover').addClass("warning");
            problemsFloat.hide();
            validateErros();
        })

        $(".select2_group").select2({});
    });

    function startDrag(e) {
//        if (!e) {
//            var e = window.event;
//        }
//        if(e.preventDefault) e.preventDefault();

        targ = e.target ? e.target : e.srcElement;

        if (targ.className != 'dragme') {return};
        // calculate event X, Y coordinates
        offsetX = e.clientX;
        offsetY = e.clientY;

        if(!targ.style.left) { targ.style.left='0px'};
        if (!targ.style.top) { targ.style.top='0px'};

        coordX = parseInt(targ.style.left);
        coordY = parseInt(targ.style.top);
        drag = true;

        document.onmousemove=dragDiv;
        return false;
    }
    function dragDiv(e) {
        if (!drag) {return};
        if (!e) { var e= window.event};
        targ.style.left=coordX+e.clientX-offsetX+'px';
        targ.style.top=coordY+e.clientY-offsetY+'px';
        return false;
    }
    function stopDrag() {
        drag=false;
    }
    window.onload = function() {
        document.onmousedown = startDrag;
        document.onmouseup = stopDrag;
    };
    function validateErros(){
        $("#number").text($(".dragme.warning").length);
    }
</script>
</html>