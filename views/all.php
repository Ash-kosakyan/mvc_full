<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        h2 {
            color: darkblue;
        }
        div {
            float: left;
            margin-left: 30px;
            color: rebeccapurple;
        }
    </style>
</head>
<body>

<?php foreach ($items as $item): ?>
    <div>
        <h2><?php echo $item->title; ?></h2>
        <p><?php echo $item->content; ?></p>
        <?php echo $item->author; ?>
    </div>
<?php endforeach; ?>

</body>
</html>