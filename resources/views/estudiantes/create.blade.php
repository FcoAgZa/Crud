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
                    <h1 class="Titulos">Registrar un Alumno</h1>

                    <form action="{{ url('estudiantes') }}" method="POST">

                        {{ csrf_field() }}

                        <label for="Nombre">{{'Nombre'}}</label> &nbsp &nbsp
                        <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre">
                        <br>

                        <label for="Apellido aterno">{{'Apellido Paterno'}}</label>
                        <input type="text" name="apellido_p" id="apellido_p" value="" placeholder="Apellido Paterno">
                        <br>

                        <label for="Apellido Materno">{{'Apellido Materno'}}</label>
                        <input type="text" name="apellido_m" id="apellido_m" value="" placeholder="Apellido Materno">
                        <br>

                        <label for="correo">{{'Correo'}}</label>
                        <input type="text" name="correo" id="correo" value="" placeholder="Correo">
                        <br>

                        <label for="Edad">{{'Edad'}}</label>
                        <input type="text" name="edad" id="edad" value="" placeholder="Edad">
                        <br>

                        <label for="Telefono">{{'Telefono'}}</label>
                        <input type="text" name="telefono" id="telefono" value="" placeholder="Telefono">
                        <br>


                        <label for="Grupo">{{'Grupo'}}</label>
                        <!--
                        <input type="text" name="grupo" id="grupo" value="" placeholder="Grupo"> !-->
                        <select name="grupo" id="grupo">
                            
                            <option value="14">M001</option>
                            <option value="15">M002</option>
                            <option value="16">M003</option>
                            <option value="17">V001</option>
                            <option value="18">V002</option>
                            <option value="19">V003</option>

                        </select>
                        <br>
                        <input type="submit" value="Enviar">

                    </form>

                    <div>
						<ul class="menu">
							<li class="menu">
                                <a href="{{ url('estudiantes') }}">Ir al Inicio</a>
							</li>

						</ul>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>