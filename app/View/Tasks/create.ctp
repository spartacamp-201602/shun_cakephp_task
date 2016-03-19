<h2>新規タスク追加</h2>

<?php

echo $this->Form->create('Task');

echo $this->Form->input('name');
echo $this->Form->input('due_date');
echo $this->Form->input('body');

echo $this->Form->end('追加');