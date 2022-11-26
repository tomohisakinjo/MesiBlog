<?php
require_once('env.php');
class Dbc
{
    protected $table_name;

    //データベース接続
    public function dbConnect(){
        $host = DB_HOST;
        $dbname = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASS;
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

        try{
            $dbh = new PDO($dsn,$user,$pass,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
        } catch(PDOOException $e){
            echo "接続失敗".$e->getMessage();
            exit();
        };
        return $dbh;
    }

    //ブログデータ取得
    public function getAll(){
        $dbh = $this->dbConnect();
        $sql = 'SELECT * FROM blogs';
        $stmt = $dbh->query($sql);
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $result;
        $dbh = null;
    }

    //カテゴリー名
    public function setCategoryName($category){
        if($category == '1'){
            return '南部';
        }elseif($category == '2'){
            return '中部';
        }else{
            return '北部';
        }
    }

}
?>
