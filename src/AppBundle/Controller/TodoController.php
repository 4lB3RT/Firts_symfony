<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/03/17
 * Time: 18:57
 */

namespace AppBundle\Controller;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Mapping as ORM;
use src\AppBundle\Entity\Task;

class TodoController
{
    public function createAction(Request $request){
        $task= new task;
        $form= $this->createFormBuilder($task)
                    ->add('description',TextType::class,array('attr'=>array('class'=>'form_control','style'=>'manrgin-bottom:15px')));
        return $this->render('todo/create.html.twig',['task'=>$task]);
    }

    public function detailsAction($id,Request $request){
        $task=$this->getDoctrine()->getRepository('AppBundle:Task')->find($id);
        return $this->render('todo/details.html.twig');
    }
}