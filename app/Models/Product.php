<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'category_id',
        'brand_id',
        'product_label_id',
        'image_path',
        'qty',
        'alert_stock',
        'product_tag_id',
        'stock_status',
        'is_featured',
        'min_order_qty',
        'max_order_qty'
        
    ];

    protected $casts = [
        'image_path' => 'array',
    ];



    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function productLabel()
    {
        return $this->belongsToMany(Label::class, 'product_labels');
    }

    public function productTag()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function productCollection() 
    {
        return $this->belongsToMany(Collection::class, 'product_collections');
    }

    public function productCompany()
    {
        return $this->belongsToMany(Company::class,'product_companies');
    }



    public function getImagePath()
    {
        return env('DOMAIN_URL') . Storage::url($this->image_path);
    }

    public function DeleteLogoImage()
    {        
        if (Storage::exists($this->image_path)) 
        {
            Storage::delete($this->image_path);
        }
    }

}
