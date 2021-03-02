<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Models\Product;

class HomeController extends Controller
{

    protected $categories = [
        ['icon' => 'fas fa-th-large', 'name' => 'Semua Kategori', 'color' => 'gray-700'],
        ['icon' => 'fab fa-pagelines', 'name' => 'Beras', 'color' => 'warning'],
        ['icon' => 'fas fa-lemon', 'name' => 'Buah-buahan', 'color' => 'warning'],
        ['icon' => 'fas fa-carrot', 'name' => 'Sayuran', 'color' => 'orange'],
        ['icon' => 'fas fa-pepper-hot', 'name' => 'Cabai', 'color' => 'danger'],
        ['icon' => 'fas fa-mortar-pestle', 'name' => 'Rempah-rempah', 'color' => 'gray-300'],
        ['icon' => 'fas fa-dumpster', 'name' => 'Pupuk Organik', 'color' => 'gray-500'],
        ['icon' => 'fas fa-fill-drip', 'name' => 'Obat-obatan', 'color' => 'purple'],
        ['icon' => 'fas fa-seedling', 'name' => 'Bibit Tanaman', 'color' => 'info'],
        ['icon' => 'fas fa-cookie-bite', 'name' => 'Olahan', 'color' => 'orange'],
        ['icon' => 'fas fa-tractor', 'name' => 'Alat atau Mesin', 'color' => 'gray-800'],
        ['icon' => 'fas fa-ellipsis-v', 'name' => 'lainnya', 'color' => 'info']
    ];

    protected function getProduct($limit=15) {
        return Product::with('seller')->limit($limit)->get();
    }

    public function index()
    {
        $data = [];
        $data['categories'] = $this->categories;

        // product dashboard
        $data['product_terbaru'] = $this->getProduct();
        $data['product_pilihan'] = $this->getProduct();
        $data['product_terlaris'] = $this->getProduct();

        return view('dashboard.index', $data);
    }

    public function categories($id)
    {
        $data = [];
        $data['categories'] = $this->categories;

        $activeIndex = array_search($id, array_column($this->categories, 'name'));
        $data['category_data'] = $this->categories[$activeIndex];

        $products = Product::where('cat_id', $id)->limit(20)->get();
        $data['category_products'] = $products;

        return view('dashboard.categories.index', $data);
    }
}
