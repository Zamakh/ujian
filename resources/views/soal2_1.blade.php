<!DOCTYPE html>
<html>
<head>
	<title>Form Tampil Data</title>

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
		<div class="row">
			<div class="col-md-10">
				<h1> Data Peserta Sertifikasi SKKNI</h1>
			</div>
			<div class="col-md-2" align="right">
				<a href="{{url('soal2')}}">
					<button type="button" class="btn btn-primary">
                        Add Peserta
                    </button>
                </a>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<td>
							NAMA
						</td>
						<td>
							NIK
						</td>
						<td>
							No.HP
						</td>
						<td>
							Email
						</td>
						<td>
							Skema
						</td>
						<td>
							Sertifikasi
						</td>
						<td>
							Tempat Uji <br>
							Kompetensi
						</td>
						<td>
							Rekomendasi
						</td>
						<td>
							Tanggal Terbit <br>
							Sertifikat
						</td>
						<td>
							Tanggal Lahir
						</td>
						<td>
							Organisasi
						</td>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $tampil_data => $show_data)
					<tr>
						<td>
							{{$show_data->nama}}
						</td>
						<td>
							{{$show_data->NIK}}
						</td>
						<td>
							{{$show_data->no_hp}}
						</td>
						<td>
							{{$show_data->email}}
						</td>
						<td>
							{{$show_data->skema}}
						</td>
						<td>
							{{$show_data->sertifikasi}}
						</td>
						<td>
							{{$show_data->tempat_uji_kompetensi}}
						</td>
						<td>
							{{$show_data->rekomendasi}}
						</td>
						<td>
							{{$show_data->tgl_terbit_sertifikasi}}
						</td>
						<td>
							{{$show_data->tgl_lahir}}
						</td>
						<td>
							{{$show_data->organisasi}}
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>