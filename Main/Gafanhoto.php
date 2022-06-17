<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Gafanhoto
 *
 * @author Micaias
 */
require_once './Pessoa.php';
class Gafanhoto extends Pessoa{
   
    private $login, $totAssistido;
    
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    public function viuMaisUm(){
        $this->totAssistido ++;
    }
    
    public function ganharExp($n){
        $this->experiencia += $n;   
    }
    // GETTERS AND SETTERS
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void {
        $this->totAssistido = $totAssistido;
    }



}
