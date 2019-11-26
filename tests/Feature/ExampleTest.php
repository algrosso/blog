<?php


use App\Book as Libro;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Str;

const cBookNum=4;

class ExampleTest extends TestCase
{

    use WithoutMiddleware;

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

	public function testCanCreateBook()
	{
		for($i=0; $i< cBookNum ; $i++){
	    		$book=factory(Libro::class)->create();
    			$this->assertTrue($book->save()==1);
		}
        }

}

