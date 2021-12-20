<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="col-12">             
                    <div >
                        <table class= "table table-striped table-hover">
                            <thead >
                              
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Descripcion</th>
                                    <th>Slug</th>
                                    <th>Categoria</th>
                                    <th>Acciones</th>
                              
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                <tr>
                                    <td>{{  $producto->id }}</td>
                                    <td>{{  $producto->title }}</td>
                                    <td>{{  $producto->description }}</td>
                                    <td>{{  $producto->slug }}</td>
                                    <td>{{  $producto->categoria_id }}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    
</body>
</html>