@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
                <div>
                    <a href="{{ route('nuevoe')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Agregar Estudiante</span></h3></a>
                </div>
                @if (session('info'))
                    <div class="alert alert-success">
                        <strong>{{session('info')}}</strong>
                    </div>
                @endif
	    		<div class="col-md-12">
	    			<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>ESTUDIANTES</span></h2>
                </div>
                {{ csrf_field() }}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border: 2px solid #28a7e9">Matricula</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Nombre</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Salon</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Acciones</th>
                        </tr>
                    </thead>
                    @foreach($estudiantes as $estudiante)
                    <tbody>
                        <tr>
                            <th scope="row" style="border: 2px solid #28a7e9"><center><h3>{{$estudiante->matricula}}</h3></center></th>
                            <td style="border: 2px solid #28a7e9"><center><h3>{{$estudiante->app}} {{$estudiante->apm }} {{$estudiante->nombre}}</h3></center></td>
                            <td style="border: 2px solid #28a7e9">
                                @foreach($salones as $salon)
                                    <center>
                                        <h3>
                                            @if($estudiante->salon_id == $salon->id)
                                                {{$salon->nombre}}
                                            @endif
                                        </h3>
                                    </center>
                                @endforeach
                            </td>
                            <td style="border: 2px solid #28a7e9"><h2>
                                <form action="{{ route('detallee', ['id' => $estudiante->id]) }}" method="GET" name="detalle">
					                <input type="submit" class="form-control" value="Detalle">
				                </form>
                                <form action="{{ route('editare', ['id' => $estudiante->id]) }}" method="GET" name="editar">
					                <input type="submit" class="form-control" value="Editar">
				                </form>
                                <form action="{{ route('borrare', ['id' => $estudiante->id]) }}" method="GET" name="borrar">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
					                <input type="submit" class="form-control" value="Borrar">
				                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
	    	</div>
	    </div>
	</section>
    @endsection