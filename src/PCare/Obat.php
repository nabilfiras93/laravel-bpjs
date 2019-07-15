<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class Obat extends BpjsService
{
    /**
     * @var string
     */
    protected $feature = 'obat';

    public function dpho()
    {
        $this->feature .= '/dpho';
        return $this;
    }

    public function kunjungan()
    {
        $this->feature .= '/kunjungan';
        return $this;
    }

    public function destroy($keyword)
    {
        // dirty hack https://stackoverflow.com/a/27329541/2699436
        list($kodeObat, $nomorKunjungan) = func_get_args();
        $response = $this->delete($this->feature, $kodeObat, ['kunjungan' => $nomorKunjungan]);
        return json_decode($response, true);
    }
}
