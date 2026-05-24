<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Psy\Readline\Hoa\Event;

class Category extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
        'name',
    ];

  /**
   * Get products for the category
   *
   * @return HasMany Collection of products
   */
    public function products(): HasMany
    {
      return $this->hasMany(Event::class, 'categoryId');
    }
}
