
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPrototipe">Add New
                Submenu</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prototipe</th>
                        <th scope="col">device</th>
                        <th scope="col">sensor</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prototipe as $p) : ?>
                        <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $p['title']; ?></td>
                        <td><?= $p['nama_device']; ?></td>
                        <td><?= $p['nama_sensor']; ?></td>
                        <td><?= $p['url_api']; ?></td>
                        <td><?= $p['icon']; ?></td>
                        <td>
                            
                            <a href="<?= base_url();  ?>sensor/deletes/<?= $p['id'];  ?>" class="badge badge-danger "
                                onclick="return confrim ('yakin?');">delete</a>
                        </td>
                        
                    </tr>
                    <?php $i++; ?>
                    
                    <?php endforeach; ?>
                </tbody>
            </table>

           

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newPrototipe" tabindex="-1" role="dialog" aria-labelledby="newPrototipeLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPrototipeLabel">Add New prototipe Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('sensor/prototipe'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Prototipe title">
                    </div>
                    <div class="form-group">
                        <select name="device_id" id="device_id" class="form-control">
                            <option value="">Select Device</option>
                            <?php foreach ($device as $de) : ?>
                            <option value="<?= $de['id']; ?>"><?= $de['nama_device']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="sensor_id" id="sensor_id" class="form-control">
                            <option value="">Select sensor</option>
                            <?php foreach ($sensor as $se) : ?>
                            <option value="<?= $se['id']; ?>"><?= $se['nama_sensor']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Prototipe url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Prototipe icon">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>