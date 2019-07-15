<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Mcu extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'mcu';

    public function kunjungan()
    {
        $this->feature .= '/kunjungan';
        return $this;
    }

    public function destroy($keyword)
    {
        // dirty hack https://stackoverflow.com/a/27329541/2699436
        list($kodeMcu, $nomorKunjungan) = func_get_args();
        $response = $this->delete($this->feature, $kodeMcu, ['kunjungan' => $nomorKunjungan]);
        return json_decode($response, true);
    }
}
