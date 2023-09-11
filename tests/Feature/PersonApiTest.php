<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Database\Factories\PersonFactory;
use Illuminate\Support\Str; 
use Tests\TestCase;
use App\Models\Person;

class PersonApiTest extends TestCase
{
    use RefreshDatabase;

    public function testCreatePerson()
    {
        // Create a new person using the factory
        $name = Str::random(10);

        // Make a POST request to create a person
        $response = $this->post('/api', [
            'name' => $name,
        ]);

        $response->assertStatus(201);
        $response->assertJson([
            'name' => $name,
        ]);
    }

    public function testGetPerson()
    {
        // Create a new person using the factory
        $person = PersonFactory::new()->create();

        // Make a GET request to retrieve the person
        $response = $this->get("/api/{$person->id}");

        $response->assertStatus(200);
        $response->assertJson([
            'id' => $person->id,
            'name' => $person->name,
        ]);
    }

    public function testUpdatePerson()
    {
        // Create a new person using the factory
        $person = PersonFactory::new()->create();

        // Make a PUT request to update the person
        $response = $this->put("/api/{$person->id}", [
            'name' => 'Updated Name',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'id' => $person->id,
            'name' => 'Updated Name',
        ]);
    }

    public function testDeletePerson()
    {
        // Create a new person using the factory
        $person = PersonFactory::new()->create();

        // Make a DELETE request to delete the person
        $response = $this->delete("/api/{$person->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('people', ['id' => $person->id]);
    }
}
