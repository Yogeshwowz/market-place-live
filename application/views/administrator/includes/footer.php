<?php $url= explode('/',$_SERVER['REQUEST_URI']); ?>
<div class="bg-primary pb-5">
    <div class="container-fluid">
        <footer class="footer pl-4">
                <div class="copyright text-center  text-lg-left  text-muted">
                  &copy; 2021 <span class="font-weight-bold ml-1" ><?php echo SiteTitle;?></span>
                </div>
        </footer>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
		<?php /*
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
		<!-- Optional JS -->
		<script src="<?php echo base_url(); ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
		*/ ?>
  	<?php if(in_array('buyers',$url) || in_array('sellers',$url) || in_array('investors',$url) || in_array('advisory',$url) || in_array('testimonial',$url)) { ?>
  <!-- Data Table ---->
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
	  
  <!-- End Data Table ---->
  <?php } ?>
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>
 
 
 
  <!-- Argon JS -->
	<script src="<?php echo base_url(); ?>assets/js/argon.min5438.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/loading/loading.css">
	<script src="<?php echo base_url(); ?>assets/js/loading/loading.js"></script>
	<?php if(in_array('buyers',$url) || in_array('sellers',$url) || in_array('investors',$url) || in_array('advisory',$url) || in_array('testimonial',$url) ) { ?>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<?php } ?>
	<script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
	<script>CKEDITOR.replace('buyeditor1');CKEDITOR.replace('selleditor1');CKEDITOR.replace('business_plan');</script>
</body>
</html>