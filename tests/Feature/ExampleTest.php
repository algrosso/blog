<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $appURL = env('APP_URL');

        $urls = [
            '/',
            '/login',
            '/books',
            '/books/1',
	    '/books/4/edit',
	    '/books/create',
	    '/books/index',
	    '/books/destroy',
	    '/books/show',
	    '/books/update',
	    '/books/store'
        ];

        echo  PHP_EOL;

        foreach ($urls as $url) {
            $response = $this->get($url);
            if((int)$response->status() !== 200){
                echo  $appURL . $url . ' (FALLO) retorno ' . strval((int)$response->status()) . ' .';
                $this->assertTrue(false);
            } else {
                echo $appURL . $url . ' (Exito !) ';
                $this->assertTrue(true);
            }
            echo  PHP_EOL;
        }

    }
}

