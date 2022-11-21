<?php namespace Awageeks\Bpjs\PCare;

class Poli extends BasePcare
{
    /**
     * @var string
     */
    protected $feature = 'poli';

    public function fktp()
    {
        $this->feature .= "/fktp";
        return $this;
    }
}
