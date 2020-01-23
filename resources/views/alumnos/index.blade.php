
qwqwq

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // foreach ($students as  $value) {
    //     echo $value["id"]. "<br>";
    //     // echo $value->nombre. "<br>";
    // }
    ?>

    <table>
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Accciones</th>
        </thead>
        <tbody>
            @foreach($students as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->nombre}}</td>
                <td>{{$value['apellido']</td>
                <td> Editar | 
                    <form action="{{url('/estudiantes/'.$value['id'])}}" method = "post">
                    {{crsf_field()}}
                    {{method_field('DELETE')}}
                    <button type = "submit" onclick = " return confirm('desea borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>