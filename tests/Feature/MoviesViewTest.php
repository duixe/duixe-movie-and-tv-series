<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function main_page_show_correct_info() {
      $response = $this->get(\route('movies.index'));

      $response->assertSuccessful('popular Movies');
    }
}
