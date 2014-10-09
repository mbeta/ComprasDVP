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
     * @ORM\ManyToOne(targetEntity="EstadoPedido", inversedBy="pedidoelementos")
     * @ORM\JoinColumn(name="estadopedido_id", referencedColumnName="id")
     */
    protected $estadopedido;


    
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
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="pedidoelementos")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;
    
    

    
    /**
     * @ORM\ManyToMany(targetEntity="PedidoElemento", mappedBy="pedidosabsorbidos")
     */  
    protected $absorbidopor;
    
     /**
     * @ORM\ManyToMany(targetEntity="PedidoElemento", inversedBy="absorbidopor")
     * @ORM\JoinTable(name="Absorbidos",
     *      joinColumns={@ORM\JoinColumn(name="pedido_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="absorbido_id", referencedColumnName="id")}
     *      )
     */  
    protected $pedidosabsorbidos;
    
    
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
        $this->lineas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->absorbidopor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pedidosabsorbidos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fechaPedido
     *
     * @param \DateTime $fechaPedido
     * @return PedidoElemento
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
     * @return PedidoElemento
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
     * @return PedidoElemento
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
     * @return PedidoElemento
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
     * @return PedidoElemento
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
     * @return PedidoElemento
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
     * @return PedidoElemento
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
     * @return PedidoElemento
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

    /**
     * Set estadopedido
     *
     * @param \App\ComprasBundle\Entity\EstadoPedido $estadopedido
     * @return PedidoElemento
     */
    public function setEstadopedido(\App\ComprasBundle\Entity\EstadoPedido $estadopedido = null)
    {
        $this->estadopedido = $estadopedido;

        return $this;
    }

    /**
     * Get estadopedido
     *
     * @return \App\ComprasBundle\Entity\EstadoPedido 
     */
    public function getEstadopedido()
    {
        return $this->estadopedido;
    }

    /**
     * Set tipocompra
     *
     * @param \App\ComprasBundle\Entity\TipoCompra $tipocompra
     * @return PedidoElemento
     */
    public function setTipocompra(\App\ComprasBundle\Entity\TipoCompra $tipocompra = null)
    {
        $this->tipocompra = $tipocompra;

        return $this;
    }

    /**
     * Get tipocompra
     *
     * @return \App\ComprasBundle\Entity\TipoCompra 
     */
    public function getTipocompra()
    {
        return $this->tipocompra;
    }

    /**
     * Add lineas
     *
     * @param \App\ComprasBundle\Entity\LineaPedidoElemento $lineas
     * @return PedidoElemento
     */
    public function addLinea(\App\ComprasBundle\Entity\LineaPedidoElemento $lineas)
    {
        $this->lineas[] = $lineas;

        return $this;
    }

    /**
     * Remove lineas
     *
     * @param \App\ComprasBundle\Entity\LineaPedidoElemento $lineas
     */
    public function removeLinea(\App\ComprasBundle\Entity\LineaPedidoElemento $lineas)
    {
        $this->lineas->removeElement($lineas);
    }

    /**
     * Get lineas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineas()
    {
        return $this->lineas;
    }

    /**
     * Set usuario
     *
     * @param \App\ComprasBundle\Entity\TipoCompra $usuario
     * @return PedidoElemento
     */
    public function setUsuario(\App\ComprasBundle\Entity\TipoCompra $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \App\ComprasBundle\Entity\TipoCompra 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add absorbidopor
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $absorbidopor
     * @return PedidoElemento
     */
    public function addAbsorbidopor(\App\ComprasBundle\Entity\PedidoElemento $absorbidopor)
    {
        $this->absorbidopor[] = $absorbidopor;

        return $this;
    }

    /**
     * Remove absorbidopor
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $absorbidopor
     */
    public function removeAbsorbidopor(\App\ComprasBundle\Entity\PedidoElemento $absorbidopor)
    {
        $this->absorbidopor->removeElement($absorbidopor);
    }

    /**
     * Get absorbidopor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbsorbidopor()
    {
        return $this->absorbidopor;
    }

    /**
     * Add pedidosabsorbidos
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidosabsorbidos
     * @return PedidoElemento
     */
    public function addPedidosabsorbido(\App\ComprasBundle\Entity\PedidoElemento $pedidosabsorbidos)
    {
        $this->pedidosabsorbidos[] = $pedidosabsorbidos;

        return $this;
    }

    /**
     * Remove pedidosabsorbidos
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidosabsorbidos
     */
    public function removePedidosabsorbido(\App\ComprasBundle\Entity\PedidoElemento $pedidosabsorbidos)
    {
        $this->pedidosabsorbidos->removeElement($pedidosabsorbidos);
    }

    /**
     * Get pedidosabsorbidos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPedidosabsorbidos()
    {
        return $this->pedidosabsorbidos;
    }
    
    public function __toString() {
    return $this->nroPedido ? $this->nroPedido : '';
}
}
