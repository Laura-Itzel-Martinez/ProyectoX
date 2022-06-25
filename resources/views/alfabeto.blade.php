@extends('layouts.app')

@section('content')
        <br>
        <br>
        <br>
        <br>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-3">
                    <a class="nav-link" href="curso_1.php"><button class="btn btn-primary btn-block" type="submit">Lista de clases</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h1>GRAFIAS</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col text-center">
                    <h4>Significado: Signo gráfico o conjunto de ellos con que se representa un sonido o una palabra en la escritura.</h4>
                </div>
            </div>
        </div>
        <br>
        <div class="letras-recomendadas contenedor">
            <div class="contenedor-titulo-controles">
                <br>
                <h1></h1>
                <div class="indicadores"></div>
            </div>
            <div class="contenedor-principal">
                <button role="button" id="flecha-izquierda" class="flecha-izquierda"> <i class="fas fa-angle-left"></i></button>

                <div class="contenedor-carousel ">
                    <div class="carousel carousel-responsive">
                        <div class="letra">
                            <a href="letra_a.php"><img src="{{asset('img/foto4.png')}}" alt=""></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 215px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="letra_e.php"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="letra_h.php"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 215px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 190px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="#"><img src="{{asset('img/foto4.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        
                    </div>
                </div>
                <button role="button" id="flecha-derecha" class="flecha-derecha"> <i class="fas fa-angle-right"></i></button>
            </div>
            <p>¡Has click sobre una letra!</p>
        </div>

@endsection
<script>

    const fila = document.querySelector('.contenedor-carousel');
    const letras = document.querySelectorAll('.letra');

    const flechaIzquierda = document.getElementById('flecha-izquierda');
    const flechaDerecha = document.getElementById('flecha-derecha');


    flechaDerecha.addEventListener('click', ()=> {
        fila.scrollLeft += fila.offsetWidth;

        const indicadorActivo = document.querySelector('.indicadores .activo');
        if (indicadorActivo.nextSibling) {
            indicadorActivo.nextSibling.classList.add('activo');
            indicadorActivo.classList.remove('activo');
        }
    });

    flechaIzquierda.addEventListener('click', ()=> {
        fila.scrollLeft -= fila.offsetWidth;

        const indicadorActivo = document.querySelector('.indicadores .activo');
        if (indicadorActivo.previousSibling) {
            indicadorActivo.previousSibling.classList.add('activo');
            indicadorActivo.classList.remove('activo');
        }
    });


    const numeroPaginas = Math.ceil(letras.length / 5);

    for(let i = 0;i < numeroPaginas;i++){
        const indicador  = document.createElement('button');
        if (i === 0) {
            indicador.classList.add('activo');
        }

        document.querySelector('.indicadores').appendChild(indicador);
        indicador.addEventListener('click', (e) => {
            fila.scrollLeft = i * fila.offsetWidth;

            document.querySelector('.indicadores .activo' ).classList.remove('activo');
            e.target.classList.add('activo');
        })
    }
    
    /* Segundo carrusel*/
    
    
</script>
