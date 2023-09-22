<?php
$quantitat = isset($_POST["quantitat"]);

echo "Has seleccionat ".$quantitat."<br>\n";

for ($i = 1; $i <= $quantitat; $i++) {
    echo "<a href=\"ex22pagina3.php?quantitat=$i\">Comanda".$i."</a><br>\n";
}
?>
