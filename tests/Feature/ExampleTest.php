<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testProductWillCreate()
    {
        $this->post(route('product.store', [
            'name' => 'Produto X',
            'amount' => 120,
            'description' => 'Lorem Ipsum'
        ]));

        $product = Product::query()->where('name', 'Produto X')->first();

        self::assertNotNull($product);
    }

    public function testProductWillCreateInvalid()
    {
        $response = $this->post(route('product.store'), [
            'amount' => 120,
            'description' => 'Lorem Ipsum'
        ]);

        $product = Product::query()->where('description', 'Lorem Ipsum')->first();

        self::assertNull($product);
    }


    public function testEditPageWillOpen()
    {
        $product = Product::create([
            'name' => 'Produto X',
            'amount' => 120,
            'description' => 'Lorem Ipsum'
        ]);

        $response = $this->get(route('product.edit', $product->id));

        $response->assertOk();
    }
}
