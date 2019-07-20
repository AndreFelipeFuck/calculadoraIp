<?php
    class Calculadora{
        public $ip;

       public function transformaIp(){// deixar isso no contruct?
            $divisor = explode(".",$this->ip);
           $this->ip = $divisor;
        }
        public function sanitizar(){
            foreach($this->ip as $value){
                if($value <= 255){
                    echo 'Tudo certo chefe ## ';
                }else{
                    echo 'Seu IP está incorreto!';
                    break;  
                }
            }
        }
    }

 /*   $x = new Calculadora;
    $x->ip = '255.256.255.255';
    $x->transformaIp();
    $x->sanitizar();
     print_r($x);
    echo ' ###########=> ';
    echo $x->ip[3];
*/