@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
		<div class="container">
			<div>
        	    <a href="{{ route('salon')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Regresar</span></h3></a>
	    	</div>
			<div class="col-md-12">
				<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Edita el <span> salon</span>
				</h2>
			</div>
			<div class="align-self-xl-center" data-wow-offset="50" data-wow-delay="0.9s">
                <form action="{{ route('salvars', ['id' => $salon->id]) }}" method="POST" name="salvars">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
					<label>NOMBRE</label>
					<input type="text" name="nombre" value="{{ $salon->nombre }}" class="form-control" placeholder="Escriba el nombre">
					<input type="submit" class="form-control" value="GUARDAR">
				</form>
			</div>	
		</div>
    </section>
	@endsection