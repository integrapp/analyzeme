<?php
class DataBase {
    private $host;
    private $user;
    private $pwd;
    private $dbName;
    private $rows;
    private $error;
    private $result;
    private $connection;
    private $isReady;

    public function __construct(){
        $this->result = null;
        $this->isReady = false;
        $this->error = array();
    }

    public function __destruct(){
        @mysql_close($this->connection);
    }

    /* setters */
    public function setHost($host) {
        $this->host = $host;
    }
    public function setUser($user) {
        $this->user = $user;
    }
    public function setPassword($pwd) {
        $this->pwd = $pwd;
    }
    public function setDbName($dbName) {
        $this->dbName = $dbName;
    }

    public function init($host=null,$user=null,$pwd=null,$dbName=null) {
        if(!isset($host,$user,$pwd,$dbName))
            die("Please provide require settings.");
        $this->setHost($host);
        $this->setUser($user);
        $this->setPassword($pwd);
        $this->setDbName($dbName);
        $this->isReady = true;
    }

    public function select($dbName) {
        $this->setDbName($dbName);
        mysql_select_db($this->dbName,$this->connection) or die("The said database does not exist.");
    }

    public function query($sql) {
        $this->result = mysql_query($sql,$this->connection);
    }

    public function connect() {
        if(!$this->isReady) die("not ready to connect");
        $this->connection = mysql_connect($this->host,$this->user,$this->pwd) or die("Could not connect to database. please check your credentials.");
        $this->select($this->dbName);
        $this->query("SET NAMES 'utf8'",$this->connection); //persian support
    }

    public function isConnected() {
    if($this->connection)
        return true;
        return false;
    }

    public function disconnect() {
        mysql_close($this->connection);
        $this->connection = null;
    }

    public function countRows($selectMode = true) {
        if($selectMode)
        return mysql_num_rows($this->result);
        return mysql_affected_rows($this->connection);
    }

    public function loadRows($mode = MYSQL_BOTH) {
        if(!$this->result) die("Nothing found!");
        $this->rows = array();
        while($r = mysql_fetch_array($this->result, $mode))
        $this->rows[] = $r;
        mysql_free_result($this->result);
        return $this->rows;
    }

    public function shiftDown($dataStack) {
        if(!is_array($dataStack)) {
            // $dataStack = ereg_replace("['");|`,<>]","",$dataStack);
            $dataStack = mysql_real_escape_string(trim($dataStack),$this->connection);
            $dataStack = stripslashes($dataStack);
            return $dataStack;
        }
        $safeData = array();
        foreach($dataStack as $p=>$data) {
            //$data = ereg_replace("['")(;|`,<>]","",$data);
            $data = mysql_real_escape_string(trim($data),$this->connection);
            $data = stripslashes($data);
            $safeData[$p] = $data;
        }
        return $safeData;
    }

    public function secure($data) {
        return sha1(md5(sha1(md5(sha1($data)))));
    }

    public function getErrors() {
        return $this->error;
    }
}
?>
