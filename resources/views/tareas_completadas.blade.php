<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <title>Lista de tareas</title>
    <style>
        .task-button{
            display: flex;

        }

        .task-button button{
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="nav-link">Inicio</a></li>


        </ul>
    </nav>

    <section class="task">
        <h2 class="text-center">Tareas completadas</h2>
        <div class="container">

            <div class="row">

                @foreach ($tareas as $tarea)
                    <div class="col-sm-12 col-lg-4">
                        <div>
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="/imagenes/task-completed.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$tarea->titulo}}</h5>
                                    <p class="card-text">{{$tarea->descripcion}}</p>

                                    <div class="task-button">
                                        

                                        <form action="{{route('tarea_completada.eliminar', $tarea->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Eliminar<button />
                                        </form>
                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>

                @endforeach


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