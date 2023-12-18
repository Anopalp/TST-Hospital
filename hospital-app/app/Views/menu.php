<html>
    <head>
        <link rel="stylesheet" href="/css/menu.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla&family=Libre+Baskerville&family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main-header">
            <h1>Dashboard</h1>
        </div>

        <div class="card-main">
            <div class="inner-card" onclick="window.location.href='/registrasi'">
                <div class="card-image">
                    <img src="/images/registrasi.png" alt="">
                </div>
                <div class="card-text">Registrasi</div>    
            </div>
            
            <div class="inner-card" onclick="window.location.href='/riwayatRegistrasi'">
                <div class="card-image">
                    <img src="/images/history.png" alt="">
                </div>
                <div class="card-text">Riwayat Registrasi</div>    
            </div>
            
            <div class="inner-card" onclick="window.location.href='/penjualanObat'">
                <div class="card-image">
                    <img src="/images/request.png" alt="">
                </div>
                <div class="card-text">Request Obat</div>    
            </div>

            <div class="inner-card" onclick="window.location.href='/riwayatPenjualanObat'">
                <div class="card-image">
                    <img src="/images/history.png" alt="">
                </div>
                <div class="card-text">Riwayat Request Obat</div>    
            </div>

            <div class="inner-card" onclick="window.location.href='/logout'">
                <div class="card-image">
                    <img src="/images/logout.png" alt="">
                </div>
                <div class="card-text">Log Out</div>
            </div>

            <div class="inner-card" onclick="window.location.href='/about'">
                <div class="card-image">
                    <img src="/images/about.png" alt="">
                </div>
                <div class="card-text">About</div>
            </div>
        </div>
    </body>
</html>