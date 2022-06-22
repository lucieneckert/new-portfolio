<?php

$db_filepath = 'db/site.sqlite';
$init_sql = file_get_contents('db/init.sql');

// check to see if db exists
if (!file_exists($db_filepath)) {
    $db = new PDO('sqlite:' . $db_filepath);
    // we need to create the db
    try {
        $db->beginTransaction();
        $result = $db->exec($init_sql);
        $db->commit();
    } catch (PDOException $err) {
        // check init for syntax errs
        unlink($db_filepath);
        throw $err;
    }
} else {
    $db = new PDO('sqlite:' . $db_filepath);
}

function exec_query($db, $query) {
    return $db->query($query);
}

function exec_query_params($db, $query, $params) {
   $result = $db->prepare($query);
   if ($result->execute($params)) return $result;
   return NULL;
}

?>