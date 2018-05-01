<!DOCTYPE html>
<?php require_once('app/index.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD List PHP</title>
    <link href="public/style.css" rel="stylesheet">
</head>
<body>
    <main class="wrapper">
        <header class="header">
            <h1>CRUD List PHP</h1></header>
        <div class="todo-list-wrapper">
            <div class="todo-list">
                <div class="edit-todo">
                    <input class="btn btn-edit" type="button" value="Edit">
                </div>
                <?php foreach ($movies as $movie) { ?>
                    <div class="todo">
                        <input class="hidden btn btn-delete" type="button" value="X">
                        <input class="todo-checkbox" type="checkbox" checked="on">
                        <input type="text" name="todo" value="<?php echo $movie ?>">
                        <input class="hidden btn btn-confirm" type="button" value="√">
                    </div>
                <?php } ?>
            </div>
            <div class="todo create-todo">
                <input class="btn btn-create" type="button" value="+">
                <input class="input-create" type="text" name="create">
            </div>
        </div>
    </main>
    <script type="text/javascript" src="public/bundle.js"></script>
</body>
</html>
