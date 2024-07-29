<?php 
    require 'tasks.php';

    $tasks = getTasks();

    include 'partials/head.php';
?>

<section>
    <div class='flex items-center justify-between px-sm pb-sm'>
        <h4>Tasks</h4>
        <a class='btn btn-primary' href="create.php">
            Create New Task
        </a>
    </div>

    <table class='table table-bordered table-hover table-striped'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col' style="width: 100%;max-width: 70%;">Title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($tasks as $task): ?>

                <tr>
                    <th scope="row"><?= $task['id'] ?></th>
                    
                    <th class='<?= $task['isDone'] ? 'line-through inactive' : '' ?>'>
                        <?= $task['title'] ?>
                    </th>

                    <th>
                        <a 
                            class='btn <?= $task['isDone'] ? '' : 'btn-success' ?>' 
                            href="toggleDone.php?id=<?= $task['id'] ?>"
                        >
                            <?= $task['isDone'] ? 'Undone' : 'Done' ?>
                        </a>
                        <a class='btn btn-danger' href="delete.php?id=<?= $task['id'] ?>">Delete</a>
                    </th>
                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>
</section>

<?php include 'partials/foot.php' ?>