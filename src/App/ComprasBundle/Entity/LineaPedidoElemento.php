<?php

namespace App\ComprasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LineaPedidoElemento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LineaPedidoElementoRepository")
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
     * @var decimal
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
     * @var decimal
     *
     */
    protected $subtotal = 0;
    
    
    
    


    /**
     * Get subtotal
     *
     * @return string 
     */
    public function getSubtotal()
    {
        $this->subtotal = ($this->cantidad * $this->precioUnitario);
        
        return $this-> subtotal;
        
        
    }
    
    /**
     * Set subtotal
     * 
     */
//    private function calcularSubtotal()
//    {
//       
////        if(($this->cantidad == null)){
////            $this->subtotal = 0;
////        }elseif($this->precioUnitario==null){
////                $this->subtotal=0;
////            }else{
////                $this->subtotal=($this->cantidad * $this->precioUnitario);
////            
////        }
////            
//        
//    }
    
    
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
//        $this->calcularSubtotal();
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
//        $this->calcularSubtotal();
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
     * @param Articulo $articulo
     * @return LineaPedidoElemento
     */
    public function setArticulo(Articulo $articulo = null)
    {
        $this->articulo = $articulo;

        return $this;
    }

    /**
     * Get articulo
     *
     * @return Articulo 
     */
    public function getArticulo()
    {
        return $this->articulo;
    }

    /**
     * Set pedidoelemento
     *
     * @param PedidoElemento $pedidoelemento
     * @return LineaPedidoElemento
     */
    public function setPedidoelemento(PedidoElemento $pedidoelemento = null)
    {
        $this->pedidoelemento = $pedidoelemento;

        return $this;
    }

    /**
     * Get pedidoelemento
     *
     * @return PedidoElemento 
     */
    public function getPedidoelemento()
    {
        return $this->pedidoelemento;
    }
    
    
     /**
     * Get toString
     *
     * @return integer 
     */
    public function __toInteger() {
    return $this->id ? $this->id: '';
    }

     /**
     * Get toString
     *
     * @return string
     */
    public function __toString() {
    return $this->articulo ? $this->articulo: '';
    }
}
