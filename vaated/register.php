<form action="?mode=register" method="post">
    <table>
        <tr>
            <td>Kasutjanimi:</td>
            <td><input type="text" name="username" value="<?php if (!empty($_POST['username'])) echo htmlspecialchars($_POST['username']);?>"</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="<?php if (!empty($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"</td>
        </tr>
        <tr>
            <td>Parool:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        <tr>
            <td>Parool uuesti:</td>
            <td><input type="password" name="password2" class="textInput"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="register_btn" value="Registreeri"></td>
        </tr>
    </table>
</form>
<?php if (!empty($errors)):
    foreach($errors as $e):
        echo "$e <br/>";
    endforeach;
endif;
?>