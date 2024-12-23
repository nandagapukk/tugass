<?php
// Masukkan NRP Anda di sini
$nrp = "2210191043";  // Ganti dengan NRP Anda

// Mengambil tiga digit terakhir NRP
$last_three_digits = (int) substr($nrp, -3);

// Menentukan kategori berdasarkan tiga digit terakhir NRP modulo 5
$category_code = $last_three_digits % 5;
$data = [];

// Memilih data berdasarkan kategori yang dihitung dari NRP
switch ($category_code) {
    case 1:
        // Kategori 1: Budaya Daerah di Indonesia
        $data = [
            [
                "name" => "Tari Saman",
                "description" => "Tari tradisional dari Aceh.",
                "year" => 1973,
                "origin" => "Aceh",
                "image_url" => "ihttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeYL3_D-G0dPPJX80I6-PU_gdVp8w4355fPw&s"
            ],
            [
                "name" => "Angklung",
                "description" => "Alat musik dari Jawa Barat.",
                "year" => 1938,
                "origin" => "Jawa Barat",
                "image_url" => "https://upload.wikimedia.org/wikipedia/commons/8/87/Indonesianbamboomusicangklung.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 2:
        // Kategori 2: Penemu terkenal di dunia
        $data = [
            [
                "name" => "Thomas Edison",
                "description" => "Penemu bola lampu.",
                "year" => 1879,
                "origin" => "Amerika Serikat",
                "image_url" => "https://upload.wikimedia.org/wikipedia/commons/9/9d/Thomas_Edison2.jpg"
            ],
            [
                "name" => "Nikola Tesla",
                "description" => "Penemu arus bolak-balik.",
                "year" => 1888,
                "origin" => "Amerika Serikat",
                "image_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/800px-Tesla_circa_1890.jpeg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 3:
        // Kategori 3: Flora dan Fauna terancam punah
        $data = [
            [
                "name" => "Harimau Sumatra",
                "description" => "Salah satu spesies harimau yang terancam punah.",
                "year" => 2023,
                "origin" => "Sumatra",
                "image_url" => "https://upload.wikimedia.org/wikipedia/commons/e/e1/Sumatran_Tiger_Berlin_Tierpark.jpg"
            ],
            [
                "name" => "Orangutan Kalimantan",
                "description" => "Spesies orangutan yang terancam punah di Kalimantan.",
                "year" => 2023,
                "origin" => "Kalimantan",
                "image_url" => "https://budaya.jogjaprov.go.id/view_image/images/1692606366_31ccaed170e52228b08d82b8b206a4cd.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 4:
        // Kategori 4: Pahlawan Nasional Indonesia
        $data = [
            [
                "name" => "Ir. Soekarno",
                "description" => "Proklamator kemerdekaan Indonesia.",
                "year" => 1945,
                "origin" => "Blitar, Jawa Timur",
                "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwe6V2NIEUZ1blOnis4bUdCqvtjylz8ZvLsg&s"
            ],
            [
                "name" => "R.A. Kartini",
                "description" => "Pelopor emansipasi wanita di Indonesia.",
                "year" => 1879,
                "origin" => "Jepara, Jawa Tengah",
                "image_url" => "https://upload.wikimedia.org/wikipedia/commons/2/23/COLLECTIE_TROPENMUSEUM_Portret_van_Raden_Ajeng_Kartini_TMnr_10018776.jpg"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;

    case 0:
        // Kategori 0: Perusahaan Teknologi
        $data = [
            [
                "name" => "Apple Inc.",
                "description" => "Perusahaan teknologi terkenal dengan produk iPhone.",
                "year" => 1976,
                "origin" => "Amerika Serikat",
                "image_url" => "https://akm-img-a-in.tosshub.com/indiatoday/apple_647_040116105516.jpg?.xccL1E_SxXCNt9K1Jjgg.vKCdo0Mf0u"
            ],
            [
                "name" => "Google LLC",
                "description" => "Perusahaan teknologi terkenal dengan mesin pencari Google.",
                "year" => 1998,
                "origin" => "Amerika Serikat",
                "image_url" => "https://play-lh.googleusercontent.com/1-hPxafOxdYpYZEOKzNIkSP43HXCNftVJVttoo4ucl7rsMASXW3Xr6GlXURCubE1tA=w3840-h2160-rw"
            ],
            // Tambahkan data lain untuk kategori ini
        ];
        break;
}

// Tampilkan data dalam bentuk tabel HTML
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Tahun</th>
        <th>Asal Daerah</th>
        <th>Gambar</th>
      </tr>";

foreach ($data as $item) {
    echo "<tr>";
    echo "<td>{$item['name']}</td>";
    echo "<td>{$item['description']}</td>";
    echo "<td>{$item['year']}</td>";
    echo "<td>{$item['origin']}</td>";
    echo "<td><img src='{$item['image_url']}' width='100'></td>";
    echo "</tr>";
}

echo "</table>";
?>




    