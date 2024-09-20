<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    public function one(): Response
    {
        $paragraphs = fake()->paragraphs(20);

        return Inertia::render('Page1', ['paragraphs' => $paragraphs]);
    }

    public function two(): Response
    {
        $paragraphs = fake()->paragraphs(20);

        return Inertia::render('Page2', ['paragraphs' => $paragraphs]);
    }
}
