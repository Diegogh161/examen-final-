@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
                <div>
                <a href="{{ route('salon')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Regresar</span></h3></a>
	    		</div>
                <div class="col-md-12">
			    	<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Salon </span>Detalle
			    	</h2>
			    </div>
                <br>
                <table class="table">
                    <tbody  style="border: 2px solid #28a7e9">
                        <tr>
                            <td class="col-md-5">
                            <h4><b>ID: </b>{{($salon->id)}}</h4><br>
                            <h4><b>Nombre: </b>{{($salon->nombre)}}</h4><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
	    	</div>
	    </div>
        <br><br><br><br><br>
    </section>
    @endsection