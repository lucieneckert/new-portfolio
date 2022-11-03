<?php

$db_filepath = 'db/game.sqlite';

$db = new PDO('sqlite:' . $db_filepath);

function exec_query($db, $query) {
    return $db->query($query);
}

function exec_query_params($db, $query, $params) {
   $result = $db->prepare($query);
   if ($result->execute($params)) return $result;
   return NULL;
}

?>