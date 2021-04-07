<?php
$nombre=$_GET['nombre'];
echo "<h1>Notas de ".$nombre."</h1>";

?>
<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td>NOTA 1 </td>
    <td>NOTA 2 </td>
    <td>NOTA 3 </td>
    <td>NOTA FINAL</td>
</tr>


<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";
$consulta="SELECT * from nota where ci like $ci";
$resuk=mysqli_query($con, $consulta);
while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['nota1']."    "."</td>";
    echo "<td>".$fila['nota2']."    "."</td>";
    echo "<td>".$fila['nota3']."    "."</td>";
    echo "<td>".$fila['nota_final']."</td>";
    echo "</tr>";
}
echo "<a href=home.php?ci=".$ci."&color=d60502&nombre=".$nombre.">";
echo "<button>Atras</button>";
echo "</a>";
echo "<style>";
echo "  body {background-color:f57527;}";
echo "</style";

?>
</table>
