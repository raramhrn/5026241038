<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    body {
        background-color: rgb(209, 222, 233);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .jumbotron {
        background-color: rgb(56, 87, 131);
        color: white;
        border-radius: 16px;
    }

    .card-section {
        background: rgb(148, 183, 208);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
        text-align: center;
    }

    .btn-primary {
        background-color: rgb(56, 87, 131);
        border-color: #ffffff;
    }
</style>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Bootstrap 4 Button Group</h1>
            <hr class="my-2">
            <p class="lead">Syahdu Szenovera Maharani</p>
        </div>
        <div style="text-align: center;">
            <h1>Sistem Pemesanan Makanan</h1>
        </div>
        <!--Button Group-->
        <div class="card-section">
            <p>Pilih Menu</p>
            <div class="btn-group-lg">
                <button type="button" class="btn btn-primary">Makanan</button>
                <button type="button" class="btn btn-primary">Minuman</button>
                <button type="button" class="btn btn-primary">Snack</button>
            </div>
        </div>
        <!--Vertical Button Group-->
        <div class="card-section">
            <p>Metode Pembayaran</p>
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">QRIS</button>
                <button type="button" class="btn btn-primary">Transfer</button>
                <button type="button" class="btn btn-primary">Cash</button>
            </div>
        </div>
        <!--Nesting Button Groups & Dropdown Menus-->
        <div class="card-section">
            <p>Pilih Rasa</p>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Manis</button>
                <button type="button" class="btn btn-primary">Asin</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Pedas
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Level 1</a>
                        <a class="dropdown-item" href="#">Level 2</a>
                        <a class="dropdown-item" href="#">Level 3</a>
                        <a class="dropdown-item" href="#">Level 4</a>
                        <a class="dropdown-item" href="#">Level 5</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Split Button Dropdowns-->
        <div class="card-section">
            <p>Metode Pengiriman</p>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Pengiriman</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                    data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Delivery</a>
                    <a class="dropdown-item" href="#">Ambil ditempat</a>
                </div>
            </div>
        </div>
        <!--Vertical Button Group w/ Dropdown-->
        <div class="card-section">
            <p>Pengambilan</p>
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">Asrama ITS</button>
                <button type="button" class="btn btn-primary">Tower 1</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Kurir
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Gojek</a>
                        <a class="dropdown-item" href="#">Grab</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Button Groups Side by Side-->
        <div class="card-section">
            <p>Review</p>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Makanan</button>
                <button type="button" class="btn btn-primary">Minuman</button>
                <button type="button" class="btn btn-primary">Snack</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Bintang 1</button>
                <button type="button" class="btn btn-primary">Bintang 2</button>
                <button type="button" class="btn btn-primary">Bintang 3</button>
                <button type="button" class="btn btn-primary">Bintang 4</button>
                <button type="button" class="btn btn-primary">Bintang 5</button>
            </div>
        </div>
    </div>
</body>

</html>