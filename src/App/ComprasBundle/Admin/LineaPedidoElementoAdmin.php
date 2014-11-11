<?php

namespace App\ComprasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class LineaPedidoElementoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('id')
            ->add('articulo', null, array('label'=>'Artículo'))
//            ->add('cantidad', null, array('label'=>'Cantidad'))
//            ->add('precioUnitario', null, array('label'=>'Precio Unitario'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
//            ->add('id')
            ->add('articulo', null, array('label'=>'Artículo'))
            ->add('cantidad', null, array('label'=>'Cantidad'))
            ->add('precioUnitario', null, array('label'=>'Precio Unitario'))
            ->add('subtotal', 'text', array('label'=>'Subtotal', 'mapped'=>false, 'required'=>false, 
                'read_only'=>true))
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
//            ->add('id','sonata_type_model_hidden')
            ->add('articulo', 'sonata_type_model_autocomplete', array('property'=>'descripcion',
                'label'=>'Artículo', 'class'=>'App\ComprasBundle\Entity\Articulo'))
            ->add('cantidad', 'integer', array( 'label'=>'Cantidad'))
            ->add('precioUnitario', null, array('label'=>'Precio Unitario'))
            ->add('subtotal', 'text', array('label'=>'Subtotal', 'required'=>false,
                'read_only'=>true))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
//            ->add('id')
            ->add('articulo', null, array('label'=>'Artículo', 'route'=>array('name'=>'show')))
            ->add('cantidad', null, array('label'=>'Cantidad'))
            ->add('precioUnitario', null, array('label'=>'Precio Unitario'))
            ->add('subtotal', 'text', array('label'=>'Subtotal', 'mapped'=>false, 'required'=>false, 
                'read_only'=>true))        
           
            ;
    }
}
