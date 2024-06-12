<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogFeatureTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test to see if the post gets created.
     */
    public function test_that_a_blog_post_is_created()
    {
        // Arrange
        $route = route('posts.store');
        $requestBody = [
            'title' => 'Who are you?',
            'slug' => 'Harry McGuide',
            'body' => 'Hello its me harry yes the manchester united player mee!!!'
        ];

        // Act
        $response = $this->post($route, $requestBody);

        // Assert
        $response->assertStatus(302); // Ensure the response is a redirect
        $response->assertSessionHasNoErrors(); // Ensure there are no validation errors
        $response->assertSessionHas('success', 'Blog created successfully!'); // Check for success message in session

        $this->assertDatabaseCount('posts', 1); // Check that one blog post record is created
        $this->assertDatabaseHas('posts', [
            'title' => 'Who are you?',
            'slug' => 'Harry McGuide',
            'body' => 'Hello its me harry yes the manchester united player mee!!!'
        ]); // Ensure the blog details are correct
    }

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test to see if message appears when the info is wrong.
     */
    public function test_error_message_appears_on_invalid_form_submission()
    {
        // Invalid post data
        $postData = [
            'title' => '', // Title is required
            'slug' => 'this-is-a-test-slug',
            'body' => 'Sho', // Body is too short
        ];

        //Submit the form with invalid data
        $response = $this->post(route('posts.store'), $postData);

        //Check if error message appears
        $response->assertStatus(302) // Ensure the response is a redirect
        ->assertSessionHasErrors(['title', 'body']); // Check for validation errors
    }
}
