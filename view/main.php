<?php
    ob_start();

    ?>

    <h2>Проект MVC </h2>
    <article>
        <p>
            Просмотр списка книг 
        </p>
    </article>
    <?php
    $content = ob_get_clean();
    ?>
        <?php  include'view/templates/layout.php';?>

    

