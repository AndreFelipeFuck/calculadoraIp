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
                echo " ## Tudo certo chefe ## ";//modificar

            }if($chave == FALSE){
                echo "Seu ip está errado";//modificar
            }
        }
        
        public function sanitizarBarra($barra){
            if($barra >= 24){
                if($barra <= 32){
                    echo '## Tudo certo chefe ##  ';
                    $this->barra = $barra;
                }else{
                    echo 'Sua barra esta incorreta';//modificar
                }
            }else{
                echo 'Sua barra esta incorreta';//modificar    
            }    
        }

        public function classeIp(){
            $divisor = array(
                'Classe A' => array(1, 127),
                'Classe B' => array(128, 191),
                'Classe C' => array(192, 223),
                'Classe D' => array(224, 239),
                'Classe E' => array(240, 255)
            );

            foreach($divisor as $key => $value){
                if( $this->ip[0] >= $value[0]){
                    if($this->ip[0] <= $value[1]){
                        echo $key;
                    }
                }  
            }
        }
    }

    $x = new Calculadora('1.1.1.1','24');
     $x->classeIP();
    
  


 
