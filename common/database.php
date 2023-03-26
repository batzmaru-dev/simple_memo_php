<?php

/**
 * PDOを使ってデータベースに接続する
 * @return PDO
 */
function getDatabaseConnection() {
    try
    {
        $database_handler = new PDO(
            'mysql:host=mysql213.phy.lolipop.lan;
            dbname=LAA1320261-simplememo;
            charset=utf8mb4', 'LAA1320261', '82268226Aa'
        );
    }
    catch (PDOException $e)
    {
        echo "DB接続に失敗しました。<br />";
        echo $e->getMessage();
        exit;
    }
    return $database_handler;
}

