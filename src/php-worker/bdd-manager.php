<?php
    class BddManager {
        private $url = "";
        private $bddName = "";
        private $bddUser = "";
        private $bddPassword = "";

        private $mysqli;

        public function __construct() {
            $result = $this->connect();
            if(!$result) return false;

            $this->setCharset();

            return true;
        }

        private function connect() {
            $this->mysqli = new mysqli($this->url, $this->bddUser, $this->bddPassword, $this->bddName);

            if($this->mysqli->connect_error != NULL) return false;
            return true;
        }

        private function setCharset() {
            $this->mysqli->set_charset("utf8");
        }

        public function query($request) {
            if(!isset($request) && !$request) return false;

            $response = $this->mysqli->query($request);
            if(!$response) return false;

            return $response;
        }
    }
?>