<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><a href="?page=RSView"> Data Rumah Sakit</a></h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										
									</div>
								</div>

									<?php 
									include '../db/koneksi.php';
									$id = $_GET['id'];
									$data = mysqli_query($koneksi,"select * from tb_rs where id_rs='$id'");
									while($d = mysqli_fetch_array($data)){
									?>

								<form method="post" action="?page=rs_edit" class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ID Rumah Sakit</label>
												<div class="col-md-3">
													<input disabled="disabled" type="text" name="a" class="form-control" id="inputDefault" value="<?php echo $d['id_rs']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama Rumah Sakit</label>
												<div class="col-md-3">
													<input type="text" name="b" class="form-control" id="inputDefault" value="<?php echo $d['nama_rs']; ?>"> 
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Alamat Puskesmas</label>
												<div class="col-md-6">
													<input type="text" name="c" class="form-control" id="inputDefault" value="<?php echo $d['alamat_rs']; ?>"> 
												</div>

											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Telepon Puskesmas</label>
												<div class="col-md-3">
													<input type="text" name="d" class="form-control" id="inputDefault" value="<?php echo $d['telp_rs']; ?>">
												</div>
											</div>

											<div class="col-sm-9 text-right">
											<button type="submit" class="btn btn-primary hidden-xs">Simpan</button>
											</div>
								</form>
									
									<?php 
									}
									?>
								
							</div>
						</section>
					<!-- end: page -->