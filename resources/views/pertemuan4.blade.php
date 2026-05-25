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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-color: #ebebeb;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .pages {
        padding: 60px 0;
        text-align: center;
    }

    .wrap {
        background-color: #80bfff;
        padding: 70px;
        border-radius: 10px;
    }

    .judul-halaman {
        font-family: "Oswald";
        color: #ffffff;
        text-shadow: 2px 2px 4px #000000;
        font-weight: 800;
        margin: 5px;
    }

    .keterangan {
        margin-bottom: 50px;
    }

    .box {
        background-color: #b3d9ff;
        border: 2px solid #000000;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 40px;
        margin: 20px;
    }

    .nama-plan {
        font-family: "Oswald";
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 10px;
    }

    .harga-plan {
        margin-bottom: 30px;
    }

    .btn-primary {
        margin-bottom: 20px;
    }

    .daftar {
        list-style: none;
        margin-top: 20px;
        color: rgb(60, 59, 63);
    }

    .daftar li {
        padding: 4px 0;
    }
</style>

<body>

    <div class="container pages">
        <div class="wrap">
            <h1 class="judul-halaman">CHOOSE YOUR PLAN</h1>
            <p class="keterangan">Pick the plan that matches your needs</p>

            <div class="row">

                <!--Plan 1-->
                <div class="col">
                    <div class="box">
                        <p class="nama-plan">BASIC</p>
                        <p class="harga-plan">Rp20.000/month</p>
                        <button type="button" class="btn btn-primary" disabled>Your Plan</button>
                        <ul class="list-group daftar">
                            <li><strong>Basic</strong> features access</li>
                            <li><strong>Standard</strong> storage</li>
                            <li><strong>Email</strong> support</li>
                            <li><strong>Regular</strong> updates</li>
                        </ul>
                    </div>
                </div>

                <!-- Plan 2 -->
                <div class="col">
                    <div class="box">
                        <p class="nama-plan">PROFESSIONAL</p>
                        <p class="harga-plan">Rp50.000/month</p>
                        <button type="button" class="btn btn-primary active">Select Plan</button>
                        <ul class="list-group daftar">
                            <li><strong>All Basic</strong> features</li>
                            <li><strong>Larger</strong> storage</li>
                            <li><strong>Priority</strong> support</li>
                            <li><strong>Extra</strong> tools</li>
                        </ul>
                    </div>
                </div>

                <!-- Plan 3 -->
                <div class="col">
                    <div class="box">
                        <p class="nama-plan">BUSSINES</p>
                        <p class="harga-plan">Rp99.000/month</p>
                        <button type="button" class="btn btn-primary active">Select Plan</button>
                        <ul class="list-group daftar">
                            <li><strong>All Pro</strong> features</li>
                            <li><strong>Maximum</strong> storage</li>
                            <li><strong>Priority</strong> assistance</li>
                            <li><strong>Business</strong> tools</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>