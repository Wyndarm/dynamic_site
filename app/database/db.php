<?php

session_start();
require('connect.php');


function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function userAuth($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    } else {
        header('location: ' . BASE_URL);    
    }
}


function dbCheckError($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

function selectAll($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";                
            }
            $i++;
        }
    }
   
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetchAll();
}


function selectOne($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";                
            }
            $i++;
        }
    }
   
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetch();
}


function insert($table, $params = []) {
    global $pdo;

    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $coll = $coll . "$key";
            $mask = $mask . "'" . "$value" . "'";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'" ;
        }
        $i++;
    }
    
    $sql = "INSERT INTO $table ($coll) VALUES ($mask);";

    $query = $pdo->prepare($sql);
    $query->execute($params);

    dbCheckError($query);

    return $pdo->lastInsertId();
}


function update($table, $id, $params = []) {
    global $pdo;

    $i = 0;
    $str = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . " = '" . $value . "'";
        } else {
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id;";

    $query = $pdo->prepare($sql);
    $query->execute($params);

    dbCheckError($query);
}


function delete($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id;";

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
}

// session_unset();

?>