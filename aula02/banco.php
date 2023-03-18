//arquivo banco.php
<?php 
    function obter_dados(){
        $dados=[
            [
                "Nome"=>"Thiago",
                "Idade"=>30,
                "Estado"=>"MG"
            ],
            [
                "Nome"=>"Thaís",
                "Idade"=>15,
                "Estado"=>"SP"
            ],
            [
                "Nome"=>"Roberto",
                "Idade"=>10,
                "Estado"=>"RJ"
            ],
            [
                "Nome"=>"Vanessa",
                "Idade"=>22,
                "Estado"=>"SP"
            ],
            [
                "Nome"=>"Junior",
                "Idade"=>40,
                "Estado"=>"BA"
            ],
        ];
        return $dados;
    }
?>