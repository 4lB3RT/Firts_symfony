<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/03/17
 * Time: 18:52
 */
class TaskRepository
{

    public function listAction(Request $request){
        $em=$this->getDoctrine()->getManager();

    }

}