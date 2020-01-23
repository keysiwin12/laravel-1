pagina para crear estudiantes 

<form action="{{url('/alumnos')}}" method = "post">
    {{csrf_field()}}
    Nombre : <input type="text" name= "nombre"> <br>
    Apellido : <input type="text" name= "apellido"> <br>
    <input type="submit" value="enviar">
</form>