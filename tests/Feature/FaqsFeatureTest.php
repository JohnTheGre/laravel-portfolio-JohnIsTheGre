<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Faq;

class FaqsFeatureTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A test to check if an FAQ is created successfully.
     */
    public function test_that_an_faq_is_created()
    {
        // Arrange
        $route = route('faqs.store');
        $requestBody = [
            'question' => 'Who is the GOAT?',
            'answer' => 'Messi',
            'link' => 'https://example.com/messi'
        ];

        // Act
        $response = $this->post($route, $requestBody);

        // Assert
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseCount('faqs', 1);
        $this->assertDatabaseHas('faqs', [
            'question' => 'Who is the GOAT?',
            'answer' => 'Messi',
            'link' => 'https://example.com/messi'
        ]);
    }

    /**
     * Basic test to ensure the home page is accessible.
     */
    public function test_home_page_is_accessible()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
