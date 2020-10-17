<?php

namespace App\Models;

use Faker\Provider\Company;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'description',
        'company_id'
    ];

    public static function filterByName(string $filter = null)
    {
        $query = static::query();

        if ($filter !== null) {
            $query->select('products.*')
                ->join('companies', 'companies.id', '=', 'products.company_id')
                ->where(static function (Builder $query) use ($filter){
                $query->where('name', 'like', "%$filter%")
                    ->where('description', 'like', "%$filter%");
            });
        }

        return $query->orderByDesc('amount')->first();
    }
}
