<!DOCTYPE html>
<html>
<head>
	<title>Soal No.2</title>

	<link rel="stylesheet" type='text/css' href="css/custom.css">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/form-elements.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- javascript -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
	<div class="container">
		<dir class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="well">
					<form action="simpan" method="POST">
					  <div class="form-group">
					    <input type="text" name="nama" class="form-control" placeholder="Nama" >
					  </div>
					  <div class="form-group">
					    <input type="text" name="nik" class="form-control" placeholder="NIK">
					  </div>
					  <div class="form-group">
					    <input type="text" name="no_hp" class="form-control" placeholder="No.HP" value="no_hp">
					  </div>
					  <div class="form-group">
					    <input type="text" name="email" class="form-control" placeholder="Email" value="email">
					  </div>
					  <div class="form-group">
					    <input type="text" name="skema" class="form-control" placeholder="Skema" value="skema">
					  </div>
					  <div class="form-group">
					    <input type="text" name="sertifikasi" class="form-control" placeholder="Sertifikasi" value="sertifikasi">
					  </div>
					  <div class="form-group">
					    <input type="text" name="tempat_uji_kompetensi" class="form-control" placeholder="Tempat Uji Kompetensi" value="tempat_uji_kompetensi">
					  </div>
					  <div class="form-group">
					    <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi" value="rekomendasi">
					  </div>
					  <div class="form-group">
					    <input type="date" name="tgl_terbit_sertifikat" class="form-control" placeholder="Tanggal terbit sertifikat" value="tgl_terbit_sertifikasi">
					  </div>
					  <div class="form-group">
					    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="tgl_lahir">
					  </div>
					  <div class="form-group">
					    <input type="text" name="organisasi" class="form-control" placeholder="Organisasi" value="organisasi">
					  </div>

					  <input type="hidden" name="_token" value="{{csrf_token()}}">

					  <div align="right"> 
					  		<button type="submit" class="btn btn-primary" name="submit">
					  			<b>Confirm</b>
					  		</button>
					  </div>
					</form>
				</div>
			</div>
		</dir>
	</div>
</body>
</html>