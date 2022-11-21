<?php namespace Awageeks\Bpjs\PCare;

class Peserta extends BasePcare
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
