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
        $response->assertStatus(302); // Ensure the response is a redirect
        $response->assertSessionHasNoErrors(); // Ensure there are no validation errors
        $response->assertSessionHas('success', 'FAQ created successfully!'); // Check for success message in session

        $this->assertDatabaseCount('faqs', 1); // Check that one FAQ record is created
        $this->assertDatabaseHas('faqs', [
            'question' => 'Who is the GOAT?',
            'answer' => 'Messi',
            'link' => 'https://example.com/messi'
        ]); // Ensure the FAQ details are correct
    }


    /**
     * Test to check if error message appears when wrong information is inputted during FAQ creation.
     */
    public function test_error_message_appears_on_wrong_information()
    {
        // Arrange - Invalid FAQ data (too short)
        $route = route('faqs.store');
        $requestBody = [
            'question' => 'Q?', // Question is too short
            'answer' => 'A', // Answer is too short
            'link' => 'https://example.com' // Valid URL
        ];

        // Act
        $response = $this->post($route, $requestBody);

        // Assert
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['question', 'answer']);
        $response->assertSessionDoesntHaveErrors('link');
    }
    /**
     * Basic test to ensure the home page is accessible.
     */
    public function test_home_page_is_accessible()
    {
        // Act
        $response = $this->get('/');

        // Assert
        $response->assertStatus(200); // Ensure the home page returns a 200 status
    }

}
