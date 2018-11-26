{{--Mi comentario de HTML command+u--}}
@include('contactos.cabecera')
<h2>Esta es la página de contactos</h2>
<h3>
<br>
{{$nombre}}
<br>


<div align="center">-------CONDICIONALES-------</div>
<?//Condicionales if?>
<h2 align ="center">IF AND ISSET</h2>
{{isset($edad) && !is_null($edad) ? $edad : 'No existe la edad'}} <?//el ? es como entonces?>
</h3>
<br>
@if(is_null($edad))
    No existe la edad
@else
    Existe la edad: {{$edad}}
@endif



<h3><div align="center">-------BUCLES-------</div></h3>
<?//ciclos for?>
<h2 align ="center">FOR</h2>
<br>
Tabla del {{$numero=20}}
@for ($i=1; $i <= 10; $i++)
    <p> {{$i.' x '.$numero.' = '.($i*$numero)}} </p>
@endfor

<?//ciclos while?>
<h2 align ="center">WHILE</h2>
<br>
<?$a=1;?>
@while($a<=7)
    <p>{{'Hola Mundo x '.$a}}</p>
    <?$a++;?>
@endwhile

<?//ciclos foreach?>
<h2 align ="center">FOREACH</h2>
<br>
<h3>Listado de Frutas</h3> 
@foreach($frutas as $fruta)
<p>{{$fruta}}</p>
@endforeach

@include('contactos.cabecera',array('nombre' => $nombre))

<h2>La edad de {{$nombre}} es {{$edad}}</h2>