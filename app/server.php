<?php
require_once __DIR__ . '/../database/database.php';

header('Content-Type: application/json');

$genreQuery = $_GET['genre'];
if (empty($genreQuery)) {
  echo json_encode($dischi);
} else {
  $res = [];
  foreach ($dischi as $value) {
    if ($value['genre'] == $genreQuery) {
      $res[] = $value;
    }
  }
  echo json_encode($res);
}
