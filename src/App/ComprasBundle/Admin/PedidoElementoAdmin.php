<?php

namespace App\ComprasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use App\ComprasBundle\Entity\TipoCompra;



class PedidoElementoAdmin extends Admin

{
    
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('id')
            ->add('nroPedido', null, array('label'=>'Nro de Pedido'))
            ->add('fechaPedido')
            ->add('nroActuacion')
            ->add('tipocompra', null, array('label'=>'Tipo Compra'))
            ->add('estadopedido', null, array('label'=>'Estado'))
            ->add('autorizado')


        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
//            ->add('id')
            ->addIdentifier('nroPedido', null, array('label'=>'Nro de Pedido'))
            ->add('fechaPedido', null, array('label'=>'Fecha de Pedido'))
            ->add('referencia', null, array('label'=>'Referencia'))
//            ->add('observacion', null, array('label'=>'Observación'))
            ->add('nroActuacion', null, array('label'=>'Nro de Actuación'))
            ->add('tipocompra', null, array('label'=>'Tipo Compra'))
            ->add('estadopedido', null, array('label'=>'Estado'))
            ->add('autorizado', null, array('label'=>'Autorización'))
            ->add('ley', null, array('label'=>'Ley'))
            ->add('fechaAutorizado', null, array('label'=>'Fecha Autorizacion'))
            ->add('total', 'text', array( 'mapped'=>false, 'required'=>false,
                'disabled'=>true, 'read_only'=>true))
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
        
        $pedido = $this->getSubject();
        if($pedido->getId()!=null){
        $query = $this->modelManager->getEntityManager('AppComprasBundle:TipoCompra')
                ->createQueryBuilder() ->add('select', 'u') 
                ->add('from', 'AppComprasBundle:TipoCompra u')
                ->add('where','u.montoMin<=:total')
                ->add('where','u.montoMax>=:total');
                $query->setParameter('total', $pedido->getTotal());
//                $pedido->setTipoCompra(($this->modelManager->executeQuery($query)));
                
        $formMapper->with('Cabecera Pedido')
                ->add('tipocompra',null, array('label'=>false,'query_builder' => $query,
                    'disabled'=>true,'read_only'=>true, 'required' => true))
//                ->add('tipocompra', null, array('label'=>'Tipo Compra',
//                     'required' => true))
                ->end();               }
       
        
        $formMapper
            ->with('Cabecera Pedido')
//                ->add('id')
                ->add('nroPedido', null, array('label'=>'Nro de Pedido'))
                ->add('fechaPedido', 'date',array('label' => 'Fecha Pedido', 
                                        'widget' => 'single_text','required' => false,
                                        'attr' => array('class' => 'datepicker')))               
                ->add('referencia', null, array('label'=>'Referencia'))
                ->add('observacion', null, array('label'=>'Observación'))
                ->add('nroActuacion', null, array('label'=>'Nro de Actuación'))
//                ->add('tipocompra', null, array('label'=>'Tipo Compra','query_builder' => $query,
//                 'read_only'=>true, 'disabled' => true, 'required' => true))
                ->add('estadopedido', null, array('label'=>'Estado', 'class'=>'App\ComprasBundle\Entity\EstadoPedido'))
                ->add('autorizado', null, array('label'=>'Autorización'))
                ->add('ley', 'choice', array('label'=>'Ley','choices'=>array(
                                                    '3308'=>'Ley Obras Publicas', 
                                                    '1050'=>'Ley Contratacion'),
                                              'required' => false))
                ->add('fechaAutorizado', 'date',array('label' => 'Fecha Autorizado', 
                                            'widget' => 'single_text','required' => false,
                                            'attr' => array('class' => 'datepicker')))
            ->end()
            ->with('Detalle Pedido',array('collapsed' => true))
                ->add('lineas', 'sonata_type_collection', array('label'=>'Lineas'), 
                        array('edit'=>'inline', 'inline'=>'table'))
            ->end()
                
            ->with('Pedidos Absordidos')         
                ->add('pedidosabsorbidos')
            ->end()
                
            ->with('Total')
                ->add('total', 'text', array(  'required'=>false,
                'disabled'=>false, 'read_only'=>true))  
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
//                ->add('id')
                ->add('nroPedido', null, array('label'=>'Nro de Pedido'))
                ->add('fechaPedido', null, array('label'=>'Fecha de Pedido'))
                ->add('referencia', null, array('label'=>'Referencia'))
                ->add('observacion', null, array('label'=>'Observación'))
                ->add('nroActuacion', null, array('label'=>'Nro de Actuación'))
                ->add('tipocompra', null, array('label'=>'Tipo Compra'))
                ->add('estadopedido', null, array('label'=>'Estado'))
                ->add('autorizado', null, array('label'=>'Autorización'))
                ->add('ley', null, array('label'=>'Ley'))
                ->add('fechaAutorizado', null, array('label'=>'Fecha Autorizacion'))
            ->end()
            ->with('Detalle Pedido', array('collapsed' => true))
                ->add('lineas', 'sonata_type_collection', array('label'=>'Lineas',
                    'route'=>array('name'=>'show')),array('edit'=>'inline',
                                                            'inline'=>'table')) 
            ->end()
                
                
             ->with('Total')              
              ->add('total', null, array( 'mapped'=>false, 'required'=>false,
                'disabled'=>true, 'read_only'=>true))
                
             ->end()
          
            
        ;
    }
    
    
    
      //code…
 
    public function prePersist($pedido) {
        //asigno id de pedido de elemento en las lineas para las claves foraneas
        foreach ($pedido->getLineas() as $linea) {
            $linea->setPedidoElemento($pedido);
                 
        }
//        
//       
    }
//    
    public function preUpdate($pedido) {
        //code ...
        foreach ($pedido->getLineas() as $linea) {
            $linea->setPedidoElemento($pedido);     
        }
        
    }
    
  
    
   
    
}
