<?php
    class Calculadora{
        public $ip;
        public $barra;

        public function __construct($ip,$barra){
           $this->transformaIp($ip);
           $this->sanitizar();
           $this->sanitizarBarra($barra);

            //$this->classeIp();
            //$this->tipoIp();
            //$this->qtdSubRedes();
           
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
            $flag = null;
            
            foreach($listaDeIps as $value){
                if($this->ip[0] == $value){
                   $flag = 1;
                    break;
                }elseif($this->ip[0] != $value){
                    $flag = 0;
                    continue;
                }
            }

             if($flag == 1){
                    echo 'IP privado';
                }
                elseif($flag == 0) {
                    echo 'IP público';
                }

            /*for ($i=0; $i<sizeof($listaDeIps); $i++) {
               

                if($this->ip[0] == $listaDeIps[$i]){   
                    $flag = 1;
                }
                i
                
            } */

            /*$key = array_search('$this->ip[0]', $listaDeIps);
            if ($key != NULL) {
                echo 'IP privado';
            }
            else{
                echo 'IP público'; 
            }*/
           
           //echo $flag;
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
                '32' =>(256)
            );

            foreach($barra as $key => $value){
                if($this->barra == $key){
                    if($value == 1){
                         echo " $value rede";
                    }else{
                        echo " $value redes";
                    }
                   
                }
            }
        }

        public function novaMascara(){
            $barra = array(
                '24' =>(0),
                '25' =>(128),
                '26' =>(192),
                '27' =>(224),
                '28' =>(240),
                '29' =>(248),
                '30' =>(252),
                '31' =>(254),
                '32' =>(255)
            );
            foreach ($barra as $key => $value) {
               if ($this->barra == $key) {
                   echo " 255.255.255.$value";
               }
            }
        }

        public function qtdNumeroHots(){
             $barra = array(
                '24' =>(8),
                '25' =>(7),
                '26' =>(6),
                '27' =>(5),
                '28' =>(4),
                '29' =>(3),
                '30' =>(2),
                '31' =>(1),
                '32' =>(0)
            );

             foreach ($barra as $key => $value) {
                if( $this->barra == $key){
                    $hosts = pow(2, $value) - (2);
                    echo $hosts;
                }
             }
         }

        public function endRedeBrod(){
                $numero = 0;
                $broadcast = 0;
                $rede = 0;
                $endereco = array(
                    'rede'=>array(),
                    'broadcast'=>array()
                );
                array_push($endereco['rede'], $rede);
                 $barra = array(
                    '24' =>(8),
                    '25' =>(7),
                    '26' =>(6),
                    '27' =>(5),
                    '28' =>(4),
                    '29' =>(3),
                    '30' =>(2),
                    '31' =>(1),
                    '32' =>(0)
                );
                 foreach ($barra as $key => $value) {
                    if( $this->barra == $key){
                        $hosts = pow(2, $value) - (2);
                        $divisor = 256/pow(2, $value);
                    }
                           
                 }
                 $divisor = $divisor - 1;
                do {
                    $broadcast = $rede + $hosts + 1;
                    array_push($endereco['broadcast'], $broadcast);
                    $rede = $broadcast + 1;
                    array_push($endereco['rede'], $rede);
                    $numero++;
                } while ($numero <= $divisor);
                if (end($endereco['rede']) == 256 ) {
                    array_pop($endereco['rede']);
                }
            return $endereco;
        }

        public function priEndHost(){
            $endereco = $this->endRedeBrod();
            $hosts = array();
            $host = 0;
            foreach ($endereco['rede'] as $key => $value) {
                $host = $value + 1;
                array_push($hosts, $host);
            }
            return $hosts;
        }

        public function ultiEndHost(){
            $endereco = $this->endRedeBrod();
            $hosts = array();
            $host = 0;
            foreach ($endereco['broadcast'] as $key => $value) {
                $host = $value - 1;
                array_push($hosts, $host);
            }
            return $hosts;
        }
    }

    $ip = $_POST['ip'];
    $barra = $_POST['barra'];
    $calc = new Calculadora($ip, $barra);
    $endereco = $calc->endRedeBrod();
    $host = $calc->priEndHost();
    $ultHost = $calc->ultiEndHost();
    include 'result.php';

  


 
