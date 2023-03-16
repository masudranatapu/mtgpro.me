<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
        protected $blog;
        public function __construct(
            Blog                $blog
        )
        {
            $this->blog             = $blog;
        }

        public function getBlogList(Request $request)
        {
            $data = $this->blog->getBlogList($request);

            $categories = DB::table('categories')->get();
            return view('blog.index',compact('data','categories'));
        }

        public function getBlogDetails($blogSlug)
        {
            $data = $this->blog->getArticle($blogSlug);
            return view('blog.details')->withData($data);
        }

        public function getCategortyBlog(Request $request,$blogSlug)
        {
            $data = $this->blog->getCategortyBlog($blogSlug);
            $categories = DB::table('categories')->get();
            $category = DB::table('categories')->where('category_slug',$blogSlug)->first();
            return view('blog.index',compact('data','categories','category'));
        }


}
