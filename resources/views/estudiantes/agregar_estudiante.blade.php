@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
		<div class="container">
			<div>
        	    <a href="{{ route('estudiante')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Regresar</span></h3></a>
	    	</div>
			<div class="col-md-12">
				<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Agregar<span> estudiante</span>
				</h2>
			</div>
			<div class="align-self-xl-center" data-wow-offset="50" data-wow-delay="0.9s">
				<form action="{{ route('guardare') }}" method="POST" name="guardare">
				{{ csrf_field() }}
					<label>MATRICULA</label>
					<input type="text" name="matricula" value="{{ old('matricula') }}" class="form-control">
					<p>@if($errors->first('matricula')) <i class="form-control">{{$errors->first('matricula')}}</i>@endif</p>
					<label>NOMBRE</label>
					<input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control">
					<p>@if($errors->first('nombre')) <i class="form-control">{{$errors->first('nombre')}}</i>@endif</p>
                    <label>APELLIDO PATERNO</label>
					<input type="text" name="app" value="{{ old('app') }}" class="form-control">
                    <p>@if($errors->first('app')) <i class="form-control">{{$errors->first('app')}}</i>@endif</p>
                    <label>APELLIDO MATERNO</label>
					<input type="text" name="apm" value="{{ old('apm') }}" class="form-control">
					<p>@if($errors->first('apm')) <i class="form-control">{{$errors->first('apm')}}</i>@endif</p>
                    <label>SALON</label> 
					<select name="salon_id" class="form-control" multiple aria-label="multiple select example">
						<option selected>Eliga el salon</option>
						@foreach($salones as $salon) 
						<option value="{{$salon->id}}">{{$salon->nombre}}</option>
						@endforeach
					</select>
					<p>@if($errors->first('salon_id')) <i class="form-control">{{$errors->first('salon_id')}}</i>@endif</p>
                    <label>MATERIA:</label>
					<select name="materia_id" class="form-control" multiple aria-label="multiple select example">
						<option selected>Eliga la materia</option>
						@foreach($materias as $materia) 
						<option name="materia_id" value="{{$materia->id}}">{{$materia->nombre}}</option>
						@endforeach
					</select>
					<p>@if($errors->first('materia_id')) <i class="form-control">{{$errors->first('materia_id')}}</i>@endif</p>
					<input type="submit" class="form-control" value="GUARDAR">
				</form>
			</div>	
		</div>
    </section>
	@endsection