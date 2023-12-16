<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/login.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla&family=Libre+Baskerville&family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="login-card">
            <h2>Login</h2>
            <form action="/login_action" method="POST">
                <input class="inner-component" type="text" name="username" placeholder="username"/>
                <input class="inner-component" type="password" name="password" placeholder="password"/>
                <button class="inner-component" type="submit">Log In</button>
            </form>
        </div>
    </body>
</html>