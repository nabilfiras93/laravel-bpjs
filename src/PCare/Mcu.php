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
        $response = $this->delete($this->feature, $kodeMcu, $nomorKunjungan);
        return json_decode($response, true);
    }

    protected function delete($feature, $id)
    {
        // dirty hack https://stackoverflow.com/a/27329541/2699436
        list($feature, $kodeMcu, $nomorKunjungan) = func_get_args();
        $this->addHeader('Content-Type', 'application/json');
        $this->addHeader('Accept', 'application/json');
        try {
            $response = $this->getClients()->request(
                'DELETE',
                "{$this->getBaseUrl()}/{$this->getServiceName()}/{$feature}/{$kodeMcu}/kunjungan/{$nomorKunjungan}",
                [
                    'headers' => $this->getHeaders(),
                ]
            )->getBody()->getContents();
        } catch (\Exception $e) {
            $response = $e->getResponse()->getBody();
        }
        return $response;
    }
}
