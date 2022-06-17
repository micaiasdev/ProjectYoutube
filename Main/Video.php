<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Video
 *
 * @author Micaias
 */
require_once './AcoesVideo.php';
class Video implements AcoesVideo
{

    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function like()
    {
        $this->curtidas++;
    }

    public function pause()
    {
        $this->reproduzindo = false;
    }

    public function play()
    {
        $this->reproduzindo = true;
    }
    //GETTERS AND SETTERS
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao): void
    {
        $this->avaliacao = ($this->avaliacao += $avaliacao) / $this->views;
    }

    public function setViews($views): void
    {
        $this->views = $views;
    }

    public function setCurtidas($curtidas): void
    {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }
}
