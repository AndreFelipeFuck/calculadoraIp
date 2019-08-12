<?php
    class Calculadora{
        public $ip;
        public $barra;

        public function __construct($ip,$barra){
            $this->ip = $_POST['ip'];
            $this->barra = $_POST['barra'];
           $this->transformaIp($ip);
           $this->sanitizar();
           $this->sanitizarBarra($barra);

            $this->classeIp();
            $this->tipoIp();
            $this->qtdSubRedes();
           
           
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
                //echo " ## Tudo certo chefe ## ";//modificar

            }if($chave == FALSE){
                echo "Seu ip está errado";//modificar
            }
        }
        
        public function sanitizarBarra($barra){
            if($barra >= 24){
                if($barra <= 32){
                   // echo '## Tudo certo chefe ##  ';
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

        public function tipoIp(){
            $listaDeIps = array(10, 172, 192, 169);
            
            foreach($listaDeIps as $value){
                if($this->ip[0] == $value){
                    echo 'IP privado';
                    break;
                }elseif($this->ip[0] != $value){
                    echo 'IP publico';
                    break;
                }
            }
        }

        public function qtdSubRedes(){
            $barra = array (
                '24' =>(1),
                '25' =>(2),
                '26' =>(4),
                '27' =>(8),
                '28' =>(16),
                '29' =>(32),
                '30' =>(64),
                '31' =>(128),
                '32' =>(256),
            );

            foreach($barra as $key => $value){
                if($this->barra == $key){
                    echo "A quantidade de sub-redes possíveis com a  máscara informada é de $value sub-rede";
                }
            }
        }
    }

   
  


 
