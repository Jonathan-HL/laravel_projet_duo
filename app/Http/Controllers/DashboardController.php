<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
       $allblog = Blog::all();
       $allportofolio = Portofolio::all();
       return view('admin.dashboard', compact("allblog","allportofolio"));
   }

   public function formblog()
   {
       return view("admin.formblog");
   }

   public function formpotofolio()
   {
       return view("admin.formportofolio");
   }

   public function storeblog(Request $request)
   {
       $addblog = new Blog();
       $addblog->titre = $request->titre;
       $addblog->images = $request->images;
       $addblog->decription = $request->decription;
       $addblog->save();
      return redirect()->route("dashboard");
   }

   public function storeporto(Request $request)
   {
       $addporto = new Portofolio();
       $addporto->titre = $request->titre;
       $addporto->decription = $request->decription;
       $addporto->save();
       return redirect()->route("dashboard");
   }

   public function destroyblog(Blog $id)
   {
       $id->delete();
       return redirect()->back();
   }

   public function destroyporto(Portofolio $id)
   {
       $id->delete();
       return redirect()->back();
   }

   public function showblog(Blog $id)
   {
       return view("admin.show", compact("id"));
   }

   public function showporto(Portofolio $id)
   {
      return view("admin.show", compact("id"));

   }
   public function editblog(Blog $id){
    $editblog = $id;
    return view('admin.edit', compact('editblog'));
}
    public function updateblog(Blog $id, Request $request){
    $updblog = $id;
    $updblog->titre= $request->titre;
    $updblog->images = $request->images;
    $updblog->decription= $request->decription;
    $updblog->save();
    return redirect()->route("dashboard");
}
    public function editporto(Portofolio $id){
    $editporto = $id;
    return view('admin.edit', compact('editporto'));
}
    public function updateporto(Portofolio $id, Request $request){
    $updporto = $id;
    $updporto->titre= $request->titre;
    $updporto->images = $request->images;
    $updporto->decription= $request->decription;
    $updporto->save();
    return redirect()->route("dashboard");
}

}
