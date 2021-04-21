<!-- DataTables -->
<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/dataTables.bootstrap.css">

 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1>
			<i class="fa fa-dashboard"> </i>Dashboard
			<br/>
			<small><i>Selamat datang di halaman Dashboard</i></small>
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Dashboard</li>
		  </ol>
		</section>
		
		
		<!-- Main content -->
		<section class="content">

		  <!-- Small boxes (Stat box) -->
		  <div class="row">
			<div class="col-xs-12">
				<div class="box">
				<div class="box-header">
					<div class="pull-left" >
						<h3>Target Kinerja dan Keuangan Bulan Ini</h3>
					</div>
					<div class="pull-right" >
						<select class="form-control select2" style="width: 100%;" name="subunit" id="subunit">
							<option selected="selected" disabled>Pilih Sub Unit</option>
							<?php foreach($sub_unit as $k=>$v){
							?>
							<option value="<?php echo $v['id_sub_unit'];?>" ><?php echo $v['nama_sub_unit']; ?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="tb_subunit" class="table table-bordered table-striped">
						<thead>
							<tr bgcolor="#5d80a3">
							  <th style="color: #fff;">Nama Kegiatan</th>
							  <th style="color: #fff;">Target Kinerja</th>
							  <th style="color: #fff;">Target Keuangan</th>
							</tr>
						</thead>
						<tbody id="tb_data">
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
		  </div>
		  <!-- /.row -->
		  
		  <div class="row">
			<div class="col-xs-6">
				<div class="box">
				<div class="box-header">
					<div class="pull-left" >
						<h3>Tingkat Realisasi Kinerja Kota Madiun</h3>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr bgcolor="#5d80a3">
							  <th style="color: #fff;">Nama OPD</th>
							  <th style="color: #fff;">Jumlah Program</th>
							  <th style="color: #fff;">Deviasi Positif</th>
							  <th style="color: #fff;">Deviasi Negatif</th>
							</tr>
						</thead>
						<tbo
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<div class="col-xs-6">
				<div class="box">
				<div class="box-header">
					<div class="pull-left" >
						<h3>Tingkat Realisasi Keuangan Kota Madiun</h3>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr bgcolor="#5d80a3">
							  <th style="color: #fff;">Nama OPD</th>
							  <th style="color: #fff;">Jumlah Program</th>
							  <th style="color: #fff;">Deviasi Positif</th>
							  <th style="color: #fff;">Deviasi Negatif</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
		  </div>

		</section>

    </div><!-- /.content-wrapper -->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#subunit').change(function(){ 
		var unit = $('#subunit').val();
		$.ajax({
			type:"POST",
			data: {"unit":unit},
			dataType : "html",
			url : "<?php echo BASE_URL;?>dashboard/get_kegiatan",
			success: function(data){
				//alert(data);
				$('#tb_data').html(data);
			}
		});
	});
});

	
</script>