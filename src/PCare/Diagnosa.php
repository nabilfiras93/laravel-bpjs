<?php namespace Awageeks\Bpjs\PCare;

class Diagnosa extends BasePcare
{
    /**
     * @var string
     */
    protected $feature = 'diagnosa';

    /**
     * Get pcare diagnosa.
     *
     * @param string $keyword
     * @param int $offset
     * @param int $limit
     * @return array
     */
    public function getDiagnosa(string $keyword = '', int $offset = null, int $limit = null)
    {
        if ($keyword) {
            $this->setKeyword($keyword);
        }

        if ($offset) {
            $this->setKeyword($offset);
        }

        if ($limit) {
            $this->setKeyword($limit);
        }

        $this->setResponse($this->keyword($this->keyword)->index($this->offset, $this->limit));

        return $this->response;
    }
}
