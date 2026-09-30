<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'name' => 'Cailo Esperancilla',
                'email' => 'CailoE@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'name' => 'Brylle Villaurte',
                'email' => 'BrylleV@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'name' => 'Chester Diaz',
                'email' => 'chesterD@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'name' => 'Perry Depiedra',
                'email' => 'perryD@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'name' => 'Mark Tahimik',
                'email' => 'markT@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        $data['customers'] = $customers;

        return view('customers', $data);
    }
}