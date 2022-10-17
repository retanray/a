<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User  as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserInterface;

class Admin extends Authenticatable implements UserInterface
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
      'name',
      'email',
      'password',
    ];

    protected $hidden = [
      'password',
    ];

    protected function getAdminType($type)
    {
        if($this->type === $type)
            return true;
        else
            return false;
    }

    public function isSuperAdministrator()
    {
        return $this->getAdminType('super_admin');
    }
    public function isAdministrator()
    {
        return $this->getAdminType('admin');
    }
    public function isModerator()
    {
        return $this->getAdminType('moderator');
    }
    public function isEditor()
    {
        return $this->getAdminType('editor');
    }

    public function isAdmin()
    {
        return true;
    }

    public function isAccessibleAdmins()
    {
        if ($this->isSuperAdministrator() || 
            $this->isAdministrator() ) {
            return true;
        }
    }

    public function isAccessibleUsers()
    {
        if ($this->isSuperAdministrator() || 
            $this->isAdministrator() ||
            $this->isModerator() ) {
            return true;
        }
    }
}
