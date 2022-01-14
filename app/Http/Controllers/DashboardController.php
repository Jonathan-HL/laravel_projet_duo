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
       $addblog->descrip = $request->descrip;
       $addblog->save();
      return redirect()->route("dashboard");
   }
   public function storeporto(Request $request)
   {
       $addporto = new Portofolio();
       $addporto->title = $request->title;
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
}
