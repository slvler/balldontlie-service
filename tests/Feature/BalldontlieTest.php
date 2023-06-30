<?php

namespace Slvler\BalldontlieLaravel\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Slvler\BalldontlieLaravel\Facades\Balldontlie;
use Slvler\BalldontlieLaravel\Tests\Unit\TestCase;

class BalldontlieTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Config::set('balldontlie.base_uri', 'https://www.balldontlie.io/api/v1/');
    }

    /**
     * @test
     */
    public function test_players()
    {
        $this->assertIsString(Balldontlie::players(237));
    }

    /**
     * @test
     */
    public function test_teams()
    {
        $this->assertIsString(Balldontlie::teams(14));
    }

    /**
     * @test
     */
    public function test_games()
    {
        $this->assertIsString(Balldontlie::games(1));
    }

    /**
     * @test
     */
    public function test_stats()
    {
        $this->assertIsString(Balldontlie::stats());
    }
}
