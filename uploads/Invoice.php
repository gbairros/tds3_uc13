<?php
class Invoice {

    private $code;
    private $description;
    private $qtd;
    private $price;

     function __construct($code, $price, $qtd, $description = "NO DESCRIPTION") {
        $this->$code = $code;
        $this->description = $description;
        $this->setQtd($qtd);
        $this->setPrice($price);
    }

    public function getInvoiceAmount() { 
        return $this->getQtd() * $this->getPrice(); 
    }

    public function getCode() { 
        return $this->code; 
    }

    public function setCode($code) { 
        $this->code = $code; 
    }

    public function getDescription() { 
        return $this->description; 
    }

    public function setDescription($description) { 
        $this->description = $description; 
    }

    public function getQtd() { 
        return $this->qtd; 
    }

    public function setQtd($qtd) { 
        if($qtd < 0){
            $this->qtd = 0;
        }
        else{
            $this->qtd = $qtd;
        }  
    }

    public function getPrice() { 
        return $this->price; 
    }

    public function setPrice($price) { 
        if($price < 0){
            $this->price = 0;
        }
        else{
            $this->price = $price;
        }  
    }
}
