<?php
$sql = "DELETE FROM mytable WHERE id = $id";
$mysqli->query($sql);

echo "Record updated successfully" ;
echo '<br>';
echo' <a href="?action=admin&cms_action=show">back</a> <br>' ;
 ?>
