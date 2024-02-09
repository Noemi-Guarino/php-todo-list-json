<?php
    // // var_dump($_POST)
    // cosi sovrascriverebbe solo la nuova lista con la vecchia
    // $newtodo =[
    //     'task' => $_POST['task']
    // ];

    // $newtodoJSON = json_encode($newtodo);

    // file_put_contents('todolist.json', $newtodoJSON);


    // cosi invece aggiunge i nyuovi todo preservando la vecchia
    // prendo il vecchio contenuto
    $alltodoJSON =  file_get_contents('todolist.json');
    // trasformo in una struttura(decodifica)
    $alltodo = json_decode($alltodoJSON, true);
    // creo il nuovo todo
        $newtodo = [
            'todo' => $_POST['todo']
        ];
    // aggiungere all array originale i nuovi to do del nuovo
    $alltodo[] = $newtodo;
    // ritrasformo struttura in una stringa json
    $alltodowithnewJSON = json_encode($alltodo);
    // prendi dove vuoi scrivere e cosa vuoi scrivere e agg il nuovo
    file_put_contents('todolist.json',$alltodowithnewJSON);

    header('Content-Type: application/json');
    
    echo json_encode($newtodo);

?> 