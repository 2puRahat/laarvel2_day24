<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 =>[
                'id'=>1,
                'name'=> 'T-shirt',
                'price'=>'2000',
                'description'=>'description',
                'image'=>asset('img/1.jpg'),
            ],
            1 =>[
                'id'=>2,
                'name'=> 'Sharee',
                'price'=>'1000',
                'description'=>'description',
                'image'=>asset('img/sss.jpg'),
            ],
            2 =>[
                'id'=>3,
                'name'=> 'Fashionable Watch',
                'price'=>'7200',
                'description'=>'description',
                'image'=>asset('img/9.jpg'),
            ],
        ];
    }
}
