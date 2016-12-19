<?php
echo "Record updated successfully";
sleep(2);
header('Location: ../index.php?action=admin&cms_action=show');