<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php

    echo '<h1>Marco</h1>'

    ?>

    <h3> <?php echo 'oggi è il ' . date("d/m/Y") ?> </h3>

    <?php

    $name = 'Marco';
    $age = 18;
    $surname = 'Brambilla';

    if ($age < 18) {
        echo 'Sei minorenne!';
    } else {
        echo 'Non sei minorenne';
    }
    ?>

    <h3> <?php echo 'Ciao sono ' . $name . ' e ho ' . $age . ' anni' ?> </h3>


    <h3>
        <?php
        define("PI_GRECO", 3.14);

        echo PI_GRECO;

        ?>
    </h3>


    <h3>

        <?php
        echo 'Stampa lunghezza delle stringa: ';
        echo strlen("Hello World!");

        ?>

    </h3>


    <h3>
        <?php
        echo 'Stampa stringa al contrario: ';
        echo strrev("Hello World!");
        ?>
    </h3>

    <h3>
        <?php
        echo 'Sostituisce la parola world con dolly:  ';
        $oldtxt = "Hello World!";
        $newtxt = str_replace("World", "Dolly", $oldtxt);
        echo $newtxt;
        ?>
    </h3>

    <h3>
        <?php

        echo 'Operatore == :  ';

        $a = 5;
        $b = "5";

        if ($a == $b) {
            echo "Le variabili sono uguali.";
        } else {
            echo "Le variabili sono diverse.";
        }
        ?>
    </h3>

    <h3>
        <?php
        echo 'Esempio di operatore switch:  ';


        $color = "verde";

        switch ($color) {
            case "rosso":
                echo "Il tuo colore è il rosso!";
                break;
            case "blu":
                echo "Il tuo colore è il blu!";
                break;
            case "verde":
                echo "Il tuo colore è il verde!";
                break;
            default:
                echo "Il tuo colore non è rosso, blue o verde!";
        }

        ?>
    </h3>

    <h1 style="text-align: center;">Cicli PHP</h1>


    <h3>
        <?php

        echo 'While: ';

        echo '$i = 0;
        while ($i < 5) {
            echo $i;
            $i++;
        }   Risultato: ';

        $i = 0;
        while ($i < 5) {
            echo $i;
            $i++;
        }

        ?>
    </h3>

    <h3>
        <?php

        echo 'Do-while:  $i = 0;
        do {
            echo $i;
            $i++;
        } while ($i < 5);';

        echo '   Risultato: ';

        $i = 0;
        do {
            echo $i;
            $i++;
        } while ($i < 5);

        ?>
    </h3>

    <h3>
        <?php

        echo 'For:  for ($i = 0; $i < 5; $i++) {
            echo $i;
        }
        ';

        echo '   Risultato: ';

        for ($i = 0; $i < 5; $i++) {
            echo $i;
        }

        ?>
    </h3>

    <h3>
        <?php

        echo 'Foreach:  $colors = array("red", "green", "blue");
        foreach ($colors as $color) {
            echo $color;
        }';

        echo '   Risultato: ';

        $colors = array("red", "green", "blue");
        foreach ($colors as $color) {
            echo $color . " ";
        }
        // Esempio per prendere l'indice in un array 


        // echo count($colors); => Da il numero degli elementi nell'array
        ?>

        <?php

        $age = array("Peter" => "39", "Ben" => "37", "Joe" => "3");
        ksort($age);

        foreach ($age as $x => $y) {
            echo $x . $y;
        }

        // la funzione sort() ordina gli elementi di un array in ordine alfabetico o numerico

        // $colors = array("red", "green", "blue", "yellow");
        // foreach ($colors as $color) {
        //     echo $color . " ";
        // }
        // sort($colors);
        // foreach ($colors as $color) {
        //     echo $color . " ";
        // }


        // Esempio ciclo su un array

        // $age = array(
        //     "John" => 30,
        //     "Jane" => 25,
        //     "Michael" => 40
        // );

        // foreach ($age as $x => $y) {
        //     echo "Key=" . $x . ", Value=" . $y . "<br>";
        // }

        // Esempio per prendere un dato in un array associativo

        // $eta = array("Marco" => 35, "Michele" => 40);
        // echo " Marco ha " . $eta["Marco"] . " anni ";
        ?>
    </h3>


    <!-- PHP FORMS -->

    <h1 style="text-align: center;">Form PHP</h1>


    <form action="test.php" method="get">
        First name: <input type="text" name="fname">
    </form>

    <p>Welcome <?php if (isset($_GET["fname"])) {
                    echo $_GET["fname"];
                } ?></p>



    <!-- Esercizi classi PHP -->

    <h1 style="text-align: center;">Esercizi classi PHP</h1>


    <?php

    // class Gioco
    // {

    //     //Proprietà della classe
    //     public $nome;
    //     public $prezzo;

    //     //Metodo della classe
    //     public function getGioco()
    //     {
    //         return $this->nome . " " . $this->prezzo;
    //     }
    // };

    // $gioco1 = new Gioco();
    // $gioco1->nome = "GTA V";
    // $gioco1->prezzo = 149.99;

    // echo $gioco1->getGioco();


    // con costruttore:

    class Gioco
    {

        //Proprietà della classe
        public $nome;
        public $prezzo;

        //Metodo della classe
        public function __construct($nome, $prezzo)
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
        }
        public function getGioco()
        {
            return $this->nome . " " . $this->prezzo . " ";
        }
    };

    $gioco1 = new Gioco("GTA V", 149.99);
    $gioco2 = new Gioco("Spiderman", 49.99);
    $gioco3 = new Gioco("Fortnite", 14.99);

    echo $gioco1->getGioco();
    echo $gioco2->getGioco();
    echo $gioco3->getGioco();


    ?>


    <!-- <p id="demo"></p>

    <script>
        document.getElementById("demo").innerHTML = "Hello";
    </script> -->

    <!-- <p id="demo"></p>

    <script>
        document.getElementsByTagName("p")[1].innerHTML = "Hello";
    </script> -->


</body>

</html>