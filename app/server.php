<?php
require_once __DIR__ . '/../database/database.php';

function filtroPerGenere($array, $genere) {
  $res = [];
  foreach ($array as $album) {

  }
  return $res;
}

$genreQuery = $_GET['genre'];
if (!empty($genreQuery)) {
  $dischi = filtroPerGenere($dischi, $genreQuery);
}

header('Content-Type: application/json');

$listaDischi = json_encode($dischi);
echo $listaDischi;
