<?php 

class DispositivoElectronico {
protected $nombre;
protected $consumoElectrico;

public function __construct($nombre,$consumoElectrico) {
$this->nombre = $nombre;
$this->consumoElectrico = $consumoElectrico
}

public function getInfo() {
    return "El dispositivo $this->nombre tiene un consumo eléctrico de $this->consumoElectrico watts";
}

public function getConsumoElectrico() {
    return $this->consumoElectrico;
}



}

class Television extends DispositivoElectronico {
    public function getInfo() {
        return "El dispositivo $this->nombre tiene un consumo eléctrico de $this->consumoElectrico watts y es una televisión";
    }
}

class Computadora extends DispositivoElectronico {
    protected $sistemaOperativo;

    public function __construct($nombre, $consumoElectrico, $sistemaOperativo) {
        parent::__construct($nombre, $consumoElectrico);
        $this->sistemaOperativo = $sistemaOperativo;
    }
    public function getSistemaOperativo() {
    return $this->sistemaOperativo;
    }
}

$television = new Television("Samsung", 100);
echo $television->getInfo() . "<br>";
echo $television->getConsumoElectrico() . " watts<hr>";
$computadora = new Computadora("HP", 500, "Windows");
echo $computadora->getInfo() . "<br>";
echo $computadora->getSistemaOperativo();
?>