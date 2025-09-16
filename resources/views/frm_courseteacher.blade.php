<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cursos y profesores</title>
</head>
<body>

     <form action="{{route('courseTeacher.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

        <label for="title" >Ingrese el id del curso: </label>
        <input type="text" id="title" name="course_id" required>

        <label for="title" >Ingrese el Id del profesor: </label>
        <input type="text" id="title" name="teacher_id" required>

       

    <br><br>

    <button type="submit">Guardar..</button>

</form>
    
</body>
</html>