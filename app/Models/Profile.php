<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model {
    public function getProfileInfo() {
        return [
            'name' => 'Noor Muhammad Akmal Sulaiman',
            'picture' => 'https://ui-avatars.com/api/?name=User&size=128',
            'id' => '2410817210007',
            'department' => 'Teknologi Informasi',
            'hobbies' => 'Scroll Reddit, menonton YouTube',
            'skills' => 'Pixel art, game design'
        ];
    }
}