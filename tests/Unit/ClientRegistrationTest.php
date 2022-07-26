<?php

namespace Tests\Unit;

use Tests\TestCase;

class ClientRegistrationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testClientListForAdmin()
    {
      $res = $this->getJson('api.clients.index');

      $res->assertOk();
    }
}
