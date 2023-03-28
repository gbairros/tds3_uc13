<?php
    class CustomException extends Exception {
        public function errorMessage() {
            //error message
            $errorMsg = 'Erro na linha '.$this->getLine().' arquivo '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> Mensagem customizada';
            return $errorMsg;
        }
    }
?>