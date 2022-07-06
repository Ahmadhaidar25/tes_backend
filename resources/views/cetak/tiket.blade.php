<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h3>Tiket Konser</h3>
		
	</center>
	<script>window.print();</script>
 <div class="container">

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td>{{$cetak->id }}</td>
				<td>{{$cetak->user->nama_lengkap}}</td>
				<td>{{$cetak->tanggal}}</td>
				
			</tr>
			
		</tbody>
	</table>
 </div>
</body>
</html>










