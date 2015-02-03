<?php

$articles = [
    [
        'title'   => 'Article Title',
        'content' => 'Article Content',
        'enabled' => true,
    ],
    [
        'title'   => 'ezf eaz fea itle',
        'content' => 'azdnk d kjezf azknd az Content',
        'enabled' => true,
    ],
];

//print_r($article);
//var_dump($article);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
    if (true === $article1['enabled']) {
        echo '<h1>'.$article1['title'].'</h1>';
        echo '<p>'.$article1['content'].'</p>';
    }
    if (true === $article2['enabled']) {
        echo '<h1>'.$article2['title'].'</h1>';
        echo '<p>'.$article2['content'].'</p>';
    }
    foreach ($article1 as $blabla => $value) {
        var_dump($blabla);
    }
*/
    foreach ($articles as $article) {
        if (true === $article['enabled']) {
            echo '<h1>'.$article['title'].'</h1>';
            echo '<p>'.$article['content'].'</p>';
        }
    }
?>
</body>
</html>