<html>
    <head>
        <link rel="stylesheet" href="/css/registrasi.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla&family=Libre+Baskerville&family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <div class="home-icon">
                <a href="/">Dashboard</a>
            </div>

            <div class="gap">

            </div>

            <div class="other-nav">
                <a href="/registrasi">Registrasi</a>
                <a href="/riwayatRegistrasi">Riwayat Registrasi</a>
                <a href="/penjualanObat">Penjualan Obat</a>
                <a href="/riwayatPenjualanObat">Riwayat Penjualan Obat</a>
            </div>
        </div>

        <h2>Pilih Asuransi</h2>
        
        <div class="card-asuransi">
            <div class="inner-card" onclick="window.location.href='/registrasiBPJS'">
                <div class="card-text">BPJS</div>
            </div>
            
            <div class="inner-card" onclick="window.location.href='/registrasiNonBPJS'">
                <div class="card-text">Non BPJS</div>
            </div>
        </div>
    </body>
</html>