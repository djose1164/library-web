<?php
class Book {
    private $tituloId;
    private $titulo;
    private $precio;

    public function setTituloId($tituloId) {
        $this->tituloId = $tituloId;
    }

    public function tituloId() {
        return $this->tituloId;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function titulo() {
        return $this->titulo;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function precio() {
        return $this->precio;
    }
}