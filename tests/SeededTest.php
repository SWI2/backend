<?php

namespace Tests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Storage;

class SeededTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        Storage::fake();
        $this->artisan('db:seed');
    }
}
