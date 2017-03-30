<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!$_SESSION["validar"]) {
    echo "<script>"
    . "window.location.replace(\"http://10.224.24.247/parque/\");"
    . "</script>";
    exit();
}
?>

<div class="row">            
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Contenido del panel de control
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                </li>
                <li class="active">Registro estadístico</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->

    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="#">
                <div class="circle-tile-heading dark-blue">
                    <i class="fa fa-th fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content dark-blue">
                <div class="circle-tile-description text-faded">
                    Sector 1 - 2 - 3
                </div>
                <div class="circle-tile-number text-faded">
                    $ 8000
                    <span id="sparklineA"></span>
                </div>
                <a href="#" class="circle-tile-footer">Más información <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="#">
                <div class="circle-tile-heading green">
                    <i class="fa fa-th fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content green">
                <div class="circle-tile-description text-faded">
                    Sector 4 - 7
                </div>
                <div class="circle-tile-number text-faded">
                    $ 7000
                </div>
                <a href="#" class="circle-tile-footer">Más información <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="#">
                <div class="circle-tile-heading orange">
                    <i class="fa fa-th fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content orange">
                <div class="circle-tile-description text-faded">
                    Sector 5 - 6 - 8
                </div>
                <div class="circle-tile-number text-faded">
                    $ 6000
                </div>
                <a href="#" class="circle-tile-footer">Más información <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="#">
                <div class="circle-tile-heading blue">
                    <i class="fa fa-th fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content blue">
                <div class="circle-tile-description text-faded">
                    Derecho de inhumación 
                </div>
                <div class="circle-tile-number text-faded">
                    $ 500
                    <span id="sparklineB"></span>
                </div>
                <a href="#" class="circle-tile-footer">Más información <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="#">
                <div class="circle-tile-heading red">
                    <i class="fa fa-eraser fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content red">
                <div class="circle-tile-description text-faded">
                    Apertura de parcela
                </div>
                <div class="circle-tile-number text-faded">
                    $ 1500
                    <span id="sparklineC"></span>
                </div>
                <a href="#" class="circle-tile-footer">Más información <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="#">
                <div class="circle-tile-heading purple">
                    <i class="fa fa-gavel fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content purple">
                <div class="circle-tile-description text-faded">
                    Grabado de placas y floreros
                </div>
                <div class="circle-tile-number text-faded">
                    $ 2000
                    <span id="sparklineD"></span>
                </div>
                <a href="#" class="circle-tile-footer">Más información <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>


</div>

<!-- Bar Chart Example -->
<div class="col-lg-6">
    <div class="portlet portlet-blue">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Bar Chart</h4>
            </div>
            <div class="portlet-widgets">
                <a href="javascript:;"><i class="fa fa-refresh"></i></a>
                <span class="divider"></span>
                <a data-toggle="collapse" data-parent="#accordion" href="#barChart"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="barChart" class="panel-collapse collapse in">
            <div class="portlet-body">
                <div id="morris-chart-bar"></div>
            </div>
        </div>
    </div>
</div>
<!-- /.col-lg-6 -->
