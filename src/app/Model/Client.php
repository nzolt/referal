<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;
    protected $connection = 'mysql';
    protected $fillable = [
        'title',
        'firstname',
        'surname',
        'lastname',
        'dob',
        'email',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'approved'
    ];

    public function getFullName()
    {
        return trim(implode(' ', [
            $this->title,
            $this->firstname,
            $this->surname,
            $this->lastname,
        ]));
    }

    public function save(array $options = [])
    {
        if (!$this->id){
            $this->id = (string)Uuid::uuid1();
        }
        return parent::save($options);
    }
}
