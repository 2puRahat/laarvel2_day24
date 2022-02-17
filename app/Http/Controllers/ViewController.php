<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data=[];
    private $products;

    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city = 'Dhaka';
        $this->mobile = 'One+';
        $this->data=[
            0 =>[
                'name' => 'tapu',
                'mobile'=>'012',
                'city'=>'Dhaka',
            ],
            1 =>[
                'name' => 'rahat',
                'mobile'=>'0123',
                'city'=>'Barishal',
            ],
            2 =>[
                'name' => 'musa',
                'mobile'=>'01234',
                'city'=>'Bogra',
            ],
        ];
        return view('demo',[
            'a' => $this->city,
            'tapu' => $this->mobile,
            'fahim' => $this->data
        ]);
    }
    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about', ['products' =>$this->products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                return view('detail', ['data' => $item]);
            }
        }
    }
}
