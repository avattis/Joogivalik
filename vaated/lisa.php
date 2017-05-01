<form action="?mode=lisa" method="post">
    <b>Jook:</b><br/>
    <input type="text" name="name" value="<?php if (!empty($_POST['name'])) echo htmlspecialchars($_POST['name']);?>" /> <br/>
    <b>Koostisosad:</b><br/>
    <input type="text" name="ingredient1" value="<?php if (!empty($_POST['ingredient1'])) echo htmlspecialchars($_POST['ingredient1']);?>" /> <br/>
    <input type="text" name="ingredient2" value="<?php if (!empty($_POST['ingredient2'])) echo htmlspecialchars($_POST['ingredient2']);?>" /> <br/>
    <input type="text" name="ingredient3" value="<?php if (!empty($_POST['ingredient3'])) echo htmlspecialchars($_POST['ingredient3']);?>" /> <br/>
    <input type="text" name="ingredient4" value="<?php if (!empty($_POST['ingredient4'])) echo htmlspecialchars($_POST['ingredient4']);?>" /> <br/>
    <input type="text" name="ingredient5" value="<?php if (!empty($_POST['ingredient5'])) echo htmlspecialchars($_POST['ingredient5']);?>" /> <br/>
    <b>Valmistamine:</b><br/>
    <textarea name="recipe"><?php if (!empty($_POST['recipe'])) echo htmlspecialchars($_POST['recipe']);?></textarea> <br/>
    <input type="submit" value="Lisa"/>
</form>
<?php if (!empty($errors)):
    foreach($errors as $e):
        echo "$e <br/>";
    endforeach;
endif;
?>