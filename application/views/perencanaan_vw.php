<?php
$cek = $_SESSION['id_unit'];
//print_r($cek);die;
?>

<!-- DataTables -->
<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-pencil"></i>Perencanaan
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="callout callout-info">
						<h4>Nama Kegiatan : </h4>
					</div>
					<!-- /.box-header -->
					<form class="form-horizontal" id="form_perencanaan" name="form_perencanaan" action="<?php echo base_url() ?>kinerja/simpan_perencanaan" method="POST">
						<fieldset>
							<div class="box-body" style="padding:0px">
								<table id="myTable" class="table table-bordered table-striped" style="border-collapse:collapse; width:100%;">
									<thead bgcolor="#2980b9">
										<tr align="center" style="font-weight:bold; color: #fff;">
											<th rowspan="3" style="width:40px">NO</th>
											<th rowspan="3" style="width:40px">Kegiatan / Sub Kegiatan</th>
											<th rowspan="3" style="width:40px">Satuan</th>
											<th rowspan="3" style="width:20px">Total</th>
											<th colspan="48" style="width:40px">
												<select class="form-control select2" style="width: 100%;" name="ubahbulan" id="ubahbulan" onchange="ubahbulan();">
													<option selected="selected">All</option>
													<?php foreach ($bulan as $k => $v) {; ?>
														<option value="<?php echo $v['id_bulan']; ?>"><?php echo $v['nama_bulan']; ?></option>
													<?php } ?>
												</select>
											</th>
										</tr>
										<tr style="font-weight:bold; color: #fff;">
											<th colspan="48" style="width:40px; text-align:center;"> Target Rencana</th>
										</tr>
										<tr style="font-weight:bold; color: #fff;">
											<th colspan="4" style="width:7px; text-align:center;">Jan</th>
											<th colspan="4" style="width:7px; text-align:center;">Feb</th>
											<th colspan="4" style="width:7px; text-align:center;">Mar</th>
											<th colspan="4" style="width:7px; text-align:center;">Apr</th>
											<th colspan="4" style="width:7px; text-align:center;">Mei</th>
											<th colspan="4" style="width:7px; text-align:center;">Jun</th>
											<th colspan="4" style="width:7px; text-align:center;">Jul</th>
											<th colspan="4" style="width:7px; text-align:center;">Agt</th>
											<th colspan="4" style="width:7px; text-align:center;">Sep</th>
											<th colspan="4" style="width:7px; text-align:center;">Okt</th>
											<th colspan="4" style="width:7px; text-align:center;">Nov</th>
											<th colspan="4" style="width:7px; text-align:center;">Des</th>
										</tr>
									</thead>
									<tbody id="tbody_persiapan">
										<tr style="background-color:#56a6db; font-weight:bold;">
											<td style="width:40px">1</td>
											<td colspan="52">Persiapan</td>
										</tr>
										<tr style="background-color:#89caf5; font-weight:bold;">
											<td style="width:40px">1.1</td>
											<td><i>ind keg</i> <input type="button" id="btn_add_persiapan" class="btn btn-success" name="btn_add_persiapan" value="+" /></td>
											<td colspan="50">satuan</td>
										</tr>
									</tbody>
									<tbody id="tbody_pelaksanaan">
										<tr style="background-color:#56a6db; font-weight:bold;">
											<td style="width:40px">2</td>
											<td colspan="52">Pelaksanaan</td>
										</tr>
										<tr style="background-color:#89caf5; font-weight:bold;">
											<td style="width:40px">2.1</td>
											<td><i>ind keg</i> <input type="button" id="btn_add_pelaksanaan" class="btn btn-success" name="btn_add_pelaksanaan" value="+" /></td>
											<td colspan="50">satuan</td>
										</tr>
									</tbody>
									<tbody id="tbody_pelaporan">
										<tr style="background-color:#56a6db; font-weight:bold;">
											<td style="width:40px">3</td>
											<td colspan="52">Pelaporan</td>
										</tr>
										<tr style="background-color:#89caf5; font-weight:bold;">
											<td style="width:40px">3.1</td>
											<td><i>ind keg</i><input type="button" id="btn_add_pelaporan" class="btn btn-success" name="btn_add_pelaporan" value="+" /></td>
											<td colspan="50">ind keg</td>
										</tr>
									</tbody>
								</table>
							</div>
						</fieldset>
						<div class="box-footer">
							<a class="btn btn-default" id="cancel" href="<?php echo BASE_URL; ?>kinerja">
								<i class="fa fa-rotate-left"></i>
								Kembali
							</a>
							<button type="submit" name="submit" id="submit" class="btn btn-info pull-center">Simpan</button>
						</div><!-- /.box-footer -->
					</form>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script type="text/javascript">
	let lineNo = 1;
	let lineNo2 = 1;
	let lineNo3 = 1;

	$(document).ready(function() {
		load();



		$('#submit').click(function() {
			// event.preventDefault();
			$.ajax({
				url: "<?php echo base_url(); ?>kinerja/simpan_perencanaan ",
				method: "POST",
				data: $('#form_perencanaan').serialize(),
				success: function(data) {
					console.log(data);
				}
			})
		});
	});

	function load() {
		persiapan();
		pelaksanaan();
		pelaporan();
		del_persiapan();
		del_pelaksanaan();
		del_pelaporan();
		ubahbulan();
	}

	function ubahbulan() {
		$('#ubahbulan').change(function() {
			var val_bulan = $('#ubahbulan').val();
			//alert(val_bulan);
		});
	}



	//function untuk add row di tahap persiapan
	function persiapan() {
		$('#btn_add_persiapan').click(function() {
			markup = "<tr id='tr_persiapan'><td><input style='width:40px' type='text' readonly id='kode_perencanaan' name='kode_perencanaan' value='1.1." + lineNo + "'></input><button class='btnDelete btn btn-danger' onclick='del_persiapan();'>x</button></td><td colspan='2'><input style='width:70px' type='text' name='indikator' id='indikator' placeholder='(isikan text disini)'></input></td><td><input style='width:20px' type='text' name='kalkulasi' id='kalkulasi' value='0' readonly></input></td><td colspan='4'><input style='width:20px' type='text' name='jan_w1' id='jan_w1'></input><input style='width:20px' type='text' name='jan_w2' id='jan_w2'></input><input style='width:20px' type='text' name='jan_w3' id='jan_w3'></input><input style='width:20px' type='text' name='jan_w4' id='jan_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='feb_w1' id='feb_w1'></input><input style='width:20px' type='text' name='feb_w2' id='feb_w2'></input><input style='width:20px' type='text' name='feb_w3' id='feb_w3'></input><input style='width:20px' type='text' name='feb_w4' id='feb_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='mar_w1' id='mar_w1'></input><input style='width:20px' type='text' name='mar_w2' id='mar_w2'></input><input style='width:20px' type='text' name='mar_w3' id='mar_w3'></input><input style='width:20px' type='text' name='mar_w4' id='mar_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='apr_w1' id='apr_w1'></input><input style='width:20px' type='text' name='apr_w2' id='apr_w2'></input><input style='width:20px' type='text' name='apr_w3' id='apr_w3'></input><input style='width:20px' type='text' name='apr_w4' id='apr_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='mei_w1' id='mei_w1'></input><input style='width:20px' type='text' name='mei_w2' id='mei_w2'></input><input style='width:20px' type='text' name='mei_w3' id='mei_w3'></input><input style='width:20px' type='text' name='mei_w4' id='mei_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='jun_w1' id='jun_w1'></input><input style='width:20px' type='text' name='jun_w2' id='jun_w2'></input><input style='width:20px' type='text' name='jun_w3' id='jun_w3'></input><input style='width:20px' type='text' name='jun_w4' id='jun_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='jul_w1' id='jul_w1'></input><input style='width:20px' type='text' name='jul_w2' id='jul_w2'></input><input style='width:20px' type='text' name='jul_w3' id='jul_w3'></input><input style='width:20px' type='text' name='jul_w4' id='jul_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='agt_w1' id='agt_w1'></input><input style='width:20px' type='text' name='agt_w2' id='agt_w2'></input><input style='width:20px' type='text' name='agt_w3' id='agt_w3'></input><input style='width:20px' type='text' name='agt_w4' id='agt_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='sep_w1' id='sep_w1'></input><input style='width:20px' type='text' name='sep_w2' id='sep_w2'></input><input style='width:20px' type='text' name='sep_w3' id='sep_w3'></input><input style='width:20px' type='text' name='sep_w4' id='sep_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='okt_w1' id='okt_w1'></input><input style='width:20px' type='text' name='okt_w2' id='okt_w2'></input><input style='width:20px' type='text' name='okt_w3' id='okt_w3'></input><input style='width:20px' type='text' name='okt_w4' id='okt_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='nov_w1' id='nov_w1'></input><input style='width:20px' type='text' name='nov_w2' id='nov_w2'></input><input style='width:20px' type='text' name='nov_w3' id='nov_w3'></input><input style='width:20px' type='text' name='nov_w4' id='nov_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='des_w1' id='des_w1'></input><input style='width:20px' type='text' name='des_w2' id='des_w2'></input><input style='width:20px' type='text' name='des_w3' id='des_w3'></input><input style='width:20px' type='text' name='des_w4' id='des_w4'></input></td></tr>";
			tableBody1 = $('#tbody_persiapan');
			tableBody1.append(markup);
			lineNo++;
		});
	}

	//function untuk add row di tahap pelaksanaan
	function pelaksanaan() {
		$('#btn_add_pelaksanaan').click(function() {
			markup2 = "<tr id='tr_pelaksanaan'><td><input style='width:40px' type='text' readonly id='kode_perencanaan' name='kode_perencanaan' value='2.1." + lineNo2 + "'></input><button class='btnDelete btn btn-danger' onclick='del_pelaksanaan();'>x</button></td><td colspan='2'><input style='width:70px' type='text' name='indikator' id='indikator' placeholder='(isikan text disini)'></input></td><td><input style='width:20px' type='text' name='kalkulasi' id='kalkulasi' value='0' readonly></input></td><td colspan='4'><input style='width:20px' type='text' name='jan_w1' id='jan_w1'></input><input style='width:20px' type='text' name='jan_w2' id='jan_w2'></input><input style='width:20px' type='text' name='jan_w3' id='jan_w3'></input><input style='width:20px' type='text' name='jan_w4' id='jan_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='feb_w1' id='feb_w1'></input><input style='width:20px' type='text' name='feb_w2' id='feb_w2'></input><input style='width:20px' type='text' name='feb_w3' id='feb_w3'></input><input style='width:20px' type='text' name='feb_w4' id='feb_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='mar_w1' id='mar_w1'></input><input style='width:20px' type='text' name='mar_w2' id='mar_w2'></input><input style='width:20px' type='text' name='mar_w3' id='mar_w3'></input><input style='width:20px' type='text' name='mar_w4' id='mar_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='apr_w1' id='apr_w1'></input><input style='width:20px' type='text' name='apr_w2' id='apr_w2'></input><input style='width:20px' type='text' name='apr_w3' id='apr_w3'></input><input style='width:20px' type='text' name='apr_w4' id='apr_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='mei_w1' id='mei_w1'></input><input style='width:20px' type='text' name='mei_w2' id='mei_w2'></input><input style='width:20px' type='text' name='mei_w3' id='mei_w3'></input><input style='width:20px' type='text' name='mei_w4' id='mei_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='jun_w1' id='jun_w1'></input><input style='width:20px' type='text' name='jun_w2' id='jun_w2'></input><input style='width:20px' type='text' name='jun_w3' id='jun_w3'></input><input style='width:20px' type='text' name='jun_w4' id='jun_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='jul_w1' id='jul_w1'></input><input style='width:20px' type='text' name='jul_w2' id='jul_w2'></input><input style='width:20px' type='text' name='jul_w3' id='jul_w3'></input><input style='width:20px' type='text' name='jul_w4' id='jul_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='agt_w1' id='agt_w1'></input><input style='width:20px' type='text' name='agt_w2' id='agt_w2'></input><input style='width:20px' type='text' name='agt_w3' id='agt_w3'></input><input style='width:20px' type='text' name='agt_w4' id='agt_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='sep_w1' id='sep_w1'></input><input style='width:20px' type='text' name='sep_w2' id='sep_w2'></input><input style='width:20px' type='text' name='sep_w3' id='sep_w3'></input><input style='width:20px' type='text' name='sep_w4' id='sep_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='okt_w1' id='okt_w1'></input><input style='width:20px' type='text' name='okt_w2' id='okt_w2'></input><input style='width:20px' type='text' name='okt_w3' id='okt_w3'></input><input style='width:20px' type='text' name='okt_w4' id='okt_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='nov_w1' id='nov_w1'></input><input style='width:20px' type='text' name='nov_w2' id='nov_w2'></input><input style='width:20px' type='text' name='nov_w3' id='nov_w3'></input><input style='width:20px' type='text' name='nov_w4' id='nov_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='des_w1' id='des_w1'></input><input style='width:20px' type='text' name='des_w2' id='des_w2'></input><input style='width:20px' type='text' name='des_w3' id='des_w3'></input><input style='width:20px' type='text' name='des_w4' id='des_w4'></input></td></tr>";
			tableBody2 = $('#tbody_pelaksanaan');
			tableBody2.append(markup2);
			lineNo2++;
		});
	}

	//function untuk add row di tahap pelaporan
	function pelaporan() {
		$('#btn_add_pelaporan').click(function() {
			markup3 = "<tr id='tr_pelaporan'><td><input style='width:40px' type='text' readonly id='kode_perencanaan' name='kode_perencanaan' value='3.1." + lineNo3 + "'></input><button class='btnDelete btn btn-danger' onclick='del_pelaporan();'>x</button></td><td colspan='2'><input style='width:70px' type='text' name='indikator' id='indikator' placeholder='(isikan text disini)'></input></td><td><input style='width:20px' type='text' name='kalkulasi' id='kalkulasi' value='0' readonly></input></td><td colspan='4'><input style='width:20px' type='text' name='jan_w1' id='jan_w1'></input><input style='width:20px' type='text' name='jan_w2' id='jan_w2'></input><input style='width:20px' type='text' name='jan_w3' id='jan_w3'></input><input style='width:20px' type='text' name='jan_w4' id='jan_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='feb_w1' id='feb_w1'></input><input style='width:20px' type='text' name='feb_w2' id='feb_w2'></input><input style='width:20px' type='text' name='feb_w3' id='feb_w3'></input><input style='width:20px' type='text' name='feb_w4' id='feb_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='mar_w1' id='mar_w1'></input><input style='width:20px' type='text' name='mar_w2' id='mar_w2'></input><input style='width:20px' type='text' name='mar_w3' id='mar_w3'></input><input style='width:20px' type='text' name='mar_w4' id='mar_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='apr_w1' id='apr_w1'></input><input style='width:20px' type='text' name='apr_w2' id='apr_w2'></input><input style='width:20px' type='text' name='apr_w3' id='apr_w3'></input><input style='width:20px' type='text' name='apr_w4' id='apr_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='mei_w1' id='mei_w1'></input><input style='width:20px' type='text' name='mei_w2' id='mei_w2'></input><input style='width:20px' type='text' name='mei_w3' id='mei_w3'></input><input style='width:20px' type='text' name='mei_w4' id='mei_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='jun_w1' id='jun_w1'></input><input style='width:20px' type='text' name='jun_w2' id='jun_w2'></input><input style='width:20px' type='text' name='jun_w3' id='jun_w3'></input><input style='width:20px' type='text' name='jun_w4' id='jun_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='jul_w1' id='jul_w1'></input><input style='width:20px' type='text' name='jul_w2' id='jul_w2'></input><input style='width:20px' type='text' name='jul_w3' id='jul_w3'></input><input style='width:20px' type='text' name='jul_w4' id='jul_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='agt_w1' id='agt_w1'></input><input style='width:20px' type='text' name='agt_w2' id='agt_w2'></input><input style='width:20px' type='text' name='agt_w3' id='agt_w3'></input><input style='width:20px' type='text' name='agt_w4' id='agt_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='sep_w1' id='sep_w1'></input><input style='width:20px' type='text' name='sep_w2' id='sep_w2'></input><input style='width:20px' type='text' name='sep_w3' id='sep_w3'></input><input style='width:20px' type='text' name='sep_w4' id='sep_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='okt_w1' id='okt_w1'></input><input style='width:20px' type='text' name='okt_w2' id='okt_w2'></input><input style='width:20px' type='text' name='okt_w3' id='okt_w3'></input><input style='width:20px' type='text' name='okt_w4' id='okt_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='nov_w1' id='nov_w1'></input><input style='width:20px' type='text' name='nov_w2' id='nov_w2'></input><input style='width:20px' type='text' name='nov_w3' id='nov_w3'></input><input style='width:20px' type='text' name='nov_w4' id='nov_w4'></input></td><td colspan='4'><input style='width:20px' type='text' name='des_w1' id='des_w1'></input><input style='width:20px' type='text' name='des_w2' id='des_w2'></input><input style='width:20px' type='text' name='des_w3' id='des_w3'></input><input style='width:20px' type='text' name='des_w4' id='des_w4'></input></td></tr>";
			tableBody3 = $('#tbody_pelaporan');
			tableBody3.append(markup3);
			lineNo3++;
		});
	}


	//function untuk delete row di tahap persiapan
	function del_persiapan() {
		$("#myTable").on('click', '.btnDelete', function() {
			$(this).closest('tr').remove();
		});
	}

	//function untuk delete row di tahap pelaksanaan
	function del_pelaksanaan() {
		$("#myTable").on('click', '.btnDelete', function() {
			$(this).closest('tr').remove();
		});
	}

	//function untuk delete row di tahap pelaporan
	function del_pelaporan() {
		$("#myTable").on('click', '.btnDelete', function() {
			$(this).closest('tr').remove();
		});
	}
</script>