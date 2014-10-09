<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace App\ComprasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UsuarioAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre', 'text', array('label' => 'Nombre', 'required' => true) ) 
            ->add('puesto') 
            ->add('nombreUsuario')
            ->add('password')
            ->add('ubicacion', 'entity', array('class' => 'App\ComprasBundle\Entity\Ubicacion'))
                
                
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')  
            ->add('puesto') 
            ->add('nombreUsuario')
            ->add('password')
            ->add('ubicacion')
                
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')  
            ->add('puesto') 
            ->add('nombreUsuario')
            ->add('password')
            ->add('ubicacion')
                
        ;
    }
    
    
}