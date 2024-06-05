<?php

declare (strict_types = 1);

class Message {
    private const INTRO ='Mr ' ;
    private string $Nom = 'Pago' ;
    private string $Prenom =' Adrien';

    public function getInformationUser(): string{
        return self:: INTRO. $this -> Nom . $this -> Prenom  ;

    }
}

$infoPerso = new Message ;

echo $infoPerso ->  getInformationUser() ; 

