@extends('layout.ceria') 
@section('Konten')

	<h3>Data Pensil</h3>
 
	<a class="btn btn-warning" href="/pensil/tambah"> + Tambah Data Pensil</a>
	
	<br/>
	<br/>
	
	<p>Cari Pensil:</p>
	<form action="/pensil/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Pensil" value="{{ old('cari') }}">
		<input class="btn btn-warning" type="submit" value="CARI">
	</form>

	<table class="table table-hover">
		<tr class="table-warning">
			<th>Nomor</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($pensil as $p)
		<tr>
		<div class="table-secondary">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->merkpensil }}</td>
			<td>{{ $p->stockpensil }}</td>
			<td>{{ $p->tersedia }}</td>
			</div>
			<td>
                <a href="/pensil/detail/{{ $p->kodepensil }}">Detail</a>
				|
				<a href="/pensil/edit/{{ $p->kodepensil }}">Edit</a>
				|
				<a href="/pensil/hapus/{{ $p->kodepensil }}">Hapus</a>
			</td>
		</tr>

		@endforeach
	</table>		 
       {{ $pensil->links() }}

 @endsection
 