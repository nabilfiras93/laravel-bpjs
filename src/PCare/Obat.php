<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Obat extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'obat';

    public function dpho($keyword)
    {
        $this->feature .= "/dpho/{$keyword}";
        return $this;
    }

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";
        return $this;
    }
}
