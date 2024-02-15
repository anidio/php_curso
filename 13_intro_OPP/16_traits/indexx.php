<?php

    trait Objeto {
        public function teste()
        {
            echo "Testando trait de objeto <br>";
        }
    }

    trait Testando {

        public function tratiTeste()
        {
            echo "Este método é da trait tetando <br>";
        }

    }


    class Central {
        use Objeto;
        use Testando;
    }

    $x = new Central();

    $x->teste();
    $x->tratiTeste();