@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
                <div>
                    <a href="{{ route('nuevom')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Agregar Materia</span></h3></a>
                </div>
                @if (session('info'))
                    <div class="alert alert-success">
                        <strong>{{session('info')}}</strong>
                    </div>
                @endif
	    		<div class="col-md-12">
	    			<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>MATERIAS</span></h2>
                </div>
                {{ csrf_field() }}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border: 2px solid #28a7e9">ID</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Nombre</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Acciones</th>
                        </tr>
                    </thead>
                    @foreach($materias as $materia)
                    <tbody>
                        <tr>
                            <th scope="row" style="border: 2px solid #28a7e9"><h3>{{$materia->id}}</h3></th>
                            <td style="border: 2px solid #28a7e9"><br><br><center><h2>{{$materia->nombre}}</center></td>
                            <td style="border: 2px solid #28a7e9"><h2>
                                <form action="{{ route('detallem', ['id' => $materia->id]) }}" method="GET" name="detalle">
					                <input type="submit" class="form-control" value="Detalle">
				                </form>
                                <form action="{{ route('editarm', ['id' => $materia->id]) }}" method="GET" name="editar">
					                <input type="submit" class="form-control" value="Editar">
				                </form>
                                <form action="{{ route('borrarm', ['id' => $materia->id]) }}" method="GET" name="borrar">
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