<?php
namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Referensi extends BpjsService
{

    public function diagnosa($keyword, $start = 0, $limit = 10)
    {
        $response = $this->get("diagnosa/{$keyword}/{$start}/{$limit}");
        return json_decode($response, true);
    }

    public function dokter($start = 0, $limit = 10)
    {
        $response = $this->get("dokter/{$start}/{$limit}");
        return json_decode($response, true);
    }

    public function kesadaran()
    {
        $response = $this->get("kesadaran");
        return json_decode($response, true);
    }

    public function rujukan($nomorKunjungan)
    {
        $response = $this->get("kunjungan/rujukan/{$nomorKunjungan}");
        return json_decode($response, true);
    }

    public function riwayatKunjungan($nomorKartu)
    {
        $response = $this->get("kunjungan/peserta/{$nomorKartu}");
        return json_decode($response, true);
    }

    public function mcu($nomorKunjungan)
    {
        $response = $this->get("mcu/kunjungan/{$nomorKunjungan}");
        return json_decode($response, true);
    }

    public function obat($keyword, $start = 0, $limit = 10)
    {
        $response = $this->get("obat/dpho/{$keyword}/{$start}/{$limit}");
        return json_decode($response, true);
    }

    public function obatByKunjungan($nomorKunjungan)
    {
        $response = $this->get("obat/kunjungan/{$nomorKunjungan}");
        return json_decode($response, true);
    }

    public function pendaftaranByNomorUrut($nomorUrut, $tanggalDaftar)
    {
        $response = $this->get("pendaftaran/noUrut/{$nomorUrut}/tglDaftar/{$tanggalDaftar}");
        return json_decode($response, true);
    }

    public function pendaftaranProvider($tanggalDaftar, $start = 0, $limit = 10)
    {
        $response = $this->get("pendaftaran/tglDaftar/{$tanggalDaftar}/{$start}/{$limit}");
        return json_decode($response, true);
    }

    public function peserta($keyword, $jenisKartu = 'noka')
    {
        $response = $this->get("peserta/{$jenisKartu}/{$keyword}");
        return json_decode($response, true);
    }

    public function poli($start = 0, $limit = 10)
    {
        $response = $this->get("poli/fktp/{$start}/{$limit}");
        return json_decode($response, true);
    }

    public function provider($start = 0, $limit = 10)
    {
        $response = $this->get("provider/{$start}/{$limit}");
        return json_decode($response, true);
    }

    public function tindakan($kodeTkp, $start = 0, $limit = 10)
    {
        $response = $this->get("tindakan/kdTkp/{$kodeTkp}/{$start}/{$limit}");
        return json_decode($response, true);
    }

    public function tindakanByKunjungan($nomorKunjungan)
    {
        $response = $this->get("tindakan/kunjungan/{$nomorKunjungan}");
        return json_decode($response, true);
    }

    public function statusPulang($rawatInap = true)
    {
        $isRawatInap = var_export($rawatInap, true);
        $response = $this->get("statuspulang/rawatInap/{$isRawatInap}");
        return json_decode($response, true);
    }

    public function kelompokClub($kodeJenisKelompok)
    {
        $response = $this->get("kelompok/club/{$kodeJenisKelompok}");
        return json_decode($response, true);
    }

    public function kelompokKegiatan($tanggal)
    {
        $response = $this->get("kelompok/kegiatan/{$tanggal}");
        return json_decode($response, true);
    }

    public function kelompokPeserta($eduId)
    {
        $response = $this->get("kelompok/peserta/{$eduId}");
        return json_decode($response, true);
    }

    public function spesialis()
    {
        $response = $this->get("spesialis");
        return json_decode($response, true);
    }

    public function subSpesialis($kodeSpesialis)
    {
        $response = $this->get("spesialis/{$kodeSpesialis}/subspesialis");
        return json_decode($response, true);
    }

    public function sarana()
    {
        $response = $this->get("spesialis/sarana");
        return json_decode($response, true);
    }

    public function khusus()
    {
        $response = $this->get("spesialis/khusus");
        return json_decode($response, true);
    }

    public function faskesRujukanSubSpesialis($kodeSubSpesialis, $kodeSarana, $tanggalRujuk)
    {
        $response = $this->get("spesialis/rujuk/subspesialis/{$kodeSubSpesialis}/sarana/{$kodeSarana}/tglEstRujuk/{$tanggalRujuk}");
        return json_decode($response, true);
    }

    public function faskesRujukanKhusus($kodeKhusus, $nomorKartu, $tanggalRujuk)
    {
        $response = $this->get("spesialis/rujuk/khusus/{$kodeKhusus}/noKartu/{$nomorKartu}/tglEstRujuk/{$tanggalRujuk}");
        return json_decode($response, true);
    }

    public function faskesRujukanKhususSubSpesialis($kodeKhusus, $kodeSubSpesialis, $nomorKartu, $tanggalRujuk)
    {
        $response = $this->get("spesialis/rujuk/khusus/{$kodeKhusus}/subspesialis/{$kodeSubSpesialis}/noKartu/{$nomorKartu}/tglEstRujuk/{$tanggalRujuk}");
        return json_decode($response, true);
    }

}
