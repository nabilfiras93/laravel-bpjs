<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class StatusPulang extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'statuspulang';

    public function rawatInap($status = true)
    {
        $this->feature .= "/rawatInap/{$status}";
        return $this;
    }
}
