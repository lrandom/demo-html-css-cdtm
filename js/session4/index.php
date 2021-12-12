<?php
  header('Access-Controll-Allow-Origin: *');//CORS
  header('Content-Type: application/json');
  http_response_code(200);
  echo json_encode([
      ['name'=>'Luan'],
      ['name'=>'Nam'],
      ['name'=>'Thanh']
  ]);
?>
