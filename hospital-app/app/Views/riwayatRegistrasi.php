<html>
    <body>
        <p>Menu :
            <a href="/">Dashboard</a>
            <a href="/registrasi">Registrasi</a>
            <a href="/riwayatRegistrasi">Riwayat Registrasi</a>
            <a href="/penjualanObat">Penjualan Obat</a>
            <a href="/riwayatPenjualanObat">Riwayat Penjualan Obat</a>
        </p>
        <h2>Riwayat Registrasi</h2>
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
    </body>
</html>