<?php

namespace App\ComprasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PedidoElementoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nroPedido')
            ->add('fechaPedido')
            ->add('referencia')           
            ->add('observacion')
            ->add('nroActuacion')
            ->add('autorizado')
            ->add('ley')
            ->add('fechaAutorizado')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nroPedido')
            ->add('fechaPedido')
            ->add('referencia')           
            ->add('observacion')
            ->add('nroActuacion')
            ->add('autorizado')
            ->add('ley')
            ->add('fechaAutorizado')
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
            ->with('Cabecera Pedido')
                ->add('nroPedido')
                ->add('fechaPedido', 'date', 
                        array('label' => 'Fecha Pedido', 'widget' => 'single_text','required' => false, 
                            'attr' => array('class' => 'datepicker')))
                ->add('referencia')          
                ->add('observacion')
                ->add('nroActuacion')
                ->add('autorizado')
                ->add('ley')
                ->add('fechaAutorizado', 'date', 
                        array('label' => 'Fecha Autorizado', 'widget' => 'single_text','required' => false, 
                            'attr' => array('class' => 'datepicker')))
            ->end()
            ->with('Detalle Pedido')
                 ->add('lineas','sonata_type_collection', array('label'=>'Linea'), 
                                                          array('edit'=>'inLine', 'inLine'=>'table'))
            ->end()
                
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Cabecera Pedido')
                ->add('nroPedido')
                ->add('fechaPedido')
                ->add('referencia')           
                ->add('observacion')
                ->add('nroActuacion')
                ->add('autorizado')
                ->add('ley')
                ->add('fechaAutorizado')
            ->end()
            ->with('Detalle Pedido')
                 ->add('lineas','sonata_type_collection', array('label'=>'Linea', 'route'=>array('name'=>'show')), 
                                                          array('edit'=>'inLine', 'inLine'=>'table'))
            ->end()
        ;
    }
}
