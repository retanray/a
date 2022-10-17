<?php

namespace App\Models;

interface UserInterface
{
    public function isAdmin();

    public function isAccessibleAdmins();

    public function isAccessibleUsers();

}
