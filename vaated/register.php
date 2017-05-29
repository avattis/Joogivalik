<form action="?mode=register" method="post">
    <table>
        <tr>
            <td><label for="username">Kasutjanimi:</label></td>
            <td><input type="text" name="username" id="username"
                       value="<?php if (!empty( $_POST[ 'username' ] )) echo htmlspecialchars ( $_POST[ 'username' ] );?>"
            </td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" id="email"
                       value="<?php if (!empty( $_POST[ 'email' ] )) echo htmlspecialchars ( $_POST[ 'email' ] );?>"
            </td>
        </tr>
        <tr>
            <td><label for="password">Parool:</label></td>
            <td><input type="password" name="password" class="textInput" id="password"
                       value="<?php if (!empty( $_POST[ 'password' ] )) echo htmlspecialchars ( $_POST[ 'password' ] );?>"
            </td>
        </tr>
        <tr>
            <td><label for="password">Parool uuesti:</td>
            <td><input type="password" name="password2" class="textInput" id="password"
                       value="<?php if (!empty( $_POST[ 'password2' ] )) echo htmlspecialchars ( $_POST[ 'password2' ] );?>"
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="register_btn" value="Registreeri"></td>
        </tr>
    </table>
</form>
    <?php if (!empty( $errors )):
        foreach ( $errors as $e ):
            echo "$e <br/>";
        endforeach;
    endif;
    ?>