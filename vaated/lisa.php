<?php if ( !empty( $errors ) ):
    foreach ( $errors as $e ):
        echo "$e <br/>";
    endforeach;
endif;
?>

<form action="?mode=lisa" method="post">

    <label for="name" ><b>Kokteili nimi:</b></label><br/>
    <input type="text" name="name" id="name"
           value="<?php if ( !empty( $_POST[ 'name' ] ) ) echo htmlspecialchars ( $_POST[ 'name' ] ); ?>"/> <br/>
    <label for="sisestus"><b>Koostisosad:</b></label><br/>
    <input type="text" name="ingredient1" class="sisestus" id="sisestus"
           value="<?php if ( !empty( $_POST[ 'ingredient1' ] ) ) echo htmlspecialchars ( $_POST[ 'ingredient1' ] ); ?>"/>
    <br/>
    <input type="text" name="ingredient2" class="sisestus" id="sisestus"
           value="<?php if ( !empty( $_POST[ 'ingredient2' ] ) ) echo htmlspecialchars ( $_POST[ 'ingredient2' ] ); ?>"/>
    <br/>
    <input type="text" name="ingredient3" class="sisestus" id="sisestus"
           value="<?php if ( !empty( $_POST[ 'ingredient3' ] ) ) echo htmlspecialchars ( $_POST[ 'ingredient3' ] ); ?>"/>
    <br/>
    <input type="text" name="ingredient4" class="sisestus" id="sisestus"
           value="<?php if ( !empty( $_POST[ 'ingredient4' ] ) ) echo htmlspecialchars ( $_POST[ 'ingredient4' ] ); ?>"/>
    <br/>
    <input type="text" name="ingredient5" class="sisestus" id="sisestus"
           value="<?php if ( !empty( $_POST[ 'ingredient5' ] ) ) echo htmlspecialchars ( $_POST[ 'ingredient5' ] ); ?>"/>
    <br/>
    <label for="recipe"><b>Valmistamine:</b></label><br/>
    <textarea name="recipe" id="recipe"
              rows="8"><?php if ( !empty( $_POST[ 'recipe' ] ) ) echo htmlspecialchars ( $_POST[ 'recipe' ] ); ?></textarea>
    <br/>
    <input type="submit" value="Lisa" name="lisa"/>
</form>
