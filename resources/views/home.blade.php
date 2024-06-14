<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <title>Lista de tareas</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="" class="nav-link">Inicio</a></li>
      
            <li><a href="{{route('tareas.ver')}}" class="nav-link">Tareas</a></li>
            <li><a href="{{route('tareas_completadas')}}" class="nav-link">Tareas completadas</a></li>
            

        </ul>
    </nav>

    <section class="task new-task">
        <div class="container ">
            <h2 class="text-center ">Nueva tarea</h2>
            
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <form action="{{route('tareas.guardar')}}" method="post">
                        @csrf

                        <input type="text" placeholder="Titulo" id="titulo" name="titulo"><br>
                        <label for="descripcion">Descripción</label><br>
                        <textarea id="descripcion" name="descripcion" rows="4" cols="112"></textarea><br>
                        <div class="button">
                            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>