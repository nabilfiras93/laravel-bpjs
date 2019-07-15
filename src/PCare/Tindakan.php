<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Tindakan extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'tindakan';

    public function kodeTkp($kodeTkp)
    {
        $this->feature .= "/kdTkp/{$kodeTkp}";
        return $this;
    }

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";
        return $this;
    }
}
