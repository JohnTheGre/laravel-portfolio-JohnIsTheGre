<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class PostFeatureTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Test to see if the user can access the edit page.
     */
    public function test_user_can_access_edit_page()
    {
        // Create a post
        $post = Post::create([
            'title' => 'Test Post',
            'slug' => 'test-post',
            'body' => 'This is a test post.',
        ]);

        // Visit the show page of the post
        $response = $this->get(route('posts.show', $post));

        // Assert that the "Edit Question" button is present
        $response->assertSee('Edit Question');

        // Click on the "Edit Question" button
        $response->click('Edit Question');

        // Assert that the user is redirected to the edit page
        $response->assertRedirect(route('posts.edit', $post));
    }
}
