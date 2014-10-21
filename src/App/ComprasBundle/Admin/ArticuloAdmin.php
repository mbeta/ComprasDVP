<?php

namespace App\ComprasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArticuloAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('id')
            ->add('codigoRubro', null, array('label'=>'Codigo Rubro'))
            ->add('codigo', null, array('label'=>'Codigo'))
            
            ->add('descripcion', null, array('label'=>'Descripcion'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
//            ->add('id')
            ->add('codigoRubro', null, array('label'=>'Codigo Rubro'))
            ->add('codigo', null, array('label'=>'Codigo'))
            
            ->add('descripcion', null, array('label'=>'Descripcion'))    
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
//            ->add('id')
            ->add('codigoRubro', null, array('label'=>'Codigo Rubro'))
            ->add('codigo', null, array('label'=>'Codigo'))
            
            ->add('descripcion', null, array('label'=>'Descripcion'))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
//            ->add('id')
            ->add('codigoRubro', null, array('label'=>'Codigo Rubro'))
            ->add('codigo', null, array('label'=>'Codigo'))
            
            ->add('descripcion', null, array('label'=>'Descripcion'))
        ;
    }
}
