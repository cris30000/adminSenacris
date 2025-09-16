<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
     <form action="{{route('curse.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

        <label for="title" >Ingrese el nombre del curso: </label>
        <input type="text" id="title" name="name" required>

        <label for="title" >Ingrese el numero del curso: </label>
        <input type="text" id="title" name="curser_number" required>

        <label for="title" >Ingrese el dia en que se dictara  el curso: </label>
        <input type="text" id="title" name="day" required>

         <label for="title" >Ingrese el id del area: </label>
        <input type="text" id="title" name="area_id" required>

        <label for="title" >Ingrese el Id del centro de formacion: </label>
        <input type="text" id="title" name="training_centers_id" required>




       

    <br><br>

    <button type="submit">Guardar..</button>

</form>

</body>
</html>
