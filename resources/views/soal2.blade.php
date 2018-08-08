<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>

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
				<h1> Sertifikasi SKKNI</h1>
					<div align="right">
						<a href="{{url('soal2_1')}}">
							<button type="button" class="btn btn-primary">
                                Lihat Data
                           	</button>
                        </a>
					</div>
					<hr> 
					<br>
					@if ($errors->any())
	                  <div class="alert alert-danger">
	                    <span class='fa fa-danger'></span>
	                      <h2>Whoops!</h2>
	                      <ul>
	                          @foreach ($errors->all() as $error)
	                              <li>{{ $error }}</li>
	                          @endforeach
	                      </ul>
	                  </div>
	              	@endif

				<div class="well">
					<form action="simpan" method="POST">
					  <div class="form-group">
					    <input type="text" name="nama" class="form-control" placeholder="Nama" >
					    @if ($errors->has('nama'))
	                        <span class="invalid-feedback">
	                            <strong>{{ $errors->first('nama') }}</strong>
	                        </span>
                    	@endif
					  </div>
					  <div class="form-group">
					    <input type="text" name="nik" class="form-control" placeholder="NIK">
					  </div>
					  <div class="form-group">
					    <input type="text" name="no_hp" class="form-control" placeholder="No.HP">
					  </div>
					  <div class="form-group">
					    <input type="text" name="email" class="form-control" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <input type="text" name="skema" class="form-control" placeholder="Skema">
					  </div>
					  <div class="form-group">
					    <input type="text" name="sertifikasi" class="form-control" placeholder="Sertifikasi">
					  </div>
					  <div class="form-group">
					    <input type="text" name="tempat_uji_kompetensi" class="form-control" placeholder="Tempat Uji Kompetensi">
					  </div>
					  <div class="form-group">
					    <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi">
					  </div>
					  <div class="form-group">
					  	<label>Tanggal Terbit Sertifikasi</label>
					    <input type="date" name="tgl_terbit_sertifikasi" class="form-control" placeholder="Tanggal terbit sertifikat">
					  </div>
					  <div class="form-group">
					  	<label>Tanggal Lahir</label>
					    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
					  </div>
					  <div class="form-group">
					    <input type="text" name="organisasi" class="form-control" placeholder="Organisasi">
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