<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubicacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\UbicacionRepository")
 */
class Ubicacion
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
     * @ORM\Column(name="descripcion", type="string", length=50)
     */
    private $descripcion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Delegacion", inversedBy="ubicaciones")
     * @ORM\JoinColumn(name="delegacion_id", referencedColumnName="id")
     */
    protected $delegacion;
    
    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="ubicacion")
     */
    protected $usuarios;

    
    /**
     * @ORM\ManyToMany(targetEntity="PedidoElemento", mappedBy="ubicaciones")
     */
    private $pedidos;


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
     * Get toString
     *
     * @return string 
     */
    public function __toString()
    {
        return ($this->getDescripcion()) ? : '';
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pedidos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Ubicacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set delegacion
     *
     * @param \App\ComprasBundle\Entity\Delegacion $delegacion
     * @return Ubicacion
     */
    public function setDelegacion(\App\ComprasBundle\Entity\Delegacion $delegacion = null)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return \App\ComprasBundle\Entity\Delegacion 
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Add usuarios
     *
     * @param \App\ComprasBundle\Entity\Usuario $usuarios
     * @return Ubicacion
     */
    public function addUsuario(\App\ComprasBundle\Entity\Usuario $usuarios)
    {
        $this->usuarios[] = $usuarios;

        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \App\ComprasBundle\Entity\Usuario $usuarios
     */
    public function removeUsuario(\App\ComprasBundle\Entity\Usuario $usuarios)
    {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    /**
     * Add pedidos
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidos
     * @return Ubicacion
     */
    public function addPedido(\App\ComprasBundle\Entity\PedidoElementos $pedidos)
    {
        $this->pedidos[] = $pedidos;

        return $this;
    }

    /**
     * Remove pedidos
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidos
     */
    public function removePedido(\App\ComprasBundle\Entity\PedidoElemento $pedidos)
    {
        $this->pedidos->removeElement($pedidos);
    }

    /**
     * Get pedidos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPedidos()
    {
        return $this->pedidos;
    }
}
