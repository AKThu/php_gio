<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php $score = 97 ?>

    <?php if($score>=90): ?>
        <strong style="color: green">A</strong>
        <?php if($score>=95): ?>
            <strong style="color: green">+</strong>
        <?php endif ?>
    <?php elseif($score>=80): ?>
        <strong>B</strong>
    <?php elseif($score>=70): ?>
        <strong>C</strong>
    <?php elseif($score>=60): ?>
        <strong>D</strong>
    <?php elseif($score>=40): ?>
        <strong>E</strong>
    <?php else: ?>
        <strong style="color: red;">F</strong>
    <?php endif ?>

</body>
</html>