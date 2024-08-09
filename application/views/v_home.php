<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page - Web GIS Stunting Majene</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1500px;
            margin: 10px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Tambahkan ini untuk membuat teks berada di tengah */
        }
        h1 {
            font-size: 27px; /* Ukuran font diubah menjadi 24px */
        }
        .content {
            padding: 20px;
        }
        .description {
            font-size: 25px;
            text-align: left;
            white-space: pre-line; /* Atur agar teks enter dikenali */
            margin-bottom: 10px; /* Tambahkan margin bottom */
            margin-top: -50px;
        }
        .image-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px; /* Tambahkan margin bottom */
        }
        .image-container img {
            max-width: 70%; /* Ubah ukuran gambar menjadi 50% dari lebar kontainer */
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1> <b> GIS website focusing on mapping stunting in Majene Regency, West Sulawesi </b> </h1>
        <div class="content">
            <div class="description">
                West Sulawesi Province emerges as the highest in stunting prevalence across Indonesia <a href="https://aksi.bangda.kemendagri.go.id/emonev/DashPrev"> with a prevalence rate of 23.9%.</a> Majene District, within West Sulawesi, is identified as the region with the highest number of stunting cases with <a href="https://aksi.bangda.kemendagri.go.id/emonev/DashPrev"> a prevalence rate of 34.4%.</a> We're reaching out to villages all across Majene District to set up Posyandu centers and help tackle this problem where it matters most – right in the heart of the community.
            </div>
            <div class="image-container">
                <img src="<?= base_url('binary-admin/') ?>assets/img/majene.png"/>
            </div>
        </div>
    </div>

</body>
</html>
