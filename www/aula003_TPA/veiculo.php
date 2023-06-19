<?php
    class Veiculo
    {
        private $_id;
        private $_marca; 
        private $_modelo;
        private $_ano;
        private $_cor;
        private $_valor;

        public function setId($id) {$this->_id = $id;}
        public function setMarca($marca) {$this->_marca = $marca; }
        public function setModelo ($modelo) {$this->_modelo = $modelo;}
        public function setAno($ano) {$this->_ano = $ano;}
        public function setCor($cor) {$this->_cor = $cor;}
        public function setValor ($valor) {$this->_valor = $valor;}

        public function getId() {return $this->_id;}
        public function getMarca(){return $this->_marca;}
        public function getModelo(){return $this->_modelo;}
        public function getAno(){return $this->_ano;}
        public function getCor(){return $this->_cor;} 
        public function getValor(){return $this->_valor;}
    }
?>