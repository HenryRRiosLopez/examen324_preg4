<?php
$nombre=$_GET['nombre'];
echo "<h1>Promedios por departamento de cada materia</h1>";
echo "<a href=homeDoc.php?ci=".$ci."&color=d60502&nombre=".$nombre.">";
echo "<button>Atras</button>";
echo "</br>";
echo "</a>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> CH </td>
    <td> LP </td>
    <td> CB </td>
    <td> OR </td>
    <td> PT </td>
    <td> TJ </td>
    <td> SC </td>
    <td> BE </td>
    <td> PD </td>

</tr>
<?php
include "conneccion.inc.php";
$Consigla = "SELECT sigla
            from nota
            group BY sigla";
$Ressigla = mysqli_query($con, $Consigla);

while($filasigla = mysqli_fetch_array($Ressigla)){
    $array=array();
    $sigla=$filasigla["sigla"];
    #echo $sigla;
    #echo "</br>";
    for($i=101; $i<=109; $i++){
        #print_r($i);
   
        #echo "</br";
        $ConProm="SELECT AVG(n.nota_final) XPROM
        FROM nota n, persona p
        WHERE n.ci=p.ci and p.departamento='$i' and n.sigla like '$sigla'" ;
        $ResProm = mysqli_query($con, $ConProm);

        $filaProm = mysqli_fetch_array($ResProm);
        $array[$i-100]=$filaProm["XPROM"];
        #print_r($array);
        #print_r($filaProm);
        

    }
    #echo $filaProm["XPROM"];
    
    echo "<tr>";
    echo "<td>".$sigla."    "."</td>";
    echo "<td>".$array[1]."    "."</td>";
    echo "<td>".$array[2]."    "."</td>";
    echo "<td>".$array[3]."    "."</td>";
    echo "<td>".$array[4]."    "."</td>";
    echo "<td>".$array[5]."    "."</td>";
    echo "<td>".$array[6]."    "."</td>";
    echo "<td>".$array[7]."    "."</td>";
    echo "<td>".$array[8]."    "."</td>";
    echo "<td>".$array[9]."    "."</td>";
    echo "</tr>";
    echo "</br";
}


?>



</table>
<?php
echo "<style>";
echo "  body {background-color:f57527;}";
echo "</style";
?>