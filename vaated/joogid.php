<?php if (!empty($joogid)):
    foreach($joogid as $id=>$jook):
        ?>
        <a href="?mode=jook&id=<?php echo $jook['id']; ?>">
            <?php echo $jook['name'];?> <br/>
        </a>
    <?php endforeach;
endif;
?>


