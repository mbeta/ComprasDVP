<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace App\ComprasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class LineaPedidoElementoAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('cantidad')  
            ->add('precioUnitario')  
            ->add('articulo', 'entity', array('class' => 'App\ComprasBundle\Entity\Articulo')) 
            ->add('pedidoelemento', 'entity', array('class' => 'App\ComprasBundle\Entity\PedidoElemento')) 
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('cantidad')  
            ->add('precioUnitario')  
            ->add('articulo') 
            ->add('pedidoelemento')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('cantidad')  
            ->add('precioUnitario')  
            ->add('articulo') 
            ->add('pedidoelemento')
        ;
    }
}

