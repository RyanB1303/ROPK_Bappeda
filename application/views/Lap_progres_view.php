<!-- DataTables -->
<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/dataTables.bootstrap.css">

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
			<i class="fa fa-book"></i>Laporan Progress
		</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-12">
			<div class="box">
				<div class="box-header with-border">
					<h3>Data Laporan Progress</h3>
				</div>
				<form class="form-horizontal" method="post">
					<fieldset>
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-2 control-label" align="left">Sub Unit</label>
								<div class="col-sm-8">
									<select class="form-control select2" style="width: 100%;" name="sub_unit" id="sub_unit" onChange="table2();">
										<option selected="selected" disabled>-Pilih Sub Unit-</option>
										<?php 
										foreach($sub_unit as $k=>$v){?>
											<option value="<?php echo $v['id_sub_unit']; ?>"><?php echo $v['nama_sub_unit'];?></option>
											<?php }?>
									</select>
								</div>
							</div>
							<div>
								<br/>
								<br/>
							</div>
							<div>
							<p hidden align="center">Progres Tahapan Kinerja Rencana Operasional Program dan Kegiatan Tahun 2021<br/>
								<?php echo $v['nama_sub_unit'];?> Kota Madiun</p>
								<br/>
							</div>
							<div class="form-group">
								<div class="col-lg-12" >
									<table id="tb_prog" class="table table-bordered table-striped">
										<thead bgcolor="#5d80a3">
											<tr style="color: #fff;">
											  <th>No</th>
											  <th>Bidang/Program/Kegiatan/SubKegiatan</th>
											  <th>Target</th>
											  <th>Realisasi</th>
											  <th>Capaian(%)</th>
											  <th>Keterangan</th>
											</tr>
										</thead>
										<tbody>
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
				<!-- /.box-header -->
          </div>
		</div>
    </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(load);

function load() {
    table2();
}
function table2(){
	$('#sub_unit').change(function(){ 
		var unit = $('#sub_unit').val();
		$("p").show();
		$.ajax({
			type:"POST",
			data: {"unit":unit},
			dataType : "html",
			url : "<?php echo BASE_URL;?>lap_progres/get_data_content",
			success: function(data){
				$('#tb_prog').html(data);
			}
		});
	});
}
</script>
