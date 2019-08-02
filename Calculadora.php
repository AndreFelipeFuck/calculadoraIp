<?php
    class Calculadora{
        public $ip;
        public $barra;

        public function __construct($ip,$barra){
           $this->transformaIp($ip);
           $chave = $this->sanitizarIp();
           $chave1 = $this->sanitizarBarra($barra);

           if($chave == FALSE and $chave1 == FALSE){
                echo "Seu IP está Incorreto";
            }elseif($chave == FALSE and $chave1 == TRUE){
                echo "Seu endereço IP está errado";
            }elseif($chave == TRUE and $chave1 == FALSE){
                echo "Seu divisão de sub rede está errada";
            }else{
                $this->classeIp();
                $this->tipoIp();
                $this->qtdSubRedes();
            }

        }

       public function transformaIp($ip){
            $divisor = explode(".",$ip);
             $this->ip = $divisor;
        }

        public function sanitizarIp(){
            $contar = count($this->ip);
            $chave = null;  
            if($contar == 4){
                foreach($this->ip as $value){
                    if($value <= 255){
                        $chave = TRUE;
                        return $chave;
                    }else{
                        $chave = FALSE;
                        return $chave;
                        break;  
                    }
                }
            }else{
                $chave = FALSE;
                return $chave;
            }
        }
        
        public function sanitizarBarra($barra){
            $chave = null;
            if($barra >= 24){
                if($barra <= 32){
                    $chave = TRUE;
                    return $chave;
                    $this->barra = $barra;
                }else{
                   $chave = FALSE;
                   return $chave;
                }
            }else{
                $chave = FALSE;
                return $chave;
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
                        echo "$key <br>";
                    }
                }  
            }
        }

        public function tipoIp(){
            $chave = null;
            $listaDeIps = array(10, 172, 192, 169);
            
            foreach($listaDeIps as $value){
                if($this->ip[0] == $value){
                    $chave = TRUE;
                    break;
                }else{
                    $chave = FALSE;
                }
                
            }
            if($chave == TRUE){
                echo "IP privado <br>";
            }elseif($chave == FALSE){
                echo "IP publico <br>";
            }
        }

        public function qtdSubRedes(){//Problema
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
                    echo "A quantidade de sub-redes possíveis com a  máscara informada é de". $value ."sub-rede <br>";
                }
            }
        }
    }

    $x = new Calculadora('12.1.1.1','32');

   
     
    
  


 
