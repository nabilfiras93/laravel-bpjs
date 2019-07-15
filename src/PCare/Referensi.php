<?php
namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Referensi extends BpjsService
{
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
