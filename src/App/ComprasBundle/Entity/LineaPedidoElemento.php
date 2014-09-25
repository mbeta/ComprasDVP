<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LineaPedidoElemento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\LineaPedidoElementoRepository")
 */
class LineaPedidoElemento
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
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="precioUnitario", type="decimal")
     */
    private $precioUnitario;
    
    /**
     * @ORM\ManyToOne(targetEntity="Articulo", inversedBy="lineasPedidoElemento")
     * @ORM\JoinColumn(name="articulo_id", referencedColumnName="id")
     */
    protected $articulo;


     /**
     * @ORM\ManyToOne(targetEntity="PedidoElemento", inversedBy="lineas")
     * @ORM\JoinColumn(name="pedidoelemento_id", referencedColumnName="id")
     */
    protected $pedidoelemento;
    
    
    
    
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return LineaPedidoElemento
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precioUnitario
     *
     * @param string $precioUnitario
     * @return LineaPedidoElemento
     */
    public function setPrecioUnitario($precioUnitario)
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    /**
     * Get precioUnitario
     *
     * @return string 
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set articulo
     *
     * @param \App\ComprasBundle\Entity\Articulo $articulo
     * @return LineaPedidoElemento
     */
    public function setArticulo(\App\ComprasBundle\Entity\Articulo $articulo = null)
    {
        $this->articulo = $articulo;

        return $this;
    }

    /**
     * Get articulo
     *
     * @return \App\ComprasBundle\Entity\Articulo 
     */
    public function getArticulo()
    {
        return $this->articulo;
    }

    /**
     * Set pedidoelemento
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidoelemento
     * @return LineaPedidoElemento
     */
    public function setPedidoelemento(\App\ComprasBundle\Entity\PedidoElemento $pedidoelemento = null)
    {
        $this->pedidoelemento = $pedidoelemento;

        return $this;
    }

    /**
     * Get pedidoelemento
     *
     * @return \App\ComprasBundle\Entity\PedidoElemento 
     */
    public function getPedidoelemento()
    {
        return $this->pedidoelemento;
    }
}
