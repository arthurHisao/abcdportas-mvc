<?php
    namespace Sts\Models\Connection;

    use PDO;
    
    if(!defined("URL")) {
        exit("URL iválido");
    }

    class Read extends Connection {

        private $Select;
        private $Values;
        private $Result;
        private $Query;
        private $Conn;

        public function getResult() {
            return $this->Result;
        }

        public function fullRead($Query, $ParseString = null) {
            $this->Select = (String) $Query;
            if(!empty($ParseString)) {
                parse_str($ParseString, $this->Values);
            }
            $this->execQueries(); 
        }

        //executa as queries
        private function execQueries() {
            $this->Connection();
            try {
                $this->getInstruction();
                $this->Query->execute();
                $this->Result = $this->Query->fetchAll();
            } catch (Exception $ex) {
                $this->Result = NULL;
            }
        }

        //Conexao 
        private function Connection() {
            $this->Conn = parent::getConnection();
            $this->Query = $this->Conn->prepare($this->Select);
            $this->Query->setFetchMode(PDO::FETCH_ASSOC);
        }

        private function getInstruction() {
            if($this->Values) {
                foreach($this->Values as $Link => $Val) {
                    $this->Query->bindValue(":{$Link}", $Val, (is_int($Val) ? PDO::PARAM_INT : PDO::PARAM_STR));
                }
            }
        }
 
    }