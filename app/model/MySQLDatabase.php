<?php
    include_once 'DataBase.php';
    

    class MySQLDatabase implements Database {
        private $pdo;
        private $dbname = 'BlogCultureDev';
        private $password  = '';
        private $username = 'root';
        private $host = 'localhost';

        public $id;
        public $table; 
        public $data = array();
        public $dataJoin = array();


        public function __construct($host = null, $username = null, $password = null, $dbname = null) {
            if ($host !== null) {
                $this->host = $host;
            }
            if ($username !== null) {
                $this->username = $username;
            }
            if ($password !== null) {
                $this->password = $password;
            }
            if ($dbname !== null) {
                $this->dbname = $dbname;
            }

            // connect to the database using PDO
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
        }

        public function insert() {
            try {
                $columns = implode(", ", array_keys($this->data));
                $placeholders = ":" . implode(", :", array_keys($this->data));
                $sql = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";
                $stmt = $this->pdo->prepare($sql);
                foreach($this->data as $key => $value) {
                    $stmt->bindValue(':' . $key, $value);
                }
                $stmt->execute();
                return true;
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
        public function join( $WHERE=NULL , $join="INNER"){

            $sql = "SELECT  $this->table." . implode( " ,  $this->table." , array_keys($this->data))." , ";

            for($i=0 ;  $i< count($this->dataJoin) ; $i++){
                
                $sql.= array_keys($this->dataJoin)[$i] .".name  as " . array_keys($this->dataJoin)[$i] ;

                if($i < count($this->dataJoin)-1)  $sql.=  " , ";
                else $sql.= " FROM $this->table ";
            }


            for($i=0 ;  $i< count($this->dataJoin) ; $i++){
                
                $sql .=   "  $join JOIN  " . array_keys($this->dataJoin)[$i] . "  ON  " . $this->table . 
                "." . array_values($this->dataJoin)[$i]  . "  =  " . array_keys($this->dataJoin)[$i] . '.id ';
            }
            
            if($WHERE) $sql.= " $WHERE";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            
            return $data;
        }

                
        

        
        

        public function select($where=NULL) {
            try {
                $sql = "SELECT * FROM $this->table $where";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
        
        

        public function update($where=NULL) {
            try {
                $set = implode(", ", array_map(
                    function ($v, $k) { return sprintf("%s = :%s", $k, $k); },
                    $this->data,
                    array_keys($this->data)
                ));
                $sql = "UPDATE $this->table SET $set $where";
                
                $stmt = $this->pdo->prepare($sql);
                foreach($this->data as $key => $value) {
                    $stmt->bindValue(':' . $key, $value);
                }
                $stmt->execute($this->data);
                return true;
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
        

        public function delete($where=NULL) {
            // delete the data from the database
            $query = "DELETE FROM $this->table $where";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        }

        public function isExist($property) {
            $data = $this->select("WHERE $property='".$this->data[$property]."'");
            return count($data) != 0;
        }














}
?>