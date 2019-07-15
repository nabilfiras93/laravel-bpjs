<?php
namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Referensi extends BpjsService
{
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
