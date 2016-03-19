<?php

class TasksController extends AppController {
    // public $scaffold;//scaffoldはコメントアウト

    public $helpers = array('Html','Form');
    public function index()
    {
        $options = array(
            //未完了タスクだけ statusが0のレコード
            'conditions' => array(
                'Task.status' => 0
                )
            );
        $tasks = $this->Task->find('all' , $options);

        $this->set('tasks', $tasks);
    }

}