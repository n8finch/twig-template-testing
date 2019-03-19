<?php
$twig_array = [
    'name' => 'Nate',
    'todos' => [
        [
            'id' => '1',
            'title' => 'One thing',
            'completed' => true,
        ],
        [
            'id' => '2',
            'title' => 'Another thing',
            'completed' => false,
        ],
        [
            'id' => '3',
            'title' => '<script>alert("Last thing");</script>',
            'completed' => true,
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twig Testing</title>
</head>
<body>

    <h1><?php echo $twig_array['name']; ?>'s ToDos </h1>

    <ul>
        <?php foreach ($twig_array['todos'] as $todo) : ?>
            <li>
                <label for="todo-<?php echo $todo['id']; ?>">
                    <input id="todo-<?php echo $todo['id']; ?>" name="todo-<?php echo $todo['id']; ?>" type="checkbox" vale="<?php echo $todo['id']; ?>" <?php echo $todo['completed'] ? 'checked' : '';?> /><?php echo $todo['title']; ?>
                </label>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>