<?php

namespace MadeITBelgium\TeamLeader\Crm;

/**
 * TeamLeader Laravel PHP SDK.
 */
class Company
{
    private $teamleader;

    public function __construct($teamleader)
    {
        $this->setTeamleader($teamleader);
    }

    /**
     * set Teamleader.
     *
     * @param $teamleader
     */
    public function setTeamleader($teamleader)
    {
        $this->teamleader = $teamleader;
    }

    /**
     * get Teamleader.
     *
     * @param $teamleader
     */
    public function getTeamleader()
    {
        return $this->teamleader;
    }

    /**
     * Get a list of contacts.
     */
    public function list($data = [])
    {
        return $this->teamleader->getCall('companies.list?'.http_build_query($data));
    }
}
