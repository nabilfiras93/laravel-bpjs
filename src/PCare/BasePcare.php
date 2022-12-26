<?php namespace Awageeks\Bpjs\PCare;

use Awageeks\Bpjs\BpjsService;

class BasePcare extends BpjsService
{
    protected $response;
    protected $keyword = '';
    protected $offset = 0;
    protected $limit = 10;

    public function __construct($configurations = [])
    {
        $serviceName = env('BPJS_SERVICE_PCARE', 'pcare-rest-dev');
        $this->setServiceName($serviceName);
        parent::__construct($configurations);
    }

    /**
     * Set keyword for pcare.
     *
     * @param string $keyword
     * @return void
     */
    public function setKeyword(string $keyword)
    {
        if (strlen($keyword) < 3) {
            throw new \ErrorException('The keyword must be 3 or more characters.', \Illuminate\Http\Response::HTTP_BAD_REQUEST);
        }
        $this->keyword = $keyword;
    }

    /**
     * Set offset for pcare.
     *
     * @param integer $offset
     * @return void
     */
    public function setOffset(int $offset)
    {
        $this->offset = $offset;
    }

    /**
     * Set limit for pcare.
     *
     * @param integer $limit
     * @return void
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    protected function setResponse($response)
    {
        $this->response = $response;

        $responseCode = $this->response['metaData']['code'];
        $successCodes = [
            \Illuminate\Http\Response::HTTP_OK,
            \Illuminate\Http\Response::HTTP_CREATED,
        ];

        if (!in_array($responseCode, $successCodes)) {
            throw new \ErrorException($this->response['metaData']['message'], $this->response['metaData']['code']);
        }
    }
}
