<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Peserta extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'peserta';

    public function jenisKartu($jenisKartu)
    {
        $this->feature .= "/{$jenisKartu}";
        return $this;
    }
}
