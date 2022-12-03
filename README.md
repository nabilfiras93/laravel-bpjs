# BPJS Kesehatan Indonesia

PHP package to access BPJS Kesehatan API.

This package is a wrapper of BPJS Web Service

Katalog: https://dvlp.bpjs-kesehatan.go.id:8888/trust-mark/portal.html \
Base URL: https://apijkn-dev.bpjs-kesehatan.go.id

## Installation

- Require this package with composer.
`composer require awageeks/laravel-bpjs`

- Add the ServiceProvider to the providers array in config/app.php.
`Awageeks\Bpjs\BpjsServiceProvider::class,`

- Copy the package config to your local config with the publish command:
`php artisan vendor:publish --provider="Awageeks\Bpjs\BpjsServiceProvider"`

- Update your `.env` file
```
BPJS_CONS_ID=CONSID        # consumer id
BPJS_SECRET_KEY=SECRETKEY  # secret key
BPJS_USERNAME=USERNAME     # pcare login user name
BPJS_PASSWORD=PASSWORD     # pcare login password
BPJS_USER_KEY=USERKEY      # user key
BPJS_APP_CODE=095
BPJS_BASE_URL=https://apijkn-dev.bpjs-kesehatan.go.id
BPJS_SERVICE_PCARE=pcare-rest-dev
```

## Usage

```
// diagnosa
$bpjs = new Awageeks\Bpjs\Pcare\Diagnosa();
return $bpjs->keyword($keyword)->index($start, $limit);
```
```
// dokter
$bpjs = new Awageeks\Bpjs\Pcare\Dokter();
return $bpjs->index($start, $limit);
```
```
// kesadaran
$bpjs = new Awageeks\Bpjs\Pcare\Kesadaran();
return $bpjs->index();
```
```
// kunjungan rujukan
$bpjs = new Awageeks\Bpjs\Pcare\Kunjungan();
return $bpjs->rujukan($nomorKunjungan)->index();
// kunjungan riwayat
$bpjs = new Awageeks\Bpjs\Pcare\Kunjungan();
return $bpjs->riwayat($nomorKartu)->index();
```
```
// mcu
$bpjs = new Awageeks\Bpjs\Pcare\Mcu();
return $bpjs->kunjungan($nomorKunjungan)->index();
```
```
// obat dpho
$bpjs = new Awageeks\Bpjs\Pcare\Obat();
return $bpjs->dpho($keyword)->index($start, $limit);
// obat kunjungan
$bpjs = new Awageeks\Bpjs\Pcare\Obat();
return $bpjs->kunjungan($nomorKunjungan)->index();
```
```
// pendaftaran tanggal daftar
$bpjs = new Awageeks\Bpjs\Pcare\Pendaftaran();
return $bpjs->tanggalDaftar($tglDaftar)->index($start, $limit);
// pendaftaran nomor urut
$bpjs = new Awageeks\Bpjs\Pcare\Pendaftaran();
return $bpjs->nomorUrut($nomorUrut)->tanggalDaftar($tanggalDaftar)->index();
```
```
// peserta
$bpjs = new Awageeks\Bpjs\Pcare\Peserta();
return $bpjs->keyword($keyword)->show();
// peserta jenis kartu [NIK/NOKA]
$bpjs = new Awageeks\Bpjs\Pcare\Peserta();
return $bpjs->jenisKartu($jenisKartu)->keyword($keyword)->show();
```
```
// poli
$bpjs = new Awageeks\Bpjs\Pcare\Poli();
return $bpjs->fktp()->index($start, $limit);
```
```
// provider
$bpjs = new Awageeks\Bpjs\Pcare\Provider();
return $bpjs->index($start, $limit);
```
```
// tindakan kode tkp
$bpjs = new Awageeks\Bpjs\Pcare\Tindakan();
return $bpjs->kodeTkp($keyword)->index($start, $limit);
// tindakan kunjungan
$bpjs = new Awageeks\Bpjs\Pcare\Tindakan();
return $bpjs->kunjungan($nomorKunjungan)->index();
```
```
// kelompok club
$bpjs = new Awageeks\Bpjs\Pcare\Kelompok();
return $bpjs->club($kodeJenisKelompok)->index();
// kelompok kegiatan
$bpjs = new Awageeks\Bpjs\Pcare\Kelompok();
return $bpjs->kegiatan($bulan)->index();
// kelompok peserta
$bpjs = new Awageeks\Bpjs\Pcare\Kelompok();
return $bpjs->peserta($eduId)->index();
```
```
// spesialis
$bpjs = new Awageeks\Bpjs\Pcare\Spesialis();
return $bpjs->index();
// spesialis sub spesialis
$bpjs = new Awageeks\Bpjs\Pcare\Spesialis();
return $bpjs->keyword($keyword)->subSpesialis()->index();
// spesialis sarana
$bpjs = new Awageeks\Bpjs\Pcare\Spesialis();
return $bpjs->sarana()->index();
// spesialis khusus
$bpjs = new Awageeks\Bpjs\Pcare\Spesialis();
return $bpjs->khusus()->index();
// spesialis rujuk
$bpjs = new Awageeks\Bpjs\Pcare\Spesialis();
return $bpjs->rujuk()->subSpesialis($kodeSubSpesialis)->sarana($kodeSarana)->tanggalRujuk($tanggalRujuk)->index();
// spesialis rujuk
$bpjs = new Awageeks\Bpjs\Pcare\Spesialis();
return $bpjs->rujuk()->khusus($kodeKhusus)->nomorKartu($nomorKartu)->tanggalRujuk($tanggalRujuk)->index();
// spesialis rujuk
$bpjs = new Awageeks\Bpjs\Pcare\Spesialis();
return $bpjs->rujuk()->khusus($kodeKhusus)->subSpesialis($kodeSubSpesialis)->nomorKartu($nomorKartu)->tanggalRujuk($tanggalRujuk)->index();
```

## Contributions
Your contribution is always welcome!
