<h1 align="center">Tugas Web</h1>

## Author

Tugas Web dibaut oleh :

- Github : <a href="https://github.com/Firyal224/Tugasweb.git
">  </a>


## Fitur 

- Autentikasi Admin, Pegawai

## User

**Admin**

- email: admin@gmail.com
- Password: admin123

**Pegawai**

- email: pegawai@gmail.com
- Password: pegawai123


## Install

**Clone Repository**

```bash
git clone https://github.com/Firyal224/Tugasweb.git
```
## Edit View

**Base Layout Dashboard Edit**
- Masuk ke Resources\Views\layoutsDashboard\ edit footer untuk semua page (sudah login atau belum)
- Edit navbar di path yang sama untuk tampilan dashboard (sesudah login -> admin / pegawai)
- Edit sidebar di path file yang sama
- cssnya ada di file head.blade.php

**Base Datatable Edit View**
- Untuk admin masuk ke Resources\views\admin\dashboard.blade.php
- Untuk pegawai masuk ke ......\pegawai\dashboardPegawai.blade.php
- note * Kalau rubah Htmlnya perhatiin id -> name -> for -> value
- Ada bug tampilan waktu validasi mandatory field -> di modal simpan di file yang sama -> tulisan Requiered jadi besar harusnya enggak
![image](https://user-images.githubusercontent.com/71587225/163460744-1973d8cf-7de2-43c1-9095-e1ef7b767a82.png)
( Ini aing juga gtw kenapa :") mengsedih )

- button show belum bisa 

**Base Landing page Edit**
- Resources\views\home
- 
**Download zip**

```bash
extract file zip
```

## Buka di kode editor


## Install composer

```bash
composer install
```

## Copy .Env

```bash
copy .env.example menjadi .env
```

## Buat database di localhost 

```bash
nama database : laravel_8_blog
```

## Setting database di .env

```bash
DB_PORT=3306
DB_DATABASE=laravel_8_blog
DB_USERNAME=root
DB_PASSWORD=
```

## Generate key

```bash
php artisan key:generate
```

## Jalankan migrate dan seeder

```bash
php artisan migrate --seed
```

## Buat storage link

```bash
php artisan storage:link
```

## Jalankan Serve

```bash
php artisan serve
```

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

- Copyright © 2022 Firyal
