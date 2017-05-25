<?php if (!empty( $jook )): ?>

    <h3><?php echo $jook[ 'name' ]; ?></h3>

    <b>Koostisosad:</b> <?php echo htmlspecialchars ( $jook[ 'ingredient1' ] ); ?>
    <br/>
    <?php echo htmlspecialchars ( $jook[ 'ingredient2' ] ); ?>
    <br/>
    <?php echo htmlspecialchars ( $jook[ 'ingredient3' ] ); ?>
    <br/>
    <?php echo htmlspecialchars ( $jook[ 'ingredient4' ] ); ?>
    <br/>
    <?php echo htmlspecialchars ( $jook[ 'ingredient5' ] ); ?>
    <br/>
    <b>Valmistamine:</b> <?php echo htmlspecialchars ( $jook[ 'recipe' ] ); ?>
<?php endif; ?>
