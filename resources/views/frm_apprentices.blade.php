
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendices</title>
</head>
<body>
    <form action="{{route('apprentice.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

        <label for="name" >Ingrese el nombre del aprendiz: </label>
        <input type="text" id="title" name="name" required>
        
        <label for="email" >Ingrese el email del aprendiz: </label>
        <input type="text" id="title" name="email" required>
        
        <label for="cel_number" >Ingrese el numero de celular del aprendiz: </label>
        <input type="text" id="title" name="cell_number" required>

        <label for="course_id" >Ingrese el id del curso que esta inscrito: </label>
        <input type="text" id="title" name="course_id" required>
        
        <label for="computer_id" >Ingrese el id del computador del aprendiz: </label>
        <input type="text" id="title" name="computer_id" required>

        

       

    <br><br>

    <button type="submit">Guardar..</button>

</form>
    
</body>
</html>