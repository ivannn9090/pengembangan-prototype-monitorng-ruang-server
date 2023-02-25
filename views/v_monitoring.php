
<script>
    $(document).ready(function() {
        live_data();
    })

    function live_data() {
        setTimeout(function() {
            Device1();
            Device2();
            Device3();
            Device4();
            DeviceStatus();
            live_data();
        }, 1000);
    }
    function Device1() {
        $.ajax({
            url: "<?= base_url() ?>/device1",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#humidity1').html(data[0]["humidity1"]);
                $('#humidity2').html(data[0]["humidity2"]);
                $('#temperature1').html(data[0]["temperature1"]);
                $('#temperature2').html(data[0]["temperature2"]);
            }
            
        });
    }
    

    function Device2() {
        $.ajax({
            url: "<?= base_url() ?>/device2",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#fire1').html(data[0]["fire1"]);
                $('#fire2').html(data[0]["fire2"]);
                $('#smoke1').html(data[0]["smoke1"]);
                $('#smoke2').html(data[0]["smoke2"]);
            }
        });
    }

    function Device3() {
        $.ajax({
            url: "<?= base_url() ?>/device3",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#humidity3').html(data[0]["humidity3"]);
                $('#temperature3').html(data[0]["temperature3"]);
            }
        });
    }

    function Device4() {
        $.ajax({
            url: "<?= base_url() ?>/device4",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#movement1').html(data[0]["movement1"]);
            }
        });
    }

    function DeviceStatus() {
        $.ajax({
            url: "<?= base_url() ?>/devicestatus",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#temperature1status').html(data[0]["temperature1"]);
                $('#temperature2status').html(data[0]["temperature2"]);
                $('#temperature3status').html(data[0]["temperature3"]);
                $('#fire1status').html(data[0]["fire1"]);
                $('#fire2status').html(data[0]["fire2"]);
                $('#smoke1status').html(data[0]["smoke1"]);
                $('#smoke2status').html(data[0]["smoke2"]);
                $('#movement1status').html(data[0]["movement1"]);
            }
        });
    }
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary">ROOM STATUS</h1>

                    <!-- <a href="<?= base_url('monitoring/reset_kwh') ?>">
                        <button type="button" class="btn btn-warning">
                            Reset KWH
                        </button>
                    </a>
                    <button type="button" class="btn btn-primary">
                        Suhu : <div id="nilai_suhu"></div>
                    </button> -->


                    <h3 class="m-0 text-secondary">DEVICE 1</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wind"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Humidity 1</span>
                            <span class="info-box-number">
                                <div id="humidity1"></div>
                                <div>&nbsp;</div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wind"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Humidity 2</span>
                            <span class="info-box-number">
                                <div id="humidity2"></div>
                                <div>&nbsp;</div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-temperature-high"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Temperature 1</span>
                            <span class="info-box-number">
                                <div id="temperature1"></div>
                                <div id="temperature1status"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-temperature-high"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Temperature 2</span>
                            <span class="info-box-number">
                                <div id="temperature2"></div>
                                <div id="temperature2status"></div>
                            </span>
                        </div>

                    </div>
                </div>


    </section>


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <!-- <a href="<?= base_url('monitoring/reset_kwh') ?>">
                        <button type="button" class="btn btn-warning">
                            Reset KWH
                        </button>
                    </a>
                    <button type="button" class="btn btn-primary">
                        Suhu : <div id="nilai_suhu"></div>
                    </button> -->


                    <h3 class="m-0 text-secondary">DEVICE 2</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-fire"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Fire 1</span>
                            <span class="info-box-number">
                                <div id="fire1"></div>
                                <div id="fire1status"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-fire"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Fire 2</span>
                            <span class="info-box-number">
                                <div id="fire2"></div>
                                <div id="fire2status"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-smog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Smoke 1</span>
                            <span class="info-box-number">
                                <div id="smoke1"></div>
                                <div id="smoke1status"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-smog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Smoke 2</span>
                            <span class="info-box-number">
                                <div id="smoke2"></div>
                                <div id="smoke2status"></div>
                            </span>
                        </div>

                    </div>
                </div>


    </section>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <!-- <a href="<?= base_url('monitoring/reset_kwh') ?>">
                        <button type="button" class="btn btn-warning">
                            Reset KWH
                        </button>
                    </a>
                    <button type="button" class="btn btn-primary">
                        Suhu : <div id="nilai_suhu"></div>
                    </button> -->


                    <h3 class="m-0 text-secondary">DEVICE 3</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wind"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Humidity 3</span>
                            <span class="info-box-number">
                                <div id="humidity3"></div>
                                <div>&nbsp;</div>
                            </span>
                        </div>

                    </div>
                </div>


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-temperature-high"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Temperature 3</span>
                            <span class="info-box-number">
                                <div id="temperature3"></div>
                                <div id="temperature3status"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>




    </section>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <!-- <a href="<?= base_url('monitoring/reset_kwh') ?>">
                        <button type="button" class="btn btn-warning">
                            Reset KWH
                        </button>
                    </a>
                    <button type="button" class="btn btn-primary">
                        Suhu : <div id="nilai_suhu"></div>
                    </button> -->


                    <h3 class="m-0 text-secondary">DEVICE 4</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-eye"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Movement</span>
                            <span class="info-box-number">
                                <div id="movement1"></div>
                                <div id="movement1status"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

    </section>




    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-secondary">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->