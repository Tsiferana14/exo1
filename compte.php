<?php
class Compte {
    private $solde;

    public function _construct($soldeInitial){
        $this->solde=$soldeInitial;
    }
    public function getSolde(){
        return $this->solde;
    }
    public function setSolde($nouveauSolde){
        $this->solde=$nouveauSolde;
    }
    public function deposer($montant){
        $this->solde+=$montant;
    }
    public function retirer($montant){
        if ($montant<=$this->solde){
            $this ->solde-=$montant;
        }else{
            echo "Fonds insuffisants\n";
        }
    }
    public function toString(){
        return "Votre solde est $this->solde";
    }
}?>
