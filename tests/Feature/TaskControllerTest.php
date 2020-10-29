<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;

class TaskControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);
        $response->assertViewHas('tasks');
    }

    public function testShow()
    {
        $task = Task::factory()->make();

        $response = $this->get('/tasks/' . $task->id);

        $response->assertStatus(200);

    }

    public function testShowUnexistaingTask()
    {
        $response = $this->get('/tasks/1234');

        $response->assertStatus(404);
    }


}
