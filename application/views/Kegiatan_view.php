<!-- DataTables -->
<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/dataTables.bootstrap.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Kegiatan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master</a></li>
        <li class="active">Kegiatan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
			<div class="box">
            <div class="box-header">
				<div class="pull-right" >
				</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<table id="tb_kegiatan" class="table table-bordered table-striped">
                    <thead>
						<tr>
						  <th hidden>ID Kegiatan</th>
						  <th>Kode Kegiatan</th>
						  <th>Nama Kegiatan</th>
						  <th>Nama Program</th>
						  <th>Nama OPD</th>
						</tr>
                    </thead>
                    <tbody>
						<?php asort($data);
						foreach($data as $k => $v) { 
						?>						
							<tr>
								<td hidden><?php echo $v['id_giat']; ?></td>
								<td align="center"><?php echo $v['kode_giat']; ?></td>
								<td><?php echo $v['nama_giat']; ?></td>
								<td><?php echo $v['nama_program']; ?></td>
								<td><?php echo $v['nama_skpd']; ?></td>
								
							</tr>
						<?php }?>
					</tbody>
                 </table>
            </div>
            <!-- /.box-body -->
          </div>
		</div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- jQuery 2.1.4 -->
<script src="<?php echo TEMPLATE_ASSETS; ?>bower_components/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo TEMPLATE_ASSETS; ?>bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo TEMPLATE_ASSETS; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo TEMPLATE_ASSETS; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo TEMPLATE_ASSETS; ?>dist/js/demo.js"></script>

<script>
  $(function () {
	$("#tb_kegiatan").DataTable();
  });
</script>