<!DOCTYPE html>
<html>
	<head>
        <title> Registro</title>
        <link href="{{ asset('css/Estilo.css') }}" rel="stylesheet">
		<link href="{{
            asset('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&family=Source+Code+Pro:wght@900&family=Ubuntu&display=swap ') 
            }}" rel="stylesheet">
	</head>
	<body>
        <div class="outer">
			<div class="middle">
				<div class="inner">          
                    <h1 class="Titulos">Editar un Alumno</h1>

                    <form action="{{ url('/estudiantes/'.$estudiante->id_estudiante) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}


                        <label for="Nombre">{{'Nombre'}}</label>
                        <input type="text" name="nombre" id="nombre" value="{{ $estudiante->nombre }}" placeholder="Nombre">
                        <br>

                        <label for="Apellido aterno">{{'Apellido Paterno'}}</label>
                        <input type="text" name="apellido_p" id="apellido_p" value="{{ $estudiante->apellido_p }}" placeholder="Apellido Paterno">
                        <br>

                        <label for="Apellido Materno">{{'Apellido Materno'}}</label>
                        <input type="text" name="apellido_m" id="apellido_m" value="{{ $estudiante->apellido_m }}" placeholder="Apellido Materno">
                        <br>

                        <label for="correo">{{'Correo'}}</label>
                        <input type="text" name="correo" id="correo" value="{{ $estudiante->correo }}" placeholder="Correo">
                        <br>

                        <label for="Edad">{{'Edad'}}</label>
                        <input type="text" name="edad" id="edad" value="{{ $estudiante->edad }}" placeholder="Edad">
                        <br>

                        <label for="Telefono">{{'Telefono'}}</label>
                        <input type="text" name="telefono" id="telefono" value="{{ $estudiante->telefono }}" placeholder="Telefono">
                        <br>


                        <label for="Grupo">{{'Grupo'}}</label>
                        <input type="text" name="grupo" id="grupo" value="{{ $estudiante->grupo }}" placeholder="Grupo">
                        <br>
                        <input type="submit" value="Enviar">

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>