<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Atendimento\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Atendimento\Form\SolicitanteForm;

class SolicitanteController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function incluirAction()
    {
        $form = new SolicitanteForm();
        $form->setAttribute('action', $this->url()->fromRoute('atendimento',['controller' => 'solicitante','action' => 'gravar']));
        return new ViewModel(['form' => $form]);
    }    
}
