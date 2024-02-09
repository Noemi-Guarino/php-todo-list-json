
<?php
// <!-- ci sono due modi per poter utilizzare dei dati 
// 1) li creo direttamente in php
// e successivamente utilizzo 
// header('Content-Type: ....'); 
// echo json_encode(.....); -->


// <!-- oppure creo la mia struttura dati in json 
// e successivamente  li faccio comunicare  -->

// Recupero il contenuto del file contenente i dati
$stringaJSONPresa = file_get_contents('todolist.json');

// Trasformo la stringa in una struttura dati utilizzabile in PHP
$list = json_decode($stringaJSONPresa, true);

// Dico al client che la risposta contiene un json
header('Content-Type: application/json');

echo json_encode($list);

?>