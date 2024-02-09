<?php
    // // var_dump($_POST)
    // cosi sovrascriverebbe solo la nuova lista con la vecchia
    // $newtodo =[
    //     'task' => $_POST['task']
    // ];

    // $newtodoJSON = json_encode($newtodo);

    // file_put_contents('todolist.json', $newtodoJSON);


// cosi invece aggiunge i nyuovi todo preservando la vecchia
  $alltodoJSON =  file_get_contents('todolist.json');

  $alltodo = json_decode($alltodoJSON, true);

    $newtodo = [
        'todo' => $_POST['todo']
    ];

  $alltodo[] = $newtodo;

  $alltodowithnewJSON = json_encode($alltodo);

  file_put_contents('todolist.json',$alltodowithnewJSON);

//   header('Content-Type: application/json');

?> 