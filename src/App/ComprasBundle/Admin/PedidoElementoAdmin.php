<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace App\ComprasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PedidoElementoAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('fechaPedido')  
            ->add('referencia') 
            ->add('nroPedido') 
            ->add('observacion')
            ->add('nroActuacion')
            ->add('autorizado')
            ->add('ley')
            ->add('fechaAutorizado')
            ->add('estadoPedido', 'entity', array('class' => 'App\ComprasBundle\Entity\estadoPedido'))
            ->add('tipocompra', 'entity', array('class' => 'App\ComprasBundle\Entity\TipoCompra'))
            ->add('lineas', 'entity', array('class'=>'App\ComprasBundle\Entity\LineaPedidoElemento'))
            ->add('usuario', 'entity', array('class' => 'App\ComprasBundle\Entity\Usuario'))
            ->add('absorbidopor', 'entity', array('class'=> 'App\ComprasBundle\Entity\PedidoElemento'))
            ->add('pedidosabsorbidos', 'entity',array('class'=>'App\ComprasBundle\Entity\PedidoElemento'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fechaPedido')  
            ->add('referencia') 
            ->add('nroPedido') 
            ->add('observacion')
            ->add('nroActuacion')
            ->add('autorizado')
            ->add('ley')
            ->add('fechaAutorizado')
            ->add('estadoPedido') 
            ->add('tipocompra')
            ->add('lineas')
            ->add('usuario')
            ->add('absorbidopor')
            ->add('pedidosabsorbidos')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('fechaPedido')  
            ->add('referencia') 
            ->add('nroPedido') 
            ->add('observacion')
            ->add('nroActuacion')
            ->add('autorizado')
            ->add('ley')
            ->add('fechaAutorizado')
            ->add('estadoPedido') 
            ->add('tipocompra') 
            ->add('lineas') 
            ->add('usuario')
            ->add('absorbidopor')
            ->add('pedidosabsorbidos')
        ;
    }
    
    
}

