<!-- DataTables -->
<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/dataTables.bootstrap.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Program
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master</a></li>
        <li class="active">Program</li>
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
				<table id="tb_program" class="table table-bordered table-striped">
                    <thead>
						<tr>
						  <th hidden>ID Program</th>
						  <th>Kode Program</th>
						  <th>Nama Program</th>
						  <th>Nama OPD</th>
						</tr>
                    </thead>
                    <tbody>
						<?php asort($data);
						foreach($data as $k => $v) { 
						//print_r($v);die;
						?>						
							<tr>
								<td hidden><?php echo $v['id_program']; ?></td>
								<td><?php echo $v['kode_program']; ?></td>
								<td><?php echo $v['nama_program']; ?></td>
								<td><?php echo $v['nama_skpd']; ?></td>
							</tr>
							<?php 
							}?>
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
<script src="<?php echo TEMPLATE_ASSETS; ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
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
	$("#tb_program").DataTable();
  });
</script>