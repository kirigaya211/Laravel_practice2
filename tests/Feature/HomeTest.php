<?php

namespace Tests\Feature;


use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testHomePageIsWorkingCorrectly(): void
    {
        $response =$this->get('/');

        $response->assertSeeText('Welcome to Laravel!');
        $response->assertSeeText('This is the content of the main page!');
    }

    public function testContactPageIsWorkingCorrectly(){
        $response =$this->get('/contact');
        $response->assertSeeText('This my contact information');
        $response->assertSeeText('Arsenal Christopher Jr G.');
    
    }
}
