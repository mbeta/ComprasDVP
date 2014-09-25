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
     * @ORM\OneToMany(targetEntity="PedidoElemento", mappedBy="tipocompra")
     */
    protected $pedidoelementos;

    
    
    
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
     * Constructor
     */
    public function __construct()
    {
        $this->pedidoelementos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set descipcion
     *
     * @param string $descipcion
     * @return TipoCompra
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
     * @return TipoCompra
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
     * @return TipoCompra
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

    /**
     * Add pedidoelementos
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidoelementos
     * @return TipoCompra
     */
    public function addPedidoelemento(\App\ComprasBundle\Entity\PedidoElemento $pedidoelementos)
    {
        $this->pedidoelementos[] = $pedidoelementos;

        return $this;
    }

    /**
     * Remove pedidoelementos
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidoelementos
     */
    public function removePedidoelemento(\App\ComprasBundle\Entity\PedidoElemento $pedidoelementos)
    {
        $this->pedidoelementos->removeElement($pedidoelementos);
    }

    /**
     * Get pedidoelementos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPedidoelementos()
    {
        return $this->pedidoelementos;
    }
}
