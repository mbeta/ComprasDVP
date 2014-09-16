<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidoElemento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\PedidoElementoRepository")
 */
class PedidoElemento
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pedido", type="date")
     */
    private $fechaPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=500)
     */
    private $referencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro_pedido", type="integer")
     */
    private $nroPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=500)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_actuacion", type="string", length=255)
     */
    private $nroActuacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autorizado", type="boolean")
     */
    private $autorizado;

    /**
     * @var string
     *
     * @ORM\Column(name="ley", type="string", length=255)
     */
    private $ley;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_autorizado", type="date")
     */
    private $fechaAutorizado;


    
     /**
     * @ORM\ManyToOne(targetEntity="TipoCompra", inversedBy="pedidoelementos")
     * @ORM\JoinColumn(name="tipocompra_id", referencedColumnName="id")
     */
    protected $tipocompra;
    
    
    
    /**
     * @ORM\OneToMany(targetEntity="LineaPedidoElemento", mappedBy="pedidoelemento")
     */
    protected $lineas;

    
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
     * Set fechaPedido
     *
     * @param \DateTime $fechaPedido
     * @return Pedido_elemento
     */
    public function setFechaPedido($fechaPedido)
    {
        $this->fechaPedido = $fechaPedido;

        return $this;
    }

    /**
     * Get fechaPedido
     *
     * @return \DateTime 
     */
    public function getFechaPedido()
    {
        return $this->fechaPedido;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Pedido_elemento
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set nroPedido
     *
     * @param integer $nroPedido
     * @return Pedido_elemento
     */
    public function setNroPedido($nroPedido)
    {
        $this->nroPedido = $nroPedido;

        return $this;
    }

    /**
     * Get nroPedido
     *
     * @return integer 
     */
    public function getNroPedido()
    {
        return $this->nroPedido;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Pedido_elemento
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set nroActuacion
     *
     * @param string $nroActuacion
     * @return Pedido_elemento
     */
    public function setNroActuacion($nroActuacion)
    {
        $this->nroActuacion = $nroActuacion;

        return $this;
    }

    /**
     * Get nroActuacion
     *
     * @return string 
     */
    public function getNroActuacion()
    {
        return $this->nroActuacion;
    }

    /**
     * Set autorizado
     *
     * @param boolean $autorizado
     * @return Pedido_elemento
     */
    public function setAutorizado($autorizado)
    {
        $this->autorizado = $autorizado;

        return $this;
    }

    /**
     * Get autorizado
     *
     * @return boolean 
     */
    public function getAutorizado()
    {
        return $this->autorizado;
    }

    /**
     * Set ley
     *
     * @param string $ley
     * @return Pedido_elemento
     */
    public function setLey($ley)
    {
        $this->ley = $ley;

        return $this;
    }

    /**
     * Get ley
     *
     * @return string 
     */
    public function getLey()
    {
        return $this->ley;
    }

    /**
     * Set fechaAutorizado
     *
     * @param \DateTime $fechaAutorizado
     * @return Pedido_elemento
     */
    public function setFechaAutorizado($fechaAutorizado)
    {
        $this->fechaAutorizado = $fechaAutorizado;

        return $this;
    }

    /**
     * Get fechaAutorizado
     *
     * @return \DateTime 
     */
    public function getFechaAutorizado()
    {
        return $this->fechaAutorizado;
    }
}
