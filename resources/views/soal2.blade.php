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
	                  <div class="alert alert-info">
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
					    <input type="text" name="nama" class="form-control" placeholder="Nama"
					      value="{{Request::old('nama')}}" >
					    
					  </div>
					  <div class="form-group">
					    <input type="text" name="nik" class="form-control" placeholder="NIK"
					    value="{{Request::old('nik')}}">
					  </div>
					  <div class="form-group">
					    <input type="text" name="no_hp" class="form-control" placeholder="No.HP"
					    value="{{Request::old('no_hp')}}">
					  </div>
					  <div class="form-group">
					    <input type="text" name="email" class="form-control" placeholder="Email"
					    value="{{Request::old('email')}}">
					  </div>
					  <div class="form-group">
					    <input type="text" name="skema" class="form-control" placeholder="Skema" 
					    value="{{Request::old('skema')}}">
					  </div>
					  <div class="form-group">
					    <input type="text" name="sertifikasi" class="form-control" placeholder="Sertifikasi"
					    value="{{Request::old('sertifikasi')}}">
					  </div>
					  <div class="form-group">
					    <input type="text" name="tempat_uji_kompetensi" class="form-control" placeholder="Tempat Uji Kompetensi"
					    value="{{Request::old('tempat_uji_kompetensi')}}">
					  </div>
					  <div class="form-group">
					    <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi"
					    value="{{Request::old('rekomendasi')}}">
					  </div>
					  <div class="form-group">
					  	<label>Tanggal Terbit Sertifikasi</label>
					    <input type="date" name="tgl_terbit_sertifikasi" class="form-control" 
					    placeholder="Tanggal terbit sertifikat"
					    value="{{Request::old('tgl_terbit_sertifikasi')}}">
					  </div>
					  <div class="form-group">
					  	<label>Tanggal Lahir</label>
					    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir"
					    value="{{Request::old('tgl_lahir')}}">
					  </div>
					  <div class="form-group">
					    <input type="text" name="organisasi" class="form-control" placeholder="Organisasi"
					    value="{{Request::old('organisasi')}}">
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