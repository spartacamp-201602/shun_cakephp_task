<?php

class TasksController extends AppController {
    // public $scaffold;//scaffoldはコメントアウト

    public $helpers = array('Html','Form');

    public $components = array('Flash');

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

    public function done($id)
    {
        //URL -> /tasks/done/5 => $id は 5
        $this->Task->id = $id;
        //単一のレコードのカラムを更新
        $this->Task->saveField('status', 1);

        $msg = sprintf('タスク %s を完了しました' ,$id);
        //完了したことをフラッシュメッセージで表示
        $this->Flash->success($msg);

    return $this->redirect(array('action' => 'index'));

    }

}