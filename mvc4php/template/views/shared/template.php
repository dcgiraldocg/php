<?php

use MVC4PHP\View;

$title = isset($data["title"]) ? $data["title"] . " - " : "";
$css = isset($data["css"]) ? $data["css"] : [];
$js = isset($data["js"]) ? $data["js"] : [];
$messages = View::validateMessages();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link rel="icon" href="" />

    <?= View::insertComponent("shared/scripts/css"); ?>
    <?= View::insertComponent("shared/plugins/analytics"); ?>

    <?php if (count($css) > 0) foreach ($css as $path) { ?>
        <link rel="stylesheet" href="<?= $path; ?>"><?php } ?>
</head>

<body>
    <?php
    $content();
    ?>


    <?= View::insertComponent("shared/scripts/js"); ?>


    <?php if (count($js) > 0) foreach ($js as $path) { ?>
        <script src="<?= $path; ?>"></script><?php } ?>


</body>

</html>