<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>

<body>
    <?php
        class Municipio {
            private $nombre;

            public function __construct($nombre) {  
                $this->nombre = $nombre;
            }

            public function showInfo() {
                echo "Nombre: " . $this->nombre;
            }

        }

        $guatemala = new Municipio("Guatemala");

        $guatemala->showInfo();

    ?>
</body>

</html>