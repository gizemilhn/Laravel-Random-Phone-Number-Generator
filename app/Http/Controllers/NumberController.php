<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class NumberController extends Controller
{
    public function index()
    {
        return view('number');
    }
    public function generateNumber()
    {
        $faker = Faker::create();
        $phoneNumber = $faker->phoneNumber;

        return response()->json(['number' => $phoneNumber]);
    }
}
