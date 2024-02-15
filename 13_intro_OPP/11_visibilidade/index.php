<?php

    class Car{

        public $rodas = 4;
        private $vidro = "Sem pelicula";

        public function getVidro()
        {
            return $this->vidro;
        }

        public function peliculaDeFabrica($pelicula){
            $this->vidro = $pelicula;
        }


    }

    class Mecanico{

        public function alterarRodas($carro)
        {
            $carro->rodas =10;
        }

        public function colocarPeliccula($carro, $pelicula)
        {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car();

    echo $carro->rodas . "<br>";

    $isaias = new Mecanico();
    $isaias->alterarRodas($carro);

    echo $carro->rodas . "<br>";
    echo $carro->vidro . "<br>";

    //Não pode alterar porque é privado
    //$isaias->colocarPeliccula($carro, "G20");

    $carro->peliculaDeFabrica("G10");

    echo $carro->vidro . "<br>";