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
            ->add('tipocompra', 'entity', array('class' => 'App\ComprasBundle\Entity\TipoCompra'))
            ->add('estadoPedido', 'entity', array('class' => 'App\ComprasBundle\Entity\estadoPedido'))
            ->add('usuario', 'entity', array('class' => 'App\ComprasBundle\Entity\Usuario'))
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
            ->add('tipocompra')
            ->add('estadoPedido')  
            ->add('usuario')
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
            ->add('tipocompra') 
            ->add('estadoPedido')   
            ->add('usuario')
        ;
    }
    
    
}

