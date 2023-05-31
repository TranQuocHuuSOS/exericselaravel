<?php			
			
namespace App\Http\Controllers;			
use App\Models\Slide;
use App\Models\Products;
use App\Models\Comments;
use Illuminate\Http\Request;			
			
class PageController extends Controller			
{			
    public function getIndex(){	
        $slide = Slide::all();		
        $new_product=Products::where('new', 1)->get();
        $sanpham_khuyenmai=Products::where('promotion_price','<>',0)->get();
        return view('page.trangchu', compact('slide', 'new_product','sanpham_khuyenmai'));	
    }		
    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }	
    public function getChitiet( Request $request){
        $sanpham= Products:: where ('id', $request-> id)->first();
        $splienquan=Products::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments=Comments::where ('id_product', $request->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham','splienquan', 'comments'));
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getAboutus(){
        return view('page.about_sanpham');
    }
}			
			
