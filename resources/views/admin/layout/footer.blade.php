		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<!-- <aside class="control-sidebar control-sidebar-light"> -->
    <!-- Control sidebar content goes here -->
<!-- </aside> -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer text-sm">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2-pre
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
{{-- <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script> --}}
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
{{-- <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables -->
{{-- <script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script> --}}
<script src="{{ asset('/admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<!-- overlayScrollbars -->
{{-- <script src="<?php echo base_url() ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> --}}
<script src="{{ asset('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE App -->
{{-- <script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script> --}}
<script src="{{ asset('/admin/dist/js/adminlte.min.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script> -->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
{{-- <script src="<?php echo base_url() ?>assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script> --}}
<script src="{{ asset('/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('/admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('/admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('/admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

<!-- ChartJS -->
{{-- <script src="<?php echo base_url() ?>assets/admin/plugins/chart.js/Chart.min.js"></script> --}}
<script src="{{ asset('/admin/plugins/chart.js/Chart.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
{{-- <script src="<?php echo base_url() ?>assets/admin/dist/js/pages/dashboard2.js"></script> --}}
<script src="{{ asset('/admin/dist/js/pages/dashboard2.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>
