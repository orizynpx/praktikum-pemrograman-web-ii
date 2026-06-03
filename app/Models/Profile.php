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
            'hobbies' => 'Scroll-ing Reddit, menonton YouTube',
            'skills' => 'Pixel art, game design',
            'organization' => 'Wasaka Games',
            'position' => 'Chief Operating Officer (COO)',
            'games' => 'A Match Made in Dungeon, R*bert, Personal Space'
        ];
    }
}