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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
}
