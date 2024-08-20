<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Company extends Model
{
    use HasFactory;

    protected $table ='companies';

    protected $fillable = [
        'id',
        'name',
        'image_path',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'company_id');
    }

    public function getImagePath()
    {
        return env('DOMAIN_URL').Storage::url($this->image_path);
    }

    public function DeleteLogoImage()
    {
        if (Storage::exists($this->image_path))
        {
            Storage::delete($this->image_path);
        }
    }
}
