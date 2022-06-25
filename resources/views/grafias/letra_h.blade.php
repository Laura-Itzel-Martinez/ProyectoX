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
                            
                            <div><td><img src="./public/img/padre.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/agua.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Tahtle</td></div>
                            <div><td>Padre</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/medicamento.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/papel.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Pantle</td></div>
                            <div><td>Medicamento</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/quien.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:65px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/sobre_el_agua.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Ahke</td></div>
                            <div><td>¿quièn?</td></div>
                            
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/grita.jpg" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/arco.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Tsahtse</td></div>
                            <div><td>grita</td></div>
                        </tr>
                        <tr>
                            <div><td><img src="./public/img/estomago.png" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            <div><td><audio controls>
                            <source src="./public/audios/lago.opus" type="audio/mp3">
                            </audio></td></div>
                            <div><td>Ihtetl</td></div>
                            <div><td>Estomago</td></div>
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
