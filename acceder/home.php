<?php
$ci=$_GET['ci'];
$color=$_GET['color'];
$nombre=$_GET['nombre'];
echo "<h1>BIENVENIDO  ".$nombre."</h1> ";
echo "<a href=home.php?ci=".$ci."&color=d60502&nombre=".$nombre.">";
echo "<button>Rojo</button>";
echo "</a>";
echo "<a href=home.php?ci=".$ci."&color=0232d6&nombre=".$nombre.">";
echo "<button>Azul</button>";
echo "</a>";
echo "<a href=home.php?ci=".$ci."&color=d6dd02&nombre=".$nombre.">";
echo "<button>Amarillo</button>";
echo "</a>";
echo "</br>";
echo "<a href=notas.php?ci=".$ci."&color=d6dd02&nombre=".$nombre.">";
echo "<button>NOTAS</button>";
echo "</a>";
        echo "<a href=index.php?ci=".$ci."&color=d60502&nombre=".$nombre.">";
        echo "<button>salir</button>";
        echo "</a>";
echo "<html>";
echo "	<head>";
echo "        <meta charset=".'utf-8'.">";
echo "		<title>Pagina de prueba</title>";

echo "<style>";
echo "  body {background-color:".$color.";}";
echo "</style";
echo "</head>";
echo "<body>";
echo "</body";


?>
