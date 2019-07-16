<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Pendaftaran extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'pendaftaran';

    public function tanggalDaftar($tanggalDaftar)
    {
        $this->feature .= "/tglDaftar/{$tanggalDaftar}";
        return $this;
    }

    public function nomorUrut($nomorUrut)
    {
        $this->feature .= "/noUrut/{$nomorUrut}";
        return $this;
    }
}
