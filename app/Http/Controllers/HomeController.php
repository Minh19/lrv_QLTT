<?php 
namespace App\Http\Controllers;
use App\Models\Basic;

class HomeController extends Controller
{
   public static function index()
   { 
       return view('Home');
   } 
   public static function TrinhGuiDuyetVanBan()
   { 
       return view('TrinhGuiDuyetVanBan');
   } 

}
?>