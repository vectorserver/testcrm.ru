<?php

?>
<h1>Задачи</h1>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Создать задачу</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новая задача</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="addTaskModal">
                    <input type="hidden" name="newTask" value="1">
                    <input type="hidden" name="status" value="2">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Ваш e-mail:</label>
                        <input required type="email" name="email" class="form-control" id="recipient-email">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Название:</label>
                        <input required name="pagetitle" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Текст:</label>
                        <textarea name="content" class="form-control" id="message-text"></textarea>
                    </div>
                    <button type="submit" type="button" class="btn btn-primary">Создать</button>
                </form>
            </div>
            <div class="modal-footer">


            </div>
        </div>
    </div>
</div>
<p>
    Сортировка
</p>
<form class="form mb-3">
    <input type="hidden" name="p" value="<?=$data['page']?>">
    <div class="row">
        <div class="col">
        <select onchange="this.form.submit()"; class="form-select" name="sortBy">
            <option <?=($_REQUEST['sortBy'] =='task.id')? "selected":''?> value="task.id">ID</option>
            <option <?=($_REQUEST['sortBy'] =='task.pagetitle')? "selected":''?> value="task.pagetitle">Название задачи</option>
            <option <?=($_REQUEST['sortBy'] =='task.status')? "selected":''?> value="status.id">Статус задачи</option>
            <option <?=($_REQUEST['sortBy'] =='user.id')? "selected":''?> value="user.id">Пользователь</option>
        </select>
        </div>
        <div class="col">
        <select onchange="this.form.submit()"; class="form-select" name="sortDir">
            <option value="">---</option>
            <option <?=($_REQUEST['sortDir'] =='ASC')? "selected":''?> value="ASC">По возрастанию</option>
            <option <?=($_REQUEST['sortDir'] =='DESC')? "selected":''?> value="DESC">По убыванию</option>
        </select>
        </div>
    </div>
</form>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Создатель</th>
        <th>Задача</th>
        <th>Текст</th>
        <th>Статус</th>
        <?php if($data['isAdmin']): ?>
            <th>Админ</th>
        <?php endif;?>
    </tr>
    <?php
    foreach ($data['tasks'] as $row) :
        $row['status_text'] = ($row['status'] == 1) ? "В обработке" : "Обработано";
        $row['status_class'] = ($row['status'] == 1) ? "warning" : "success";

        ?>
        <tr class="table-<?=$row['status_class']?>">
            <td><?=$row['task_id']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['pagetitle']?></td>
            <td><?=$row['content']?></td>
            <td><?=$row['status_text']?></td>
            <?php if($data['isAdmin']): ?>
                <td><button class="btn btn-warning">Редактировать</button></td>
            <?php endif;?>
        </tr>
    <?php endforeach;?>
</table>
<div id="paginates">
    <?php
    // The "back" link
    $sortBy = (isset($_REQUEST['sortBy'])) ? $_REQUEST['sortBy'] : 'task.id';
    $sortDir = (isset($_REQUEST['sortDir'])) ? $_REQUEST['sortDir'] : 'DESC';
    $sortAtr = "&sortBy={$sortBy}&sortDir={$sortDir}";
    $prevlink = ($data['page'] > 1) ? '<a href="?p=1'.$sortAtr.'" title="First page">&laquo;</a> <a href="?p=' . ($data['page'] - 1) .$sortAtr. '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

    // The "forward" link
    $nextlink = ($data['page'] < $data['pages']) ? '<a href="?p=' . ($data['page'] + 1) .$sortAtr. '" title="Next page">&rsaquo;</a> <a href="?p=' . $data['pages'] .$sortAtr. '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

    // Display the paging information
    echo '<div id="paging"><p>', $prevlink, ' стр ', $data['page'], ' из ', $data['pages'],' ', $nextlink, '  </p></div>';


    ?>
</div>
