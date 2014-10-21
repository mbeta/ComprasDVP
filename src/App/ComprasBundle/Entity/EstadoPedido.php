<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoPedido
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\EstadoPedidoRepository")
 */
class EstadoPedido
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
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;
    
    /**
     * @ORM\OneToMany(targetEntity="PedidoElemento", mappedBy="estadopedido")
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
     * Get toString
     *
     * @return string 
     */
    public function __toString()
    {
        return ($this->getDescripcion()) ? : '';
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return EstadoPedido
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
     * Set observacion
     *
     * @param string $observacion
     * @return EstadoPedido
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
}
