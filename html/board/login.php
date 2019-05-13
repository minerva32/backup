<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
    <form method='post' action='\login/login_ok.php'>
        <div class="w3-container w3-blue">
            <h2>Login</h2>
        </div>


        <form class="w3-container">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input class="w3-input" type="text" name="id"></td>
                </tr>

                <tr>
                    <td><label>PassWord</label></td>
                    <td><input class="w3-input" type="password" name="pwd"></td>
                </tr>
            </table>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <div class="w3-container">
                <button id="btn-Yes" class="btn btn-lg btn-primary btn-blue" type="submit">Login</button>
                <button><a href="" class="btn btn-lg btn-primary btn-blue">Join</a></button>
            </div>
        </form>
    </form>
</body>
</html>
