<?php			
			
namespace App\Http\Controllers;			
			
use Illuminate\Http\Request;			
			
class PageController extends Controller			
{			
    public function getIndex(){			
    	return view('page.trangchu');		
    }		
    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }	
    public function getChitiet(){
        return view('page.chitiet_sanpham');
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getAboutus(){
        return view('page.about_sanpham');
    }
}			
			
