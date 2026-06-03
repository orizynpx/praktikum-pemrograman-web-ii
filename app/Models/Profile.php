<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model {
    public function getProfileInfo() {
        return [
            'picture' => 'profile_picture.jpeg',
            'name' => 'Noor Muhammad Akmal Sulaiman',
            'id' => '2410817210007',
            'department' => 'Teknologi Informasi',
            'hobbies' => 'Menonton video YouTube, Scroll Reddit, Tidur',
            'skills' => 'Pixel art, Game design',
            'organization' => 'Wasaka Games',
            'position' => 'Chief Operating Officer (COO)',
            'games' => [
                'titles' => 'A Match Made in Dungeon, R*bert, Personal Space',
                'roles' => 'Creative Lead, Game Designer, Lead Artist & Writer'
            ]
        ];
    }
}