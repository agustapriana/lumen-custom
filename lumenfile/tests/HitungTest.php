<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class HitungTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHitung_Success()
    {
        $this->get('/penjumlahan/1/2');

        $result = json_decode($this->response->getContent(), true);

        $this->assertEquals( "1", $result["awal"]);
        $this->assertEquals( "2", $result["akhir"]);
        $this->assertEquals( "3", $result["hasil"]);
    }
}
