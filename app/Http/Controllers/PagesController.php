<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PagesController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }

    public function civil()
    {
        return Inertia::render('Civil');
    }

    public function military()
    {
        return Inertia::render('Military');
    }

    public function contacts()
    {
        return Inertia::render('Contacts');
    }
}
