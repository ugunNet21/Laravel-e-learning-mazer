<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1>Laravel 11 | E-Learning</h1>

## Screenshoot

<p>Dashboard Admin</p>

![image](https://github.com/ugunNet21/Laravel-e-learning-mazer/assets/45864165/44b3959d-93d0-49e0-b1f8-51219376497d)


## Skema Tabel dan Relasi

```bash
Tabel:

Siswa:

ID siswa (Primary Key)
Nama siswa
Jenis kelamin
Tanggal lahir
Alamat
Jenjang (SMP/SMA)

Mata Pelajaran:

ID mata pelajaran (Primary Key)
Nama mata pelajaran
Deskripsi

Guru:

ID guru (Primary Key)
Nama guru
Mata pelajaran yang diajarkan
Jenjang (SMP/SMA)

Nilai:

ID nilai (Primary Key)
ID siswa (Foreign Key)
ID mata pelajaran (Foreign Key)
Nilai Ulangan Harian
Nilai Ujian Tengah Semester
Nilai Ujian Akhir Semester
Sumber Nilai (e-learning/manual)
Jenjang (SMP/SMA)

Raport:

ID raport (Primary Key)
ID siswa (Foreign Key)
Semester
Tahun ajaran
Rata-rata nilai
Keterangan (naik kelas, tidak naik kelas, dll.)
Jenjang (SMP/SMA)

E-Learning:

ID materi (Primary Key)
ID guru (Foreign Key)
ID mata pelajaran (Foreign Key)
Judul materi
Deskripsi materi
Tautan materi
Jenjang (SMP/SMA)

Soal:

ID soal (Primary Key)
ID guru (Foreign Key)
ID mata pelajaran (Foreign Key)
Jenis Soal (essay/pilihan ganda)
Pertanyaan
Jenjang (SMP/SMA)

Jawaban:

ID jawaban (Primary Key)
ID soal (Foreign Key)
Opsi jawaban
Jenjang (SMP/SMA)

Kelas:

ID kelas (Primary Key)
Nama kelas
Tingkat
Jenjang (SMP/SMA)

Jurusan:

ID jurusan (Primary Key)
Nama jurusan
Jenjang (SMA)

Absensi Siswa:

ID absensi siswa (Primary Key)
ID siswa (Foreign Key)
Tanggal
Kehadiran (hadir/tidak hadir/izin)
Jenjang (SMP/SMA)

Absensi Guru:

ID absensi guru (Primary Key)
ID guru (Foreign Key)
Tanggal
Kehadiran (hadir/tidak hadir/izin)
Jenjang (SMP/SMA)

Relasi:
Setiap Siswa memiliki banyak Nilai (one-to-many dengan Siswa sebagai entitas utama).
Setiap Mata Pelajaran memiliki banyak Nilai (one-to-many dengan Mata Pelajaran sebagai entitas utama).
Setiap Siswa memiliki satu Raport untuk setiap Semester (one-to-many dengan Siswa sebagai entitas utama).
Setiap Raport berhubungan dengan banyak Nilai (one-to-many dengan Raport sebagai entitas utama).
Setiap Guru dapat membuat banyak E-Learning (one-to-many dengan Guru sebagai entitas utama).
Setiap Mata Pelajaran memiliki banyak E-Learning (one-to-many dengan Mata Pelajaran sebagai entitas utama).
Setiap Guru dapat membuat banyak Soal (one-to-many dengan Guru sebagai entitas utama).
Setiap Mata Pelajaran memiliki banyak Soal (one-to-many dengan Mata Pelajaran sebagai entitas utama).
Setiap Soal memiliki banyak Jawaban (one-to-many dengan Soal sebagai entitas utama).
Setiap Kelas memiliki banyak Siswa (one-to-many dengan Kelas sebagai entitas utama).
Setiap Jurusan memiliki banyak Siswa (one-to-many dengan Jurusan sebagai entitas utama).
Setiap Siswa memiliki banyak Absensi Siswa (one-to-many dengan Siswa sebagai entitas utama).
Setiap Guru memiliki banyak Absensi Guru (one-to-many dengan Guru sebagai entitas utama).

```

## Urutan Membuat Migration

```bash
1. Jenjang
2. Jurusan
3. Mata Pelajaran
4. Kelas
5. Guru
6. E-Learning
7. Soal
8. Jawaban
9. Siswa
10. Nilai
11. Raport
12. Absensi Guru
13. Absensi Siswa
```

## Install ation & Configuration

```bash
composer install
composer update
npm install
npm run dev 
npm run build
composer require spatie/laravel-permission
php artisan migrate --seed
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
