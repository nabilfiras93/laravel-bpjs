<?php namespace Awageeks\Bpjs\PCare;

class Spesialis extends BasePcare
{
    protected $feature = 'spesialis';
    protected $subFeature;
    protected $param;
    protected $isRujuk = false;

    public function rujuk()
    {
        $this->feature .= "/rujuk";
        return $this;
    }

    public function subSpesialis($kodeSpesialis = null)
    {
        $this->subFeature = "subspesialis";
        $this->param = $kodeSpesialis;
        $this->setFeature();
        return $this;
    }

    public function sarana($kodeSarana = null)
    {
        $this->subFeature = "sarana";
        $this->param = $kodeSarana;
        $this->setFeature();
        return $this;
    }

    public function tanggalRujuk($tanggalRujuk)
    {
        $this->feature .= "/tglEstRujuk/{$tanggalRujuk}";
        return $this;
    }

    public function khusus($kodeKhusus = null)
    {
        $this->subFeature = "khusus";
        $this->param = $kodeKhusus;
        $this->setFeature();
        return $this;
    }

    public function nomorKartu($nomorKartu = null)
    {
        $this->feature .= "/noKartu/{$nomorKartu}";
        return $this;
    }

    private function setFeature()
    {
        if ($this->isRujuk) {
            $this->feature .= "/{$this->subFeature}/{$this->param}";
        } else {
            $this->feature .= "/{$this->param}/{$this->subFeature}";
        }
    }

    public function setRujuk(bool $isRujuk)
    {
        $this->isRujuk = $isRujuk;
    }
}
