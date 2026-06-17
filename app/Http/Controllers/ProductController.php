namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function frontPage() {
        return view('front');
    }

    public function productList() {
        return view('product_list');
    }

    public function productDetail($id) {
        return view('product_detail', ['id' => $id]);
    }

    public function cart() {
        return view('cart');
    }

    public function order() {
        return view('order');
    }

    public function login() {
        return view('login');
    }

    public function adminPanel() {
        return view('admin_panel');
    }

    public function adminCategory() {
        return view('admin_category');
    }

    public function adminProduct() {
        return view('admin_product');
    }

    public function adminOrder() {
        return view('admin_order');
    }
}
