<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Comment;


use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
  
    public function testNoBlogPostsWhenNothingInDatabase()
    {

       $reponse=$this->get('/post');
       $reponse->assertSeeText('No blog posts yet');
    }

    private function createDummyBlogPost(){
        $post = new BlogPost();
        $post->title= 'New title';
        $post->content='content of the blog post';
        $post->save();

        return BlogPost::factory()->testState()->create();


        // return $post;
    }

    public function testSee1BlogPostWhenThereIs1(){

        //Arrange
        $post = new BlogPost();
        $post->title="New title";
        $post->content="Content of the blog post";
        $post->save();

        //Act
        $response = $this->get('/post');

        //Assert
        $response->assertSeeText('New title');

        $this->assertDatabaseHas('blog_posts', ['title'=>'New title']);
    }

    public function testStoreValid(){
        $params = [
            'title'=> 'Valid title',
            'content' =>'At least 10 characters'
        ];

        $this->post('/post', $params)
            ->assertStatus(302)
            ->assertSessionHas('status');

        $this->assertEquals(session('status'),'The blog post was created!');
    }

    public function tesStoreFail(){
        $params= [
            'title'=> 'x',
            'content'=> 'x'
        ];

        
        $this->post('/post', $params)
            ->assertStatus(302)
            ->assertSessionHas('errors');

        $messages = session('errors')->getMessages();
        // dd($messages->getMessages());
        $this->assertEquals($messages['title'][0], 'Title must be at least 5 characters');
        $this->assertEquals($messages['content'][0], 'Title must be at least 10 characters');
    }

    public function testSee1BlogPostWithComments()
    {
        // Create a dummy blog post
        $post = $this->createDummyBlogPost();
    
        // Create 4 comments associated with the blog post
        \App\Models\Comment::factory()->count(4)->create([
            'blog_post_id' => $post->id,  // Fixing variable name from $post_id to $post->id
        ]);
    
        // Make a GET request to the '/posts' endpoint
        $response = $this->get('/post');
    
        // Assert that the response contains the text '5 comments'
        $response->assertSeeText('5 comments');
    }
    
    
}