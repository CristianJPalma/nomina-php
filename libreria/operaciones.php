<?php 
     class Operaciones{
        private $numDias;
        private $valorDia;
        public $salarioPersona;
        public $salud;
        public $subTransporte;
        public $pension;
        public $arl;
        public $retencion;
        public $deducible;
        public $pagoTotal;
        public function __construct(Numero $numDias, Numero $valorDia){
            $this->numDias = $numDias;
            $this->valorDia = $valorDia;
        }
        public function salario(){
            $this->salarioPersona = $this->numDias->getValor() * $this->valorDia->getValor();
            return $this->salarioPersona;
        }
        public function salud(){
            $this->salud = $this->salarioPersona * 0.12;
            return $this->salud;
        }
        public $salarioMinimo = 1300000;
        public function subTransporte(){
            if ($this->salarioPersona <= ($this->salarioMinimo * 2)) {
                $this->subTransporte = 11400;
            } else{
                $this->subTransporte = 0;
            }
            return $this->subTransporte;
        }
        public function pension(){
            $this->pension = $this->salarioPersona * 0.16;
            return $this->pension;
        }
        public function arl(){
            $this->arl = $this->salarioPersona * 0.052;
            return $this->arl;
        }
        public function retencion(){
            if ($this->salarioPersona <= ($this->salarioMinimo * 4)) {
                $this->retencion = $this->salarioPersona * 0.04;
            } else{
                $this->retencion = 0;
            }
            return $this->retencion;
        }
        public function deducible(){
            $this->deducible = $this->salud + $this->pension + $this->arl + $this->retencion;
            return $this->deducible;
        }
        public function pagoTotal(){
            $this->pagoTotal = $this->salarioPersona + $this->subTransporte - $this->deducible;
            return $this->pagoTotal;
        }
    }
