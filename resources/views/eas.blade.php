@extends('layout.ceria')
@section('title','5026201137 - Laura Wilhelmina Theresia')

@section('konten')
<h4 style="margin-left: 30px ; padding-top: 10px">Jumlah Pengunjung</h4>
<br>
<div class="card-body">
    <table class="table">
        <tr>
            <th scope="col">Anda pengunjung ke:</th>
            <th scope="col">{{ $pagecounter->total() }}</th>
      </tr>
    </table>
</div>
@endsection
