<form action="?mode=login" method="post">
    <table>
        <tr>
            <td><label for="username">Kasutjanimi:</label></td>
            <td><input type="text" name="username" id="username"
                       value="<?php if (!empty( $_POST[ 'username' ] )) echo htmlspecialchars ( $_POST[ 'username' ] );?>"
            </td>
        </tr>
        <tr>
            <td><label for="password">Parool:</label></td>
            <td><input type="password" name="password" id="password"
                       value="<?php if (!empty( $_POST[ 'password' ] )) echo htmlspecialchars ( $_POST[ 'password' ] );?>"
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="login_btn" value="Logi sisse"></td>
        </tr>
    </table>
</form>