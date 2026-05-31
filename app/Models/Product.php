<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\File;

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
    'price',
    'saleprice',
    'description',
    'featured',
    'categoryId',
  ];

  /**
   * Defines a dynamic image_url property (Attribute Accessor)
   * Usage: $product->image_url
   */
  protected function imageUrl(): Attribute
  {
    return Attribute::get(function () {
      // Check if product has an image and if the file actually exists
      if ($this->image && File::exists(public_path('images/products/' . $this->image))) {
        return asset('images/products/' . $this->image);
      }

      // Fallback to a placeholder image
      return asset('images/place_holder.png');
    });
  }

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
