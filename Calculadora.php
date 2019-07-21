<?php
    class Calculadora{
        public $ip;

        public function __construct($ip){
           $this->transformaIp($ip);
           $this->sanitizar();
        }
       public function transformaIp($ip){
            $divisor = explode(".",$ip);
             $this->ip = $divisor;
        }

        public function sanitizar(){
            $contar = count($this->ip);
            $chave = null;
            if($contar == 4){
                foreach($this->ip as $value){
                    if($value <= 255){
                        $chave = TRUE;
                    }else{
                        $chave = FALSE;
                        break;  
                    }
                }
            }else{
                echo 'Seu Ip foi escrito errado';
            }
            
            if($chave == TRUE){
                echo "Tudo certo chefe";

            }if($chave == FALSE){
                echo "Seu ip está errado";
            }
        }

    }

 
