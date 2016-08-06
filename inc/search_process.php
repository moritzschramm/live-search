<?php

require_once 'db_connect.php';


if( isset( $_POST[ 'search_term' ] ) ) {

  $search_term = '%' . filter_var($_POST['search_term'], FILTER_SANITIZE_STRING) . '%';


  $sql  = "SELECT * FROM cheeses WHERE name LIKE ? LIMIT 10";
  $stmt = $pdo->prepare($sql);
  $stmt->execute( array( $search_term ) );

  $data = [];

  while( $row = $stmt->fetch() )  {

    $data [] = $row['name'];
  }

  echo json_encode($data);
}


?>
