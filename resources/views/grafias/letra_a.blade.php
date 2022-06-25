@extends('layouts.app')

@section('content')
    <br>
        <br>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-3">
                    <a class="nav-link" href="alfabeto.php"><button class="btn btn-warning " type="submit"><i class="fas fa-chevron-left"></i> Regresar</button></a>
                </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 style="font-family: 'Cormorant Garamond', serif;">
                        GRAFIAS
                    </h1>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-success table-striped text-center" id="t_clases" style="border-radius: 20px;"> 
                            <thead>
                                <tr>
                                <th scope="col">Imagen</th>
                                  <th scope="col">Pronunciación</th>
                                  <th scope="col">Escritura</th>
                                  <th scope="col">Significado</th>
                                </tr>
                            </thead>
                            <tbody>
                        <tr>
                            
                            <div><td><img src="./public/img/agua.png" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/agua.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Atl</td></div>
                            <div><td>Agua</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/papel.png" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/papel.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Amatl</td></div>
                            <div><td>Papel</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/sobre_el_agua.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:65px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/sobre_el_agua.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Amatl</td></div>
                            <div><td>Sobre el agua</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/arco.png" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/arco.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Akosamalutl</td></div>
                            <div><td>Arcoiris</td></div>
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/lago.png" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/lago.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Atoyatl</td></div>
                            <div><td>Lago</td></div>
                        </tr>
                        </td>
                        
                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
@endsection