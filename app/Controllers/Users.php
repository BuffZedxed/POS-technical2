<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'name' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'name' => 'Sarah Lopez',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'name' => 'Michael Scofield',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'name' => 'David Garnett',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'name' => 'Lisa Hontiveros',
                'role' => 'Staff'
            ]
        ];

        $data['users'] = $users;

        return view('users', $data);
    }
}