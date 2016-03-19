<h2>未完了タスク一覧</h2>

<?php echo $this->Html->link('新規タスク' , '/Tasks/create');?>

<h3><?php echo count($tasks); ?>件のタスクが未完了です</h3>

<table>
    <tr>
        <th>ID</th>
        <th>タスク名</th>
        <th>期限</th>
        <th>作成日</th>
        <th>操作</th>
    </tr>
    <?php foreach ($tasks as $task) : ?>
        <tr>
            <td><?php echo $this->Html->link($task['Task']['id'], '/Tasks/view/' . $task['Task']['id']); ?></td>
            <td><?php echo h($task['Task']['name']); ?></td>
            <td><?php echo h($task['Task']['due_date']); ?></td>
            <td><?php echo h($task['Task']['created']); ?></td>
            <td><?php echo $this->Html->link('このタスクを完了する', '/Tasks/done/' . $task['Task']['id']); ?></td>
        </tr>
    <?php endforeach;?>

</table>