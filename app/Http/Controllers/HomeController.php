<?php 
namespace App\http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Home';
    }
    public function getNew(){
        return 'Danh sach tin tuc';
    }
    public function getCategory($id){
        return 'chuyeen muc'.$id;
    }
}
?>