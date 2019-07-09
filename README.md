# Aplikasi Penatausahaan Alat Keterangan

Aplikasi ini dibuat untuk memudahkan penatausahaan alat keterangan

## Memulai

Instruksi di bawah ini dapat membantu Anda mempersiapkan salinan proyek yang dapat dijalankan di komputer lokal untuk keperluan pengembangan dan uji coba.

### Apa yang dibutuhkan

Apa saja yang perlu dipersiapkan untuk menjalankan aplikasi ini dalam lingkungan pengembangan

```
PHP versi 5.6 atau yang lebih baru sangat direkomendasikan. Tidak disarankan menggunakan PHP versi yang lebih lama.

MySQL versi 5.1  atau yang lebih baru.
```

Pengembangan aplikasi ini menggunakan XAMPP versi 7.2.11-0 di Linux Kubuntu.

### Pemasangan

Langkah-langkah pemasangan:

* Clone proyek ini dari GitHub pada server root (untuk XAMPP dapat diletakkan di folder htdocs)
```
cd /path/to/server/root
git clone https://github.com/maqwastudio/penatausahaan-ak.git
```

* Import file examples_database.sql di PHPmyAdmin

* Jalankan web server (Apache) dan MySql.

* Buka web browser dan akses
```
http://localhost/penatausahaan-ak
```

## Dikembangkan dengan

* [Codeigniter](https://www.codeigniter.com/) - PHP framework yang digunakan
* [Bootstrap 4](https://getbootstrap.com/) - User Interface
* [GroceryCRUD](https://www.grocerycrud.com/) - CRUD library untuk menampilkan hasil

## Authors

* **Muhammad Azzuhair** - *Initial work* - [msazzuhair](https://github.com/msazzuhair)

Lihat daftar [kontributor](https://github.com/maqwastudio/penatausahaan-ak/graphs/contributors) yang turut berpartisipasi.

## Lisensi

Proyek ini menggunakan lisensi MIT - lihat berkas [LICENSE.md](LICENSE.md)