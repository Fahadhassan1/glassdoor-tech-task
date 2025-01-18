<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductControllerFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_filters_by_category()
    {
        // Arrange
        Product::factory()->create(['category' => 'electronics']);
        Product::factory()->create(['category' => 'furniture']);

        // Act
        $response = $this->getJson('/api/products?category=electronics');

        // Assert
        $response->assertStatus(200);
        $responseData = $response->json('data');
        $this->assertCount(1, $responseData);
        $this->assertEquals('electronics', $responseData[0]['category']);
    }

    public function test_index_sorts_by_price_asc()
    {
        // Arrange
        Product::factory()->create(['price' => 100]);
        Product::factory()->create(['price' => 50]);

        // Act
        $response = $this->getJson('/api/products?sort=asc');

        // Assert
        $response->assertStatus(200);
        $responseData = $response->json('data');
        $this->assertCount(2, $responseData);
        $this->assertEquals(50, $responseData[0]['price']);
        $this->assertEquals(100, $responseData[1]['price']);
    }

    public function test_index_searches_by_name()
    {
        // Arrange
        Product::factory()->create(['name' => 'Laptop']);
        Product::factory()->create(['name' => 'Table']);

        // Act
        $response = $this->getJson('/api/products?search=Laptop');

        // Assert
        $response->assertStatus(200);
        $responseData = $response->json('data');
        $this->assertCount(1, $responseData);
        $this->assertEquals('Laptop', $responseData[0]['name']);
    }

    public function test_index_paginates_results()
    {
        // Arrange
        Product::factory()->count(15)->create();

        // Act
        $response = $this->getJson('/api/products?page=1');

        // Assert
        $response->assertStatus(200);
        $responseData = $response->json('data');
        $this->assertCount(10, $responseData);
        $this->assertEquals(15, $response->json('total'));
    }

}
