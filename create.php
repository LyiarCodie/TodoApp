<?php
    require_once 'tasks.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['title'])) {
            $taskTitle = $_GET['title'];
            $result = createTask($taskTitle);
            
            if ($result)
                header("Location: index.php");
        }
    }

    include 'partials/head.php';
?>

<section>
    <div class='flex items-center justify-between px-sm pb-sm'>
        <h4>Create new Task</h4>
        <a href="index.php" class='btn'>Back</a>
    </div>
    <form action="create.php">
        <fieldset>
            <div>
                <label for="title">Title</label>
                <input type="text" placeholder='Eat banana...' name="title" id="title">
            </div>
            <button class='btn btn-success' type="submit">Create</button>
        </fieldset>
    </form>
</section>

<?php include 'partials/foot.php' ?>