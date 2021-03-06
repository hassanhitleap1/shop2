<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SavedProduct;
use App\Product;
use App\Slider;
use App\Category;
use Validator;
use Session;
use App\Contact;
use Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products=Product::where([]);
        $imagesSlider = Slider::where('published', Slider::Published)->get();
        if ($request->ajax()) {
            if($request->category !=''){
                $category = Category::where('name', $request->category)->first();
                if(!empty($category)){
                    $products = $products->where('category', $category->id); 
                }
            }else{
                $products = $products->where('at_home', Product::IN_HOME); 
            }
            if ($request->search != '') {
                $search = $request->search;
                $products->where(function ($products) use ($search) {
                    $products->orwhere('name', 'like', '%' . trim($search) . '%')
                        ->orwhere('description', 'like', '%' . trim($search) . '%');
                }); 
            }
            $products= $products->orderBy('id', 'desc')->with('isSaved')->withCount('loves')->paginate(10);
            return response()->json(['products' => $products]);
        }

        if ($request->category != '') {
            $category = Category::where('name', $request->category)->first();
            if (!empty($category)) {
                $products = $products->where('category', $category->id);
            }
        }else{
            $products = $products->where('at_home', Product::IN_HOME); 
        }
        if ($request->search != '') {
            $search = $request->search;
            $products->where(function ($products) use ($search) {
                $products->orwhere('name', 'like', '%' . trim($search) . '%')
                    ->orwhere('description', 'like', '%' . trim($search) . '%');
            });
        }
        $products =$products->orderBy('id', 'desc')->with('isSaved')->withCount('loves')->paginate(10);
        return view('index')->with('products',$products)
                    ->with('imagesSlider',$imagesSlider);

    }
    


    public function savedProduct(Request $request){
        if(Auth::user()){
            $model = SavedProduct::where('user_id', Auth::user()->id)->where('product_id',$request->item)->first();
            if(empty($model)){
                $model = new SavedProduct;
                $model->product_id = $request->item;
                $model->user_id = Auth::user()->id;
                $model->save();
                return response()->json(['saved' => 1,"item"=> $request->item]); 
            }else {
                $model->delete();
                return response()->json(['saved' => 2,'item'=> $request->item]); 
            }
        }
        return response()->json(['saved' => 0]); 
    }


    public function contact(){
        return view('contact');
    }


    public function contactSaved(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
            'message' => 'required',
            'image'=>'image'
            ]);

            if ($validator->fails()) {
                return redirect('/contact')->withErrors($validator)->withInput();
            }
            $model = new Contact;
            $name="";
            if ($request->hasFile('image')) {
                if($request->file('image')->isValid()) {
                    try {
                        $file = $request->file('image');
                        $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                        $file->move('image/contact-mage',$name);
                        $model->image_path='image/contact-mage'.$name;
                    } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                        var_dump($e->getMessage()) ;
                    }
                } 
            }

            
            $model->name=$request->name;
            $model->email=$request->email;
            $model->subject=$request->subject;
            $model->message=$request->message;
            $model->save();
            Session::put('recorud', 'sucessfully send message');
        return redirect('contact');
    }

    public function myFavorite(Request $request){
        $savedProducts = SavedProduct::where('user_id', Auth::user()->id)
        ->with('product')->with(['product' => function($query){
            $query->withCount('loves');
            }])->orderBy('created_at', 'desc')->paginate(10);

        if ($request->ajax()) {
            return response()->json(['savedProducts' => $savedProducts]);
        }

        return view('my-favorite')->with('savedProducts', $savedProducts);
    }

    /**
     * most puupler 
     */
    public function mostPopuler(){
        if (request()->ajax()) {
             // SELECT COUNT(product_id) ,product_id FROM saved_products GROUP BY product_id ORDER BY COUNT(product_id) DESC
            $modelMostPopuler = DB::table('saved_products')
                ->select(DB::raw('count(product_id) as count_product , product_id'))
                ->groupBy('product_id')
                ->orderBy('count_product', 'DESC')->get();

            $arrayIdProducts = (array_column($modelMostPopuler->toArray(), 'product_id'));
            $products = Product::whereIn('id', $arrayIdProducts);
            if (request()->search != '') {
                $search = $request->search;
                $products->where(function ($products) use ($search) {
                    $products->orwhere('name', 'like', '%' . trim($search) . '%')
                        ->orwhere('description', 'like', '%' . trim($search) . '%');
                });
            }
            $products = $products->orderBy('id', 'desc')->with('isSaved')->withCount('loves')->paginate(10);
            return response()->json(['products' => $products]);

        }
        return view('popular');
    }


    /**
     * recomaneded
     */
    public function recommended(){
        if(request()->ajax()){
            $products = Product::where('recommended', Product::Recommended);
            if (request()->search != '') {
                $search = $request->search;
                $products->where(function ($products) use ($search) {
                    $products->orwhere('name', 'like', '%' . trim($search) . '%')
                        ->orwhere('description', 'like', '%' . trim($search) . '%');
                });
            }
            $products = $products->orderBy('id', 'desc')->with('isSaved')->withCount('loves')->paginate(10);
            return response()->json(['products' => $products]);
            
        }
        return view('recommended');
    }
}
