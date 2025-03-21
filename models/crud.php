<?php

function config(){
    return json_decode(file_get_contents('config.json'));
}

function connection(){
    $config = json_decode(file_get_contents('config.json'));
    return new PDO('mysql:host='.$config->bdd->server.';dbname='.$config->bdd->name,$host = $config->bdd->user, $config->bdd->pass);
}

//create('users', [lname=>"lklk",fname=>"lklklk",password=>1258])
function create(string $table, array $datas):int|string{
    unset($datas['csrf']);
    unset($datas['honeyPot']);
    $bdd = connection();
    $sql = "INSERT INTO ".$table." (".join(',', array_keys($datas)).") VALUES (".rtrim(str_repeat('?,', count($datas)),",").")";
    $bdd->prepare($sql)->execute(array_values($datas));
    return $bdd->lastInsertId();
}



function read(string $table, string $fields = "*",string $condition=""):array{
    $bdd = connection();
    $sql = "SELECT ".$fields." FROM ".$table." ".$condition;
    return $bdd->query($sql)->fetchAll();
    
}

function update(){
    $bdd = connection();
    $sql = "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
    $bdd->prepare($sql)->execute([$name, $surname, $sex, $id]);
}


function delete(string $table, array $conditions):void{
    $bdd = connection();
    $conditionQuery = "WHERE ";
    $i = 0;
    foreach ($conditions as $key => $value) {
        $conditionQuery .= $key."= ? ".(++$i != count($conditions) ? "AND " : ""  );
    }
    $sql = "DELETE FROM ".$table." ".$conditionQuery;
    $bdd->prepare($sql)->execute(array_values($conditions));
}