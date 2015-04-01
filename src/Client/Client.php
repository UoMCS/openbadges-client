<?php

namespace OpenBadges\Client;

class Client
{
  private $base_url;

  public function __construct($base_url = BACKEND_BASE_URL)
  {
    $this->base_url = $base_url;
  }
}
