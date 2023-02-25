<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Sensor</th>
                        <th scope="col">value</th>
                    </tr>
                </thead>
                <tbody id="humidity" >
                </tbody>
            </table>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<script type="text/javascript">
$(document).ready(function() {
        live_data_humidity();
    })
    function live_data_humidity() {
        setTimeout(function() {
            datahumidity();
            
            live_data_humidity();
        }, 1000);
    }

    function datahumidity() {
        $.ajax({
            url: "<?= base_url() ?>/temperature",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var humidity='';
                for(var i=0;i < data.length;i++){
                    humidity += '<tr>'+
                                 '<td>'+data[i].nama_sensor+'</td>' +
                                 '<td>'+data[i].value+'</td>' +
                             '</tr>';
                }
               $('#humidity').html(humidity);
               console.log(data);
            }
        });
    }

</script>