<!DOCTYPE html>
<html>
	<head>
        <title> Inicio || Bienvenido </title>
        <link href="{{ asset('css/Estilo.css') }}" rel="stylesheet">
		<link href="{{
            asset('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&family=Source+Code+Pro:wght@900&family=Ubuntu&display=swap ') 
            }}" rel="stylesheet">
	</head>
	<body>
        <div class="outer">
			<div class="middle">
				<div class="inner">          
                    <h1 class="Titulos">Bienvenido, Sistema CRUD</h1>
                    <table class="container">
                        <thead>
                            <tr>
                                <th><h1>Nombre</h1></th>
                                <th><h1>Apellido Paterno</h1></th>
                                <th><h1>Apellido Materno</h1></th>
                                <th><h1>Correo</h1></th>
                                <th><h1>Edad</h1></th>
                                <th><h1>Telefono</h1></th>
                                <th><h1>Grupo</h1></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($estudiantes as $estudiante)
                            <tr>
                                <td>{{$estudiante->nombre}}</td>
                                <td>{{$estudiante->apellido_p}}</td>
                                <td>{{$estudiante->apellido_m}}</td>
                                <td>{{$estudiante->correo}}</td>
                                <td>{{$estudiante->edad}}</td>
                                <td>{{$estudiante->telefono}}</td>
                                <td>{{$estudiante->grupo}}</td>
                                <td>
                                    <a href="{{ url('/estudiantes/'.$estudiante->id_estudiante.'/edit/') }}">
                                        Editar
                                    </a>
                                    <form method="post" action="{{ url('/estudiantes/'.$estudiante->id_estudiante) }}">
                                        {{ csrf_field() }}
                                        {{ method_field ('DELETE') }}
                                        <button type="submit"  onclick="return confirm('Borrar?');"
                                        style="
                                            background: none!important;
                                            border: none;
                                            padding: 0!important;
                                            color: #069;
                                            text-decoration: underline;
                                            cursor: pointer; ">
                                        Borrar </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>
						<ul class="menu">
							<li class="menu">
                                <a href="{{ url('estudiantes/create') }}">Registro de Alumnos</a>
							</li>

						</ul>
                    </div>
                    
                </div>
            </div>
        </div>

    </body>
</html>