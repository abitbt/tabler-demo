<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        $users = $this->getUsers();

        return view('home', [
            'navItems' => $this->buildNavigation(),
            'users' => $users,
        ]);
    }

    /**
     * Get paginated users.
     */
    protected function getUsers(): LengthAwarePaginator
    {
        return User::paginate(10);
    }
}
