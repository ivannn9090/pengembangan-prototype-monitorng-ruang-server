            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Andi Muh Richvan Junaid <?= date('Y'); ?></span>
                        <div class="flex items-center text-lg no-underline text-white pr-6 float-right">

                            <a class="pl-6" href="https://instagram.com/richvanivan?igshid=191i2gl26no67">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a class="pl-6" href="https://github.com/ivannn9090/statistik-adminlte-">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>

                    </div>
                </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>sbadmin/vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>sbadmin/js/sb-admin-2.min.js"></script>
            <script src="<?= base_url('assets/'); ?>sbadmin/js/script.js"></script>
            <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>

            <!-- OPTIONAL SCRIPTS -->
            <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>

            <!-- PAGE PLUGINS -->
            <!-- jQuery Mapael -->
            <script src="<?= base_url('assets/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
            <script src="<?= base_url('assets/') ?>plugins/raphael/raphael.min.js"></script>
            <script src="<?= base_url('assets/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
            <script src="<?= base_url('assets/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
            <!-- ChartJS -->
            <script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>

            <!-- PAGE SCRIPTS -->
            <script src="<?= base_url('assets/') ?>dist/js/pages/dashboard2.js"></script>

            <!-- jQuery UI -->
            <script src="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>

            <!-- FLOT CHARTS -->
            <script src="<?= base_url('assets/') ?>plugins/flot/jquery.flot.js"></script>
            <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
            <script src="<?= base_url('assets/') ?>plugins/flot-old/jquery.flot.resize.min.js"></script>
            <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
            <script src="<?= base_url('assets/') ?>plugins/flot-old/jquery.flot.pie.min.js"></script>
            <!-- Page script -->
            <script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});



$('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
        url: "<?= base_url('admin/changeaccess'); ?>",
        type: 'post',
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function() {
            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
        }
    });

});
            </script>

            </body>

            </html>