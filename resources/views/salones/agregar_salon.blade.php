@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
		<div class="container">
			<div>
        	    <a href="{{ route('salon')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Regresar</span></h3></a>
	    	</div>
			<div class="col-md-12">
				<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Agregar<span> salon</span>
				</h2>
			</div>
			<div class="align-self-xl-center" data-wow-offset="50" data-wow-delay="0.9s">
				<form action="{{ route('guardars') }}" method="POST" name="guardarp" enctype="multipart/form-data">
				{{ csrf_field() }}
					<label>NOMBRE</label>
					<input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Escribe el nombre del Salón">
					<p>@if($errors->first('nombre')) <i class="form-control">{{$errors->first('nombre')}}</i>@endif</p>
					<input type="submit" class="form-control" value="GUARDAR">
				</form>
			</div>
		</div>
    </section>
	@endsection