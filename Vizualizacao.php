<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Vizualizacao
 *
 * @author Micaias
 */
require_once './Gafanhoto.php';
require_once './Video.php';
class Vizualizacao
{
    private $espectador, $filme;

    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }
    public function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($n)
    {
        $this->filme->setAvaliacao($n);
    }

    public function avaliarPorc($media)
    {
        $n = 0;
        if ($media < 20) {
            $n = 3;
        } else if ($media <= 50) {
            $n = 5;
        } else if ($media <= 90) {
            $n = 8;
        } else {
            $n = 10;
        }
        $this->filme->setAvaliacao($n);
    }

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setEspectador($espectador): void
    {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void
    {
        $this->filme = $filme;
    }
}
