<html>
    <head>
        <link rel="stylesheet" href="/css/riwayatRegistrasi.css">
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
                <a href="/penjualanObat">Penjualan Obat</a>
                <a href="/riwayatPenjualanObat">Riwayat Penjualan Obat</a>
                <a href="/logout">Log Out</a>
            </div>
        </div>

        <h2>Riwayat Registrasi</h2>
        
        <div class="table-container">
            <?php if (! empty($riwayatRegistrasi) && (is_array($riwayatRegistrasi))): ?>
                <table>
                    <tr>
                        <th>Id Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Lahir</th>
                        <th>Golongan Darah</th>
                        <th>Asuransi</th>
                        <th>ID BPJS</th>
                        <th>Kelas Rawat</th>
                        <th>Penanggung Jawab</th>
                        <th>Telp. Penanggung Jawab</th>
                    </tr>
                    <?php foreach($riwayatRegistrasi as $reg_item): ?>
                    <tr>
                        <td><?= esc($reg_item['id_pasien']) ?></td>
                        <td><?= esc($reg_item['nama_pasien']) ?></td>
                        <td><?= esc($reg_item['tanggal_lahir']) ?></td>
                        <td><?= esc($reg_item['golongan_darah']) ?></td>
                        <td><?= esc($reg_item['asuransi']) ?></td>
                        <td><?= esc($reg_item['id_bpjs']) ?></td>
                        <td><?= esc($reg_item['kelas_rawat']) ?></td>
                        <td><?= esc($reg_item['pj']) ?></td>
                        <td><?= esc($reg_item['telp_pj']) ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            <?php else: ?>
                <h3>No Data</h3>
            <?php endif ?>
        </div>
        
    </body>
</html>