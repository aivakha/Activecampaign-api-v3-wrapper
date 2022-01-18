<?php

namespace ActiveCampaign\Classes;

use ActiveCampaign\Connector;


class Fields extends Connector
{

    public function all()
    {
        return $this->request('GET', 'fields');
    }

    public function create($params)
    {
        return $this->request('POST', 'fields', ['field' => $params]);
    }
    

//    public function get($list_id)
//    {
//        return $this->request('GET', 'lists/' . strval($list_id));
//    }


//    public function create($params)
//    {
//        return $this->request('POST', 'lists', ['list' => $params]);
//    }
//
//
//    public function createGroup($params)
//    {
//        return $this->request('POST', 'listGroups', ['listGroup' => $params]);
//    }
//
//
//    public function delete($list_id)
//    {
//        return $this->request('DELETE', 'lists/' . strval($list_id));
//    }

}