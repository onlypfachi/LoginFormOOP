<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <div>
                <h4>
                  SIGN UP  
                </h4>
                <p>create a free account</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="repeat password">
                    <input type="text" name="email" placeholder="Email">
                    <br>
                    <button type="submit">SIGN UP</button>
                </form>
            </div>
        </div>
        <div>
                <h4>
                   LOG IN
                </h4>
                <p>Enter your account details</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit">LOG IN</button>
                </form>
            </div>
    </section>
</body>
</html>