<html>
    <head>
        <link rel="stylesheet" href="/css/registrasiNonBPJS.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla&family=Libre+Baskerville&family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <div class="home-icon" onclick="window.location.href='/'">
                <img class="icon-home" src="/images/home.png" alt=""/>
            </div>

            <div class="gap">

            </div>

            <div class="other-nav">
                <a href="/registrasi">Registrasi</a>
                <a href="/riwayatRegistrasi">Riwayat Registrasi</a>
                <a href="/requestObat">Request Obat</a>
                <a href="/riwayatRequestObat">Riwayat Request Obat</a>
                <a href="/logout">Log Out</a>
            </div>
        </div>

        <div class="header-container">
            <div class="back-container" onclick="window.location.href='/registrasi'">
                <img src="/images/back.png" alt="">
            </div>

            <div class="h2-container">
                <h2>Registrasi Non BPJS</h2>
            </div>
            
            <div class="gap-2">

            </div>
        </div>

        <div class="input-form">
            <div class="form-margin">
                <form action="/register_non_bpjs_action" method="POST">
                    <input class="inner-component" type="text" name="nama" placeholder="nama"/>
                    <input class="inner-component" type="date" name="tgl_lahir" placeholder="tgl_lahir"/>
                    <input class="inner-component" type="text" name="golongan_darah" placeholder="golongan_darah"/>
                    <input class="inner-component" type="text" name="pj" placeholder="pj"/>
                    <input class="inner-component" type="text" name="telp_pj" placeholder="telp_pj"/>
                    <button class="inner-component" type="submit">Registrasi</button>
                </form>
            </div>
        </div>

    </body>
</html>