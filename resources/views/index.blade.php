@extends('master')
@section('titulo', 'Bienvenidos Febrero-Julio 24')
@section('contenido')
@include('secciones.banner')
<div class="container text-center">
  <div class="row">
    <div class="col">
    ¿Cómo hacer un div en HTML?<br>
     Para crear un elemento div, debes usar una etiqueta de apertura y cierre. 
     Puedes agregar los elementos que deseas agrupar dentro de estas etiquetas.
    </div>
    <div class="col">
      ¿Qué es y para qué sirve MySQL?<br>
      MySQL es un sistema de bases de datos de Oracle que se utiliza en todo el mundo para gestionar bases de 
      datos. Se basa en el álgebra relacional y se utiliza principalmente para el almacenamiento de datos de 
      diversos servicios web.
    </div>
    <div class="col">
    ¿Qué es y para qué sirve Laravel?<br>
    Si nos ceñimos a la definición estándar, Laravel es un framework de PHP y es utilizado para 
    desarrollar aplicaciones web. PHP es el lenguaje de programación más utilizado en mundo para 
    desarrollar sitios web, aplicaciones web y los populares CMS, como WordPress o Joomla.
    </div>
  </div>
</div>

@endsection
