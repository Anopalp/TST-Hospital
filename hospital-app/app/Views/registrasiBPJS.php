<html>
    <body>
        <p>Menu :
            <a href="/">Dashboard</a>
            <a href="/registrasi">Registrasi</a>
            <a href="/riwayatRegistrasi">Riwayat Registrasi</a>
            <a href="/penjualanObat">Penjualan Obat</a>
            <a href="/riwayatPenjualanObat">Riwayat Penjualan Obat</a>
        </p>
        <a href="/registrasi">Kembali</a>
        <div>
            <h2>Registrasi BPJS</h2>
            <form action="/register_bpjs_action" method="POST">
                <input class="inner-component" type="text" name="nama" placeholder="nama"/>
                <input class="inner-component" type="date" name="tgl_lahir" placeholder="tgl_lahir"/>
                <input class="inner-component" type="text" name="golongan_darah" placeholder="golongan_darah"/>
                <input class="inner-component" type="text" name="id_bpjs" placeholder="id_bpjs"/>
                <button class="inner-component" type="submit">Registrasi</button>
            </form>
        </div>
    </body>
</html>