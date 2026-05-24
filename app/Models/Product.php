<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
        'name',
        'image',
        'alt',
        'price',
        'saleprice',
        'description',
        'featured',
        'categoryId',
    ];

    /**
     * Get category for the product.
     *
     * @return BelongsTo Category for event
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }
}
