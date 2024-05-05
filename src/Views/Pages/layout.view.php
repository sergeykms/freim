<?php

use App\Application\Views\View;

$page = $params['page'] ?? '404';
?>

<!doctype html>
<html lang="ru">
<?php View::renderComponents('head'); ?>
<body>
<?php View::renderComponents('header', ['page' => $page]); ?>
<main class="container">
    <?php View::renderPages($page); ?>
</main>
<?php View::renderComponents('footer'); ?>
</body>
<?php View::renderComponents('script'); ?>
</html>