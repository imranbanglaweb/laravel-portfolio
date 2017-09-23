<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Text;
use DB;
use App\Portfolio;


class PortfolioController extends Controller
{
    public function add(){
    	return view('backEnd.admin.Portfolio.add');
    }
    public function create(Request $request){
    	$this->validate($request,[
            'title'=>'required',
            'discription'=>'required',
            'link'=>'required',
            'planguage'=>'required',

            ]);
    
    $portfolioimage=$request->file('image');
    $name=$portfolioimage->getClientOriginalName();
    $UploadPath ='public/frontEnd/PortfolioImage/';
    $portfolioimage->move($UploadPath,$name);
    $imageUrl =$UploadPath.$name;

    	$portfolio = New Portfolio();

    	$portfolio->title = $request->title;
        $portfolio->discription=$request->discription;
        $portfolio->link=$request->link;
    	$portfolio->planguage=$request->planguage;
    	$portfolio->image=$imageUrl;
    	$portfolio->save();
    	return redirect('/Portfolio/add')->with('message','Portfolio Added Successfully');
    }


    public function show(Request $request){
        $portfolios = Portfolio::all();
        return view('backEnd.admin.Portfolio.all',['portfolios'=>$portfolios]);
    }
      public function edit($id){
    $portfolioById=Portfolio::where('id',$id)->first();
return view('backEnd.admin.Portfolio.edit')
        ->with('portfolioById',$portfolioById);
    }


   
    public function update(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        $portfolio = Portfolio::find($request->uid);
        $portfolio->title=$request->title;
        $portfolio->discription=$request->discription;
        $portfolio->link=$request->link;
        $portfolio->planguage=$request->planguage;
        $portfolio->save();
        return redirect('/Portfolio/all')->with('message','Portfolio UPDATED SUCCESSFULLY');


    }
    private function imageExistStatus($request) {
        $portfolioById = Portfolio::where('id', $request->uid)->first();
        $pportfolioImage = $request->file('image');
        if ($pportfolioImage) {
            unlink($portfolioById->pportfolioImage);
        $name = $portfolioImage->getClientOriginalName();
        $uploadPath = 'public/frontEnd/PortfolioImage/';
            $portfolioImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $portfolioById->portfolioImage;
        }
        return $imageUrl;
    }

    public function delete($id){
        $portfolioBydId=Portfolio::find($id);
        $portfolioBydId->delete();
    return redirect('/Portfolio/all')->with('message','Portfolio Deleted SUCCESSFULLY');
    }


}

