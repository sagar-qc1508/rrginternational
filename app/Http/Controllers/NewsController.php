<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class NewsController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \App::setLocale('en');
        # $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::select('news.*');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $news->where(function ($query) use ($s) {
                $query->where('news_title', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $news->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $news->orderBy('news_id', 'DESC');
        }
        $news = $news->paginate(15);
        return view('backoffice.news.index', ['newses' => $news]);
    }

    public function add()
    {
        return view('backoffice.news.add');
    }

    public function store(Request $request)
    {

        $validateArray = array(
            'news_title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'news_date' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $news = new News();
            $news->news_title = $request->news_title;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/news', $fileNameToStore);
                $news->image = $fileNameToStore;
            }
            $news->description=$request->description;
            $news->news_date = date('Y-m-d',strtotime($request->news_date));
            $news->created_at = date('Y-m-d H:i:s');
            $news->updated_at = date('Y-m-d H:i:s');
            $news->save();
            return \Redirect::route('backoffice.news')->with('success', 'News Created');
        }
    }

    public function edit($id = NULL)
    {
        $news = News::where('news_id', $id)->first();
        return view('backoffice.news.edit', ['news' => $news]);
    }

    public function update($id = NULL, Request $request)
    {
        $news = News::where('news_id', $id)->first();
        $validateArray = array(
            'news_title' => 'required',
            'description' => 'required',
            'image' => 'sometimes|nullable|mimes:png,jpg,jpeg',
            'news_date' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $news->news_title = $request->news_title;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/news', $fileNameToStore);
                $news->image = $fileNameToStore;
            }
            $news->description=$request->description;
            $news->news_date = date('Y-m-d',strtotime($request->news_date));
            $news->updated_at = date('Y-m-d H:i:s');
            $news->save();
            return \Redirect::route('backoffice.news')->with('success', 'News updated!');
        }
    }
    public function delete($id = NULL)
    {
        $news = News::where('news_id', $id)->delete();
        return back()->with('success', 'News Deleted!');
    }
}
