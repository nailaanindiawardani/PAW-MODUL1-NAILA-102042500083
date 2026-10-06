<?php

$produk = [
    [
        "nama" => "Samsung Smart TV 43 Inch",
        "kategori" => "Smart TV",
        "harga" => 6500000,
        "stok" => 5
    ],
    [
        "nama" => "LG Smart TV 50 Inch",
        "kategori" => "Smart TV",
        "harga" => 8500000,
        "stok" => 3
    ],
    [
        "nama" => "Xiaomi Smart TV 43 Inch",
        "kategori" => "Smart TV",
        "harga" => 4500000,
        "stok" => 0
    ],
    [
        "nama" => "TCL Smart TV 55 Inch",
        "kategori" => "Smart TV",
        "harga" => 7500000,
        "stok" => 10
    ],
    [
        "nama" => "Polytron Smart TV 40 Inch",
        "kategori" => "Smart TV",
        "harga" => 3800000,
        "stok" => 4
    ],
    [
        "nama" => "Sony Bravia Smart TV 55 Inch",
        "kategori" => "Smart TV",
        "harga" => 12000000,
        "stok" => 2
    ]
];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store - Smart TV</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f6;
            color: #4a2333;
        }

        header {
            background-color: #d63384;
            padding: 18px 8%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            color: #ffd6e8;
        }

        .hero {
            padding: 70px 8%;
            text-align: center;
            background-color: #ffe0ed;
        }

        .hero h1 {
            color: #c21868;
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            color: #8a536d;
            font-size: 18px;
        }

        .info {
            text-align: center;
            padding: 30px;
        }

        .info-box {
            display: inline-block;
            background-color: white;
            padding: 20px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(214, 51, 132, 0.15);
            border: 2px solid #ffc1d9;
        }

        .info-box h2 {
            color: #d63384;
            margin-bottom: 5px;
            font-size: 32px;
        }

        .info-box p {
            color: #8a536d;
        }

        .container {
            width: 84%;
            max-width: 1200px;
            margin: auto;
            padding-bottom: 60px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product-card {
            background-color: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(214, 51, 132, 0.12);
            border: 1px solid #ffd1e2;
            transition: transform 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card h3 {
            color: #c21868;
            margin-bottom: 10px;
        }

        .category {
            color: #a66a82;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .price {
            color: #d63384;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .normal-price {
            color: #aaa;
            text-decoration: line-through;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .discount {
            color: #e83e8c;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .final-price {
            color: #c21868;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .stock {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .available {
            color: #d63384;
        }

        .empty {
            color: #e63969;
        }

        .buy-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #d63384;
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .buy-button:hover {
            background-color: #b82068;
        }

        .disabled-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #f3c4d7;
            color: #9b6078;
            padding: 12px;
            border-radius: 8px;
            cursor: not-allowed;
        }

        footer {
            background-color: #d63384;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 900px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>

<body>

    <header>
        <nav>
            <div class="logo">Cia Store</div>

            <div>
                <a href="#">Home</a>
                <a href="#produk">Produk</a>
            </div>
        </nav>
    </header>

    <section class="hero">
        <h1>Selamat Datang di Cia Store</h1>

        <p>
            Temukan berbagai Smart TV pilihan dengan harga terbaik.
        </p>
    </section>

    <section class="info">
        <div class="info-box">
            <h2>
                <?php echo $jumlahProduk; ?>
            </h2>

            <p>
                Smart TV Tersedia di Katalog
            </p>
        </div>
    </section>

    <main class="container" id="produk">

        <div class="product-grid">

            <?php foreach ($produk as $item): ?>

                <?php

                if ($item["stok"] > 0) {
                    $status = "Tersedia";
                    $statusClass = "available";
                } else {
                    $status = "Stok Habis";
                    $statusClass = "empty";
                }

                if ($item["harga"] >= 1000000) {
                    $diskon = 10;
                    $hargaDiskon = $item["harga"] * $diskon / 100;
                    $hargaAkhir = $item["harga"] - $hargaDiskon;
                } else {
                    $diskon = 0;
                    $hargaAkhir = $item["harga"];
                }

                ?>

                <article class="product-card">

                    <h3>
                        <?php echo $item["nama"]; ?>
                    </h3>

                    <p class="category">
                        <?php echo $item["kategori"]; ?>
                    </p>

                    <?php if ($diskon > 0): ?>

                        <p class="normal-price">
                            Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
                        </p>

                        <p class="discount">
                            Diskon <?php echo $diskon; ?>%
                        </p>

                        <p class="final-price">
                            Rp <?php echo number_format($hargaAkhir, 0, ',', '.'); ?>
                        </p>

                    <?php else: ?>

                        <p class="price">
                            Rp <?php echo number_format($hargaAkhir, 0, ',', '.'); ?>
                        </p>

                    <?php endif; ?>

                    <p class="stock <?php echo $statusClass; ?>">

                        <?php echo $status; ?>

                        <?php if ($item["stok"] > 0): ?>

                            (<?php echo $item["stok"]; ?> stok)

                        <?php endif; ?>

                    </p>

                    <?php if ($item["stok"] > 0): ?>

                        <a href="#" class="buy-button">
                            Beli Sekarang
                        </a>

                    <?php else: ?>

                        <div class="disabled-button">
                            Tidak Tersedia
                        </div>

                    <?php endif; ?>

                </article>

            <?php endforeach; ?>

        </div>

    </main>

    <footer>

        <p>
            &copy; 2026 Cia Store. All Rights Reserved.
        </p>

    </footer>

</body>
</html>
