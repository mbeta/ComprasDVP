<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\ArticuloRepository")
 */
class Articulo
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
     * @ORM\Column(name="descripcion", type="string", length=100)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=25, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoRubro", type="string", length=25, nullable=true)
     */
    private $codigoRubro;
    
    /**
     * @ORM\OneToMany(targetEntity="LineaPedidoElemento", mappedBy="articulo")
     */
    protected $lineasPedidoElemento;


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
     * @return Articulo
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
     * Set codigo
     *
     * @param string $codigo
     * @return Articulo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codigoRubro
     *
     * @param string $codigoRubro
     * @return Articulo
     */
    public function setCodigoRubro($codigoRubro)
    {
        $this->codigoRubro = $codigoRubro;

        return $this;
    }

    /**
     * Get codigoRubro
     *
     * @return string 
     */
    public function getCodigoRubro()
    {
        return $this->codigoRubro;
    }
}
