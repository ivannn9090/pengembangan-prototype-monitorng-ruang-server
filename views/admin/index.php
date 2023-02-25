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

                var temperature = parseFloat($('#temperature1').html());
                var cardBody = document.getElementById("card-body");
                    if (temperature >= 20 && temperature <= 25) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "yellow";
                    }

                var temperature2 = parseFloat($('#temperature2').html());
                var cardBody = document.getElementById("card-body2");
                    if (temperature2 <= 20) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "yellow";
                    }

                var humidity1 = parseFloat($('#humidity1').html());
                var cardBody = document.getElementById("card-body9");
                    if (humidity1 >= 45 && humidity1 <= 55) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "orange";
                    }

                var humidity2 = parseFloat($('#humidity2').html());
                var cardBody = document.getElementById("card-body0");
                    if (humidity2 >= 45 && humidity1 <= 55) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "orange";
                    }

               // var temperature2 = parseFloat($('#temperature2').html());
               // var cardBody = document.getElementById("card-body2");
               //     if (temperature2 == 40 && ) {
               //          cardBody.style.backgroundColor =  "green";
               //     } else {
               //          cardBody.style.backgroundColor = "yellow";
               //     }

                
            }
            
        });
      //  var condition = $data[0]["temperature1"]->value == '20';
  //var cardBody = document.getElementById("card-body");
  //if (condition) {
  //  cardBody.style.backgroundColor = "green";
  //} else {
  //  cardBody.style.backgroundColor = "red";
 // }

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

                var fire1 = parseFloat($('#fire1').html());
                var cardBody = document.getElementById("card-body4");
                    if (fire1 == 0) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "red";
                    }

                var fire2 = parseFloat($('#fire2').html());
                var cardBody = document.getElementById("card-body5");
                    if (fire2 == 0) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "red";
                    }
                    
                var smoke1 = parseFloat($('#smoke1').html());
                var cardBody = document.getElementById("card-body6");
                    if (smoke1 == 0) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "white";
                    }

                var smoke2 = parseFloat($('#smoke2').html());
                var cardBody = document.getElementById("card-body7");
                    if (smoke2 == 0) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "white";
                    }
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

                var temperature3 = parseFloat($('#temperature3').html());
                var cardBody = document.getElementById("card-body3");
                    if (temperature3 >= 20 && temperature3 <= 25) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "yellow";
                    }

                var humidity3 = parseFloat($('#humidity3').html());
                var cardBody = document.getElementById("card-body10");
                    if (humidity3 >= 45 && humidity1 <= 55) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "orange";
                    }
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

                var movement1 = parseFloat($('#movement1').html());
                var cardBody = document.getElementById("card-body8");
                    if (movement1 == 0) {
                         cardBody.style.backgroundColor =  "green";
                    } else {
                         cardBody.style.backgroundColor = "blue";
                    }
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


             //var condition = $('#temperature1status').html(data[0]["temperature1"]); ;
             // var cardBody = document.getElementById("card-body");
             // if (condition == 'Normal') {
             //  cardBody.style.backgroundColor = "green";
             // } else {
             //   cardBody.style.backgroundColor = "red";
            // }
            }
        });
  

    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h3 class="m-0 text-secondary">DEVICE 1</h3>
    <!-- Content Row -->
    <div class="row">
        

<!-- Humidity 1 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body9" class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        humidity 1</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'humidity1'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-wind fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Humidity 2 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body0" class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        humidity2</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'humidity2'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-wind fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tempperature 1 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body" class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black  text-uppercase mb-1">Temperature 1
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-black-800" id='temperature1'></div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-black-800" id='temperature1status'></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-temperature-high fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- temperature 2 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body2" class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        temperature2</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id='temperature2'></div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id='temperature2status'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-temperature-high fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  
<h3 class="m-0 text-secondary">DEVICE 2</h3>

<!-- Content Row -->
<div class="row">

<!-- Fire 1 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body4" class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        Fire 1</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'fire1'></div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'fire1status'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-fire fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fire 2 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body5" class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        Fire 2</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'fire2'></div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'fire2status'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-fire fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Smoke 1 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body6" class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">Semoke 1
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-black-800" id='smoke1'></div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-black-800" id='smoke1status'></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-smog fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Smoke 2 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body7" class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        Smoke 2</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id='smoke2'></div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id='smoke2status'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-smog fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<h3 class="m-0 text-secondary">DEVICE 3</h3>

<!-- Content Row -->
<div class="row">

<!-- Humidity 3 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body10" class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        humidity 3</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'humidity3'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-wind fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Tempperature 3 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body3" class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">Temperature 3
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-black-800" id='temperature3'></div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-black-800" id='temperature3status'></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-temperature-high fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>



</div>   

<h3 class="m-0 text-secondary">DEVICE 4</h3>

<!-- Content Row -->
<div class="row">


  
<!-- Movement 1 -->
<div class="col-xl-3 col-md-6 mb-4">
    <div id="card-body8" class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                        Movement 1</div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'movement1'></div>
                    <div class="h5 mb-0 font-weight-bold text-black-800" id = 'movement1status'></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-eye fa-2x text-black-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>   
</div>   

    





<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->