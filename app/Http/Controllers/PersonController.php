<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        try {
            $persons = Person::all();
            return response()->json($persons, 200, [], JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }

    public function show($id)
    {
        try {
            $person = Person::find($id);
            if ($person) {
                return response()->json($person);
            } else {
                return response()->json(['message' => 'Person not found.'], 404);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }

    public function store(Request $request)
{
    try {
        // Validate the incoming request data
        $this->validate($request, [
            'name' => 'required|string|unique:people,name', // Ensure the name is unique among people
        ]);

        // Create a new person if validation passes
        return Person::create($request->all());
    } catch (\Illuminate\Database\QueryException $e) {
        // Check if the exception is due to a unique constraint violation
        if ($e->errorInfo[1] === 1062) {
            // Return a custom error response for duplicate name
            return response()->json(['message' => 'Name already exists.'], 400);
        }
        // Log other database exceptions
        Log::error($e->getMessage());
        return response()->json(['message' => 'An error occurred.'], 500);
    }
}



    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required|string',
                // Add validation rules for other fields if needed
            ]);

            $person = Person::find($id);
            if ($person) {
                $person->update($request->all());
                return response()->json($person);
            } else {
                return response()->json(['message' => 'Person not found.'], 404);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $person = Person::find($id);
            if ($person) {
                $person->delete();
                return response()->json(null, 204);
            } else {
                return response()->json(['message' => 'Person not found.'], 404);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }
}