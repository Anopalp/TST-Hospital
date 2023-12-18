<html>
    <head>
        <link rel="stylesheet" href="/css/requestObat.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla&family=Libre+Baskerville&family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <div class="home-icon" onclick="window.location.href='/'">
                <img class="icon-home" src="/images/home.png" alt="">
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

        <h2>Request Obat</h2>

        <?php if (! empty($requestObat) && is_array($requestObat) ): ?>
            <?php foreach($requestObat as $dataObat): ?>
                <div class="card-obat">
                    <h3><?= esc($dataObat['nama_obat']) ?></h3>
                    <p>Golongan Obat : <?= esc($dataObat['golongan']) ?></p>
                    <p>Jumlah        : <?= esc($dataObat['jumlah']) ?></p>
                    <p>Harga         : <?= esc($dataObat['harga']) ?></p>
                    <form action="/requestObat" method="POST">
                        <input type="hidden" name="id_obat" value="<?= esc($dataObat['id_obat']) ?>"/>
                        <input type="hidden" name="nama_obat" value="<?= esc($dataObat['nama_obat']) ?>"/>
                        <input type="hidden" name="golongan" value="<?= esc($dataObat['golongan']) ?>"/>
                        <input type="hidden" name="harga" value="<?= esc($dataObat['harga']) ?>"/>
                        <input type="hidden" name="jumlah_awal" value="<?= esc($dataObat['jumlah']) ?>"/>
                        <input type="number" name="jumlah_request" min="0"/>
                        <button type="submit">Request</button>
                    </form>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <h3>No Data</h3>
        <?php endif ?>
    </body>
</html>