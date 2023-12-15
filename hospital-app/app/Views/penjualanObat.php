<html>
    <body>
        <p>Menu :
            <a href="/">Dashboard</a>
            <a href="/registrasi">Registrasi</a>
            <a href="/riwayatRegistrasi">Riwayat Registrasi</a>
            <a href="/penjualanObat">Penjualan Obat</a>
            <a href="/riwayatPenjualanObat">Riwayat Penjualan Obat</a>
        </p>
        <h2>Penjualan Obat</h2>

        <?php if (! empty($penjualanObat) && is_array($penjualanObat) ): ?>
            <?php foreach($penjualanObat as $dataObat): ?>
                <div class="card-obat">
                    <h3><?= esc($dataObat['nama_obat']) ?></h3>
                    <p><?= esc($dataObat['golongan']) ?></p>
                    <p><?= esc($dataObat['jumlah']) ?></p>
                    <p><?= esc($dataObat['harga']) ?></p>
                    <form action="/jualObat" method="POST">
                        <input type="hidden" name="id_obat" value="<?= esc($dataObat['id_obat']) ?>"/>
                        <input type="hidden" name="nama_obat" value="<?= esc($dataObat['nama_obat']) ?>"/>
                        <input type="hidden" name="golongan" value="<?= esc($dataObat['golongan']) ?>"/>
                        <input type="hidden" name="harga" value="<?= esc($dataObat['harga']) ?>"/>
                        <input type="hidden" name="threshold" value="<?= esc($dataObat['threshold']) ?>"/>
                        <input type="hidden" name="jumlah_awal" value="<?= esc($dataObat['jumlah']) ?>"/>
                        <input type="number" name="jumlah_jual"/>
                        <button type="submit">Jual</button>
                    </form>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <h3>No Data</h3>
        <?php endif ?>
    </body>
</html>