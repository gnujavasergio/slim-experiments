<?php

namespace App\Models;

class User extends BaseModel {

    public function getSource() {
        return 'wp_users';
    }

}
