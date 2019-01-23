<?php

namespace Parinz;

class User
{
    public function getProfile ()
    {
        $profile = [
            'first_name' => 'Parinya',
            'last_name' => 'Onsuwan',
            'age' => 99,
            'sex' => 'male'
        ];

        return $profile;
    }
}