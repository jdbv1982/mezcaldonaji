@extends('web/menu')

@section('sub-content')
    <div class="contenido">
		<div class="contacto">
			<div class="contacto-img">
				{{ HTML::image('/images/general/contacto.jpg', null, ["width"=>"170px", "height"=>"152px"]) }}
			</div>
			<div class="contacto-datos">
				<legend>Contacto</legend>

				<p><strong>Número:</strong> (951) 5142 191</p>

				<p><strong>Direccion:</strong><br>
					Reforma 206 Interior 3, Col. Centro, C.P. 68000, Oaxaca de Juárez, Oaxaca
				</p>

				<p><strong>Correo:</strong><br>
					ventas@tradicionchagoya.com <br>
					contacto@tradicionchagoya.com <br>
					produccion@tradicionchagoya.com

				</p>


			</div>
		</div>
		<div class="contacto-map">
			{{ HTML::image('/images/general/contacto2.jpg', null, ["width"=>"754px", "height"=>"522px"]) }}
		</div>
    </div>
@stop
