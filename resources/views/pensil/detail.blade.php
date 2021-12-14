@extends('layout.ceria') 
@section('Konten')
	<h3>Keterangan Pensil</h3>

	<a href="/pensil"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pensil as $p)
	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/pensil" method="Get">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Detail Data Mobil
                    </div>
                    <div class="card-body">
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->kodepensil }}"> <br/>
                            <label for="merk" class="col-sm-3 col-form-label col-form-label-lg">Merk
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <label type="text" class="form-control form-control-lg" id="merk"
                                    placeholder="" name="merk" required="required" value="{{ $p->merkpensil }}">{{ $p->merkpensil }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <label type="number" class="form-control form-control-lg" id="stock"
                                    placeholder="" name="stock" value="{{ $p->stockpensil }}">{{ $p->stockpensil }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3 justify-content-around">
                            <label class="col-lg-3 form-label">
                                Tersedia 
                            </label>
                            <span class="col-sm-1">:</span>
                            <div class="col-lg-8">
                                <label type="text" name="tersedia" class="form-control" >{{$p->tersedia}}</label>
                            </div>
                        

                    </div>
                </form>
            </div>
        </div>
	@endforeach
		

@endsection


