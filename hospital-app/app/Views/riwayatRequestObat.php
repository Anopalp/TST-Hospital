<html>
    <head>
        <link rel="stylesheet" href="/css/riwayatRequestObat.css">
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

        <h2>Riwayat Request Obat</h2>

        <div class="table-container">
            <?php if (! empty($riwayatRequest) && (is_array($riwayatRequest))): ?>
                <table>
                    <tr>
                        <th>Id Request</th>
                        <th>Jumlah Request</th>
                        <th>Total Harga</th>
                        <th>Status Request</th>
                    </tr>
                    <?php foreach($riwayatRequest as $req_item): ?>
                    <tr>
                        <td><?= esc($req_item['id_request']) ?></td>
                        <td><?= esc($req_item['jumlah_request']) ?></td>
                        <td><?= esc($req_item['total_harga']) ?></td>
                        <td><?= esc($req_item['status_request']) ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            <?php else: ?>
                <h3>No Data</h3>
            <?php endif ?>
        </div>
        
    </body>
</html>