<?php
$data = new DateTime('2024-05-06');
$data->modify('-100 days');
echo $data->format('Y-m-d');
?>
