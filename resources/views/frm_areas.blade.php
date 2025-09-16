<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="{{route('areas.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

        <label for="title" >Ingrese el nombre del area: </label>
        <input type="text" id="title" name="name" required>

        

       

    <br><br>

    <button type="submit">Guardar..</button>

</form>

    
</body>
</html>