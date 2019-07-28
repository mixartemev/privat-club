<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const STATUS_WAIT = 0;
    const STATUS_APPROVE = 1;
    const STATUS_EXP = 2;
    const STATUS_TRINITY = 3;
    const STATUS_GRAND = 4;
    const STATUS_BAN = -1;
    const STATUS_BLOCK = -2;

    const STATUSES = [
        self::STATUS_WAIT => 'waiting',
        self::STATUS_APPROVE => 'approved',
        self::STATUS_EXP => 'exp1',
        self::STATUS_TRINITY => 'trinity',
        self::STATUS_GRAND => 'grand10',
        self::STATUS_BAN => 'banned',
        self::STATUS_BLOCK => 'blocked',
    ];

    const ROLE_DISABLE = 0;
    const ROLE_VIEW = 1;
    const ROLE_USE = 2;
    const ROLE_ADMIN = 4;

    const ROLES = [
        self::ROLE_DISABLE => 'disabled',
        self::ROLE_VIEW => 'viewer',
        self::ROLE_USE => 'user',
        self::ROLE_ADMIN => 'admin',
    ];

    const SEX_MALE = 1;
    const SEX_FEMALE = 2;
    const SEX_SHEMALE = 3;

    const SEX = [
        self::SEX_MALE => 'boy',
        self::SEX_FEMALE => 'girl',
        self::SEX_SHEMALE => 'trans',
    ];

    const ORIENT_HETERO = 1;
    const ORIENT_HOMO = 2;
    const ORIENT_BI = 3;

    const ORIENTS = [
        self::ORIENT_HETERO => 'hetero',
        self::ORIENT_HOMO => 'homo',
        self::ORIENT_BI => 'bi',
    ];

    const DIRECTION_ACTIVE = 1;
    const DIRECTION_PASSIVE = 2;
    const DIRECTION_UNIVERSAL = 3;

    const DIRECTIONS = [
        self::DIRECTION_ACTIVE => 'active',
        self::DIRECTION_PASSIVE => 'passive',
        self::DIRECTION_UNIVERSAL => 'universal',
    ];
}
