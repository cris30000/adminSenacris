<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>estos son  los profes</title>
</head>
<body>
    

    <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

        <label for="title" >Ingrese el nombre del profesor: </label>
        <input type="text" id="title" name="name" required>

        <label for="title" >Ingrese el email: </label>
        <input type="text" id="title" name="email" required>

       <label for="title" >Ingrese el id del area: </label>
        <input type="text" id="title" name="area_id" required>

        <label for="title" >Ingrese el id del trainig: </label>
        <input type="text" id="title" name="trainin_centers_id" required>

    <br><br>

    <button type="submit">Guardar..</button>

</form>

</body>
</html>