<?php
    class Calculadora{
        public $ip;
        public $barra;

        public function __construct($ip,$barra){
           $this->transformaIp($ip);
           $this->sanitizar();
           $this->sanitizarBarra($barra);
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
                echo 'Seu Ip foi escrito errado';//modificar
            }
            
            if($chave == TRUE){
                echo "Tudo certo chefe ## ";//modificar

            }if($chave == FALSE){
                echo "Seu ip está errado";//modificar
            }
        }
        
        public function sanitizarBarra($barra){
            if($barra >= 24){
                if($barra <= 32){
                    echo 'Tudo certo chefe';
                    $this->barra = $barra;
                }else{
                    echo 'Sua barra esta incorreta';//modificar
                }
            }else{
                echo 'Sua barra esta incorreta';//modificar    
            }    
        }
    }


 
