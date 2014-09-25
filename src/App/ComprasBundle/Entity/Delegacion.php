<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delegacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\DelegacionRepository")
 */
class Delegacion
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
     * @ORM\Column(name="descripcion", type="string", length=25)
     */
    private $descripcion;
    
    /**
     * @ORM\OneToMany(targetEntity="Ubicacion", mappedBy="delegacion")
     */
    protected $ubicaciones;


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
        $this->ubicaciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Delegacion
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
     * Add ubicaciones
     *
     * @param \App\ComprasBundle\Entity\Ubicacion $ubicaciones
     * @return Delegacion
     */
    public function addUbicacione(\App\ComprasBundle\Entity\Ubicacion $ubicaciones)
    {
        $this->ubicaciones[] = $ubicaciones;

        return $this;
    }

    /**
     * Remove ubicaciones
     *
     * @param \App\ComprasBundle\Entity\Ubicacion $ubicaciones
     */
    public function removeUbicacione(\App\ComprasBundle\Entity\Ubicacion $ubicaciones)
    {
        $this->ubicaciones->removeElement($ubicaciones);
    }

    /**
     * Get ubicaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUbicaciones()
    {
        return $this->ubicaciones;
    }
}
