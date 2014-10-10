<?php

namespace App\ComprasBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ComprasBundle\Entity\UsuarioRepository")
 */
class Usuario extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="puesto", type="string", length=100)
     */
    protected $puesto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreUsuario", type="string", length=50)
     */
    protected $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=25)
     */
    protected $password;
    
   /**
     * @ORM\ManyToOne(targetEntity="Ubicacion", inversedBy="usuarios")
     * @ORM\JoinColumn(name="ubicacion_id", referencedColumnName="id")
     */
    protected $ubicacion;
    
    /**
     * @ORM\OneToMany(targetEntity="PedidoElemento", mappedBy="usuario")
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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     * @return Usuario
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string 
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string 
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set ubicacion
     *
     * @param \App\ComprasBundle\Entity\Ubicacion $ubicacion
     * @return Usuario
     */
    public function setUbicacion(\App\ComprasBundle\Entity\Ubicacion $ubicacion = null)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return \App\ComprasBundle\Entity\Ubicacion 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Add pedidoelementos
     *
     * @param \App\ComprasBundle\Entity\PedidoElemento $pedidoelementos
     * @return Usuario
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
