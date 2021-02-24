<?php
$titre = 'Une photo de mon book';
if (is_null($photo)){
    $content = 'Cette photo n\'existe pas.';
}
else{
    ob_start();
    ?>
    <article>
        <img src="photos/<?php echo $photo->getFile() ?>" width="500" />
        <h2><?php echo $photo->getTitle() ?></h2>
    </article>
    <?php
    $content = ob_get_clean();
}
require_once "/wamp64/www/studi-exercices/model-mvc2/views/layout.php";