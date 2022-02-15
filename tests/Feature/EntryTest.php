<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EntryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function a_entry_can_be_created()
    {
      $response = $this->post('/api/entries', [
        'title' => 'test title',
        'content' => 'test content'
      ]);
      $response->assertOk();
    }
}
