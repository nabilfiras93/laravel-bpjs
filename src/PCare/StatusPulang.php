<?php namespace Awageeks\Bpjs\PCare;

class StatusPulang extends BasePcare
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
