<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
   public function Addpage(){
   	return view('backEnd.admin.Pages.add');
   }
   public function create(Request $request){
    	$this->validate($request,[
            'ptitle'=>'required',
            'pcontent'=>'required',
            'pimage'=>'required',

            ]);
    
    $pimage=$request->file('pimage');
    $name=$pimage->getClientOriginalName();
    $UploadPath ='public/frontEnd/PortfolioImage/';
    $pimage->move($UploadPath,$name);
    $imageUrl =$UploadPath.$name;

    	$pages = New Page();

    	$pages->ptitle = $request->ptitle;
        $pages->pcontent=$request->pcontent;
    	$pages->pimage=$imageUrl;
    	$pages->save();
    	return redirect('/page/add')->with('message','Page Added Successfully');
    }


     public function show(Request $request){
        $pages = Page::all();
        return view('backEnd.admin.Pages.all',['pages'=>$pages]);
    }
      public function edit($id){
    $pageById=Page::where('id',$id)->first();
return view('backEnd.admin.Pages.edit')
        ->with('pageById',$pageById);
    }


   
    public function update(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        $page = Page::find($request->uId);
        $page->ptitle=$request->ptitle;
        $page->pcontent=$request->pcontent;
        $page->save();
        return redirect('/page/all')->with('message','Pages updated Successfully');


    }
    private function imageExistStatus($request) {
        $pageById = Page::where('id', $request->uId)->first();
        $pageimage = $request->file('pimage');
        if ($pageimage) {
            unlink($pageById->pageimage);
        $name = $pageimage->getClientOriginalName();
        $uploadPath = 'public/frontEnd/PortfolioImage/';
            $pageimage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $pageById->pageimage;
        }
        return $imageUrl;
    }

    public function delete($id){
        $pageById=Page::find($id);
        $pageById->delete();
    return redirect('/page/all')->with('message','Page Deleted Successfully');
    }
}
