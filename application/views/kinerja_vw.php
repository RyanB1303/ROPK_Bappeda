<?php
//print_r($data);die;
?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/dataTables.bootstrap.css">

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<h1>
			<i class="fa fa-bar-chart"></i>ROPK Kinerja
		</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-12">
			<div class="box">
				<div class="box-header with-border">
					<h3>Data ROPK Kinerja</h3>
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
										foreach($sub_unit as $k=>$v){
											
											//print_r($query);die;?>
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
								<br/>
							</div>
							<div>
								<br/>
							</div>
							<div class="form-group">
								<div class="col-lg-12" >
									<table id="tb_prog" class="table table-bordered table-striped">
										<thead bgcolor="#5d80a3">
											<tr style="color: #fff;">
											  <th>No</th>
											  <th>Kode</th>
											  <th>Bidang/Program/Kegiatan/SubKegiatan</th>
											  <th>Pagu Anggaran</th>
											  <th>Pilihan</th>
											  <th>
												<button type="button" class="btn btn-warning"><i class="fa fa-lock"></i></button>
												<button type="button" class="btn btn-danger"><i class="fa fa-unlock"></i></button>
											  </th>
											</tr>
										</thead>
										<!--<tbody>
										<?php //print_r($limit);die;
											//foreach($limit as $k => $v) { 
											?>		
												<tr style="color: #fff;">
														<td bgcolor="#3793de"><?php //echo $v['kode_bidang_urusan']; ?></td>
														<td bgcolor="#3793de" colspan="4"><?php// echo $v['nama_bidang_urusan'];?></td>
												</tr>
												<tr style="color: #fff;">
														<td bgcolor="#3793de"><?php //echo $v['kode_program']; ?></td>
														<td bgcolor="#3793de" colspan="4"><?php //echo $v['nama_program'];?></td>
												</tr>
												<tr>
													<td><?php// echo $v['kode_giat'];?></td>
													<td><?php// echo $v['nama_giat']; ?></td>
													<td colspan="3"><?php //echo $v['pagu']; ?></td>
												</tr>
												<tr>
													<td><?php //echo $v['kode_sub_giat']; ?></td>
													<td><?php //echo $v['nama_sub_giat']; ?></td>
													<td><?php //echo $v['rincian']; ?></td>
													<td align="center">
														<a href="kinerja/perencanaan/<?php //echo $v['kode_sub_giat'];?>"><button type="button" class="btn btn-success">Perencanaan</button></a>
														<a href="#"><button type="button" class="btn btn-info">Realisasi</button></a>
													</td>
													<td align="center"><button type="button" class="btn btn-danger"><i class="fa fa-unlock"></i></button></td>
												</tr>
											<?php //}?>
										</tbody>-->
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
		$.ajax({
			type:"POST",
			data: {"unit":unit},
			dataType : "html",
			url : "<?php echo BASE_URL;?>kinerja/get_data_content",
			success: function(data){
				$('#tb_prog').html(data);
			}
		});
	});
}
</script>
