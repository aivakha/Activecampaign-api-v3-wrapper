<?php

namespace ActiveCampaign\Classes;

use ActiveCampaign\Connector;


class FieldRels extends Connector
{

    public function create($params)
    {
        return $this->request('POST', 'fieldRels', ['fieldRel' => $params]);
    }


}