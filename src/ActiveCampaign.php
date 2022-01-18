<?php

namespace ActiveCampaign;

use ActiveCampaign\Classes\Fields;
use ActiveCampaign\Classes\Lists;
use ActiveCampaign\Classes\Contacts;
use ActiveCampaign\Classes\Tags;
use ActiveCampaign\Classes\FieldRels;


class ActiveCampaign
{
	private $base_url;
	private $api_key;

	public function __construct($base_url, $api_key)
	{
		$this->base_url = $base_url;
		$this->api_key = $api_key;
	}

	public function lists()
	{
		return new Lists($this->base_url, $this->api_key);
	}

	public function contacts()
	{
		return new Contacts($this->base_url, $this->api_key);
	}

	public function tags()
	{
		return new Tags($this->base_url, $this->api_key);
	}

    public function fields()
    {
        return new Fields($this->base_url, $this->api_key);
    }

    public function fieldRels()
    {
        return new FieldRels($this->base_url, $this->api_key);
    }

}