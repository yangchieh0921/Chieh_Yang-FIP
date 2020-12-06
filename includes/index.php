<?php
    include_once("connect.php");
    include_once("functions.php");
    
    $allUsers = getAllUsers($pdo);

    foreach ($allUsers as $iii) : ?>
    <?php var_dump($iii)?>
    <img src="<?php echo $iii['email']?>" alt="<?php echo $iii['firstrname'];?>">
        <h2><?php echo $iii['firstrname'] ;?></h2>
    <?php endforeach; ?>