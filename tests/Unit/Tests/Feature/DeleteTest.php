<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Faq;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_an_faq_is_deleted()
    {
        // Arrange: create an FAQ
        $faq = Faq::factory()->create();

        // Act: send a DELETE request to the destroy route
        $response = $this->delete(route('faqs.destroy', $faq));

        // Assert: check that the FAQ is no longer in the database
        $this->assertDatabaseMissing('faqs', ['id' => $faq->id]);

        // Assert: check the response
        $response->assertStatus(302);
        $response->assertRedirect(route('faqs.index'));
    }
}
