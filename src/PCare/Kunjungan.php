<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Kunjungan extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'kunjungan';

    public function rujukan()
    {
        $this->feature .= '/rujukan';
        return $this;
    }

    public function peserta()
    {
        $this->feature .= '/peserta';
        return $this;
    }
}
