<?php
require_once("seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <script type="text/javascript" src="bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/lista_medico1">Citas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/carreras1">Carreras</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="{{route('usuario.logout')}}" id="logout" class="form-control me-2 btn-outline-danger">Cerrar Sesión</a>
      </form>
    </div>
  </div>
</nav><br><br>
    <div align="center">
    <h2>Alumnos</h2>
    <table align="center">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Carrera</th>
                <th>Grado y Grupo</th>
                <th>Tutor</th>
                <th>Acciones</th>
            </tr>
        </thead>
            @foreach($alumnos as $fila)
        <tbody>
            <tr>
                <td>{{$fila->nombre_p}} {{$fila->a_paterno_p}} {{$fila->a_materno_p}}</td>
                <td>{{$fila->nombre_carrera}}</td>
                <td>{{$fila->nombre_grupo}} - {{$fila->grado}}{{$fila->grupo}} Cuatrimestre</td>
                <td>{{$fila->nombre_tutor}}</td>
                <td><a href="{{route('alumno.reporte1', $fila->id)}}"><button class="btn btn-outline-primary btn-block" id="btn1">Ver reporte</button></a><br><br>
                <a href="{{route('alumno.nuevoReporte1', $fila->id)}}"><button class="btn btn-outline-primary btn-block" id="btn1" style="height: 42px; font-size: 15px">Nuevo reporte</button></a><br><br>
                <a href="{{route('alumno.nuevaCita1', $fila->id)}}"><button class="btn btn-outline-success btn-block" id="btn1">Añadir cita</button></a><br><br>
                </td>
            </tr>
        </tbody>
            @endforeach
    </table><br><br>
</div>
</body>
</html>