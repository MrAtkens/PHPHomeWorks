<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Static_;
use PhpParser\Builder;

/**
 * Class Product
 * @package App\Models
 *
 * @property $name
 * @property $image_url
 * @property $price
 * @property $description
 * @property $company_name
 * @property $rating
 * @property $categories
 * @property $count
 * @property $timestamps
 */


class Product extends Model
{
    protected $fillable = [
        'name', 'image_url', 'price', 'description', 'company_name', 'rating', 'categories', 'count', 'timestamps'
    ];
}
