<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCompra
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\TipoCompraRepository")
 */
class TipoCompra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descipcion", type="string", length=255)
     */
    private $descipcion;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_min", type="float")
     */
    private $montoMin;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_max", type="float")
     */
    private $montoMax;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descipcion
     *
     * @param string $descipcion
     * @return Tipo_compra
     */
    public function setDescipcion($descipcion)
    {
        $this->descipcion = $descipcion;

        return $this;
    }

    /**
     * Get descipcion
     *
     * @return string 
     */
    public function getDescipcion()
    {
        return $this->descipcion;
    }

    /**
     * Set montoMin
     *
     * @param float $montoMin
     * @return Tipo_compra
     */
    public function setMontoMin($montoMin)
    {
        $this->montoMin = $montoMin;

        return $this;
    }

    /**
     * Get montoMin
     *
     * @return float 
     */
    public function getMontoMin()
    {
        return $this->montoMin;
    }

    /**
     * Set montoMax
     *
     * @param float $montoMax
     * @return Tipo_compra
     */
    public function setMontoMax($montoMax)
    {
        $this->montoMax = $montoMax;

        return $this;
    }

    /**
     * Get montoMax
     *
     * @return float 
     */
    public function getMontoMax()
    {
        return $this->montoMax;
    }
}
