<?php
const DB_HOST = '127.0.0.1';
const DB_PORT = '3306';
const DB_NAME = 'junny_world';
const DB_USER = 'juno';
const DB_PASSWORD = 'Jb2033324!';

$dsn = 'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset=utf8';
$user = DB_USER;
$pass = DB_PASSWORD;
$pdo = new PDO($dsn,$user,$pass);


class DB{
    private $pdo;
    public function __construct(){
        $dsn = 'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset=utf8';
        $this->pdo = new PDO($dsn,DB_USER,DB_PASSWORD);
    }

    /**
     * @var DB
     */
    static private $_instance = null;
    static public function get(){
        if( DB::$_instance==null){
            DB::$_instance = new DB();
        }
        return DB::$_instance;
    }
    private function query($queryStatement, $params = array()){
        $pdo = DB::get()->pdo;
        $stmt = $pdo->prepare($queryStatement);
        if( !$stmt->execute($params) ){
            var_dump($stmt->errorInfo());
            exit();
        }
        return $stmt;

    }
    public function select($queryStatement, $params = array()){
        $stmt = $this->query($queryStatement, $params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function selectAll($queryStatement, $params = array()){
        $stmt = $this->query($queryStatement, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert($queryStatement, $params = array()){
        $stmt = $this->query($queryStatement, $params);
        return 0;
    }
    public function update($queryStatement, $params = array()){
        $stmt = $this->query($queryStatement, $params);
        return 1;
    }
    public function delete($queryStatement, $params = array()){
        $stmt = $this->query($queryStatement, $params);
        return 2;
    }
}
