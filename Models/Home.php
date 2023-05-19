<?php
namespace Models;

use Core;

class Home extends Core\Model {
    protected $numeros;
    protected $min;
    protected $max;
    
    ########## EFETUA O SORTEIO ###########################
    public function sortNumeros(){

        if ( isset($_POST) ) { 
            if ( !empty($_POST['s']) ) { 
                $numeros = explode(' - ', $_POST['s']);
                $this->numeros = $numeros;

            }
            if ( !empty($_POST['min']) && !empty($_POST['max']) ) {
                $this->min = (int) $_POST['min'];
                $this->max = (int) $_POST['max'];
            }
            echo $this->gerarNumero();
            
        }
    }
    

    private function gerarNumero(){
        $numero = rand($this->min, $this->max);
        if ( !empty($this->numeros) && count($this->numeros) < $this->max ) {
            while(in_array($numero, $this->numeros)) {
                $numero = rand($this->min, $this->max);
            }
        } else {
            if ( count((array)$this->numeros) >= $this->max ) {
                $numero = '---';
            }
        }
        return $numero;
    }
    ########## EFETUA O SORTEIO ###########################
}
?>