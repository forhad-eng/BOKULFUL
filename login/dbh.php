<?php

    function connect()
    {
        $host = 'loaclhost';
        $user = 'root';
        $pwd = '';
        $dbName = 'project';

        $dsn = 'mysql:hsot='.$host.';dbname='.$dbName;
        $pdo = new PDO($dsn,$user,$pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }