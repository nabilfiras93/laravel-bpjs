<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class BasePcare extends BpjsService
{
    public function __construct($configurations = [])
    {
        $serviceName = env('BPJS_SERVICE_PCARE', 'pcare-rest-dev');
        $this->setServiceName($serviceName);
        parent::__construct($configurations);
    }
}
