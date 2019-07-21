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

 