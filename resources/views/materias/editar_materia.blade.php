@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
		<div class="container">
			<div>
        	    <a href="{{ route('materia')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Regresar</span></h3></a>
	    	</div>
			<div class="col-md-12">
				<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Edita la <span> materia</span>
				</h2>
			</div>
			<div class="align-self-xl-center" data-wow-offset="50" data-wow-delay="0.9s">
                <form action="{{ route('salvarm', ['id' => $materia->id]) }}" method="POST" name="salvarm">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
					<label>NOMBRE</label>
					<input type="text" name="nombre" value="{{ $materia->nombre }}" class="form-control" placeholder="Escriba el nombre">
					<input type="submit" class="form-control" value="GUARDAR">
				</form>
			</div>	
		</div>
    </section>
	@endsection