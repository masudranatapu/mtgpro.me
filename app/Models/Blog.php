<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'author', 'image', 'slug', 'date', 'details', 'tag', 'date'];

    public function getBlogList($request){
        $data = [];
        $blogs = DB::table('blogs')->leftJoin('categories','categories.id','=','blogs.category_id')
        ->leftJoin('users','blogs.created_by','=','users.id')
        ->select('blogs.slug as article_slug','categories.category_slug','categories.category_name',
        'blogs.title','blogs.image','blogs.summary','blogs.created_at','users.name as user_name','users.profile_image','blogs.author','users.designation')
        ->where('blogs.is_active',1)
        ->orderby('blogs.order_id','DESC')->paginate(11);
        foreach ($blogs as $value) {
            $value->blog_url =  $this->getArticleUrl($value->category_slug,$value->article_slug);
        }
         return $blogs;

     }

     public function getArticleUrl($category_slug,$blog_slug){
        return url('/').'/'.'blog'.'/'.$blog_slug;
     }

     public function getFeatureArticle(){
        $blog = DB::table('blogs')->leftJoin('categories','categories.id','=','blogs.category_id')
        ->select('blogs.slug as article_slug','categories.category_slug','blogs.title','blogs.image','blogs.summary','blogs.created_at')
        ->where('blogs.is_active',1)
        ->orderby('blogs.order_id','DESC')->take(3)->get();
        foreach ($blog as $value) {
            $value->blog_url =  $this->getArticleUrl($value->category_slug,$value->article_slug);
        }
        return $blog;
     }

     public function getArticle($blogslug){
        $data       = [];
        $blog    = DB::table('blogs')->leftJoin('categories','categories.id','=','blogs.category_id')
        ->leftJoin('users','blogs.created_by','=','users.id')
        ->select('blogs.id','blogs.slug as article_slug','categories.category_slug',
        'blogs.title','blogs.image','blogs.summary','categories.category_name',
        'blogs.details','blogs.tag','blogs.created_at','categories.id as category_id',
        'blogs.summary','blogs.created_at','blogs.updated_at','users.name as user_name','users.profile_image','blogs.author','users.designation'
        )->where('blogs.slug',$blogslug)
        ->first();
        return $blog;
     }

     public function getTagArticles($tags, $blogid)
     {
         $blog_table = 'blogs';
         $related_news =DB::table('blogs')->leftJoin('categories','categories.id','=','blogs.category_id')
         ->select('blogs.slug as article_slug','categories.category_slug','blogs.title','blogs.image','blogs.author','blogs.summary','categories.category_name','blogs.details','blogs.tag')->where('blogs.id', '!=', $blogid)->where('blogs.is_active', 1)->where(function($q) use ($tags, $blog_table)
         {
             foreach ($tags as $tag) {
                 $q->orwhere($blog_table . ".tags", "like", "%" . $tag . "%");
             }
         });
         $blogs = $related_news->orderby('blogs.order_id', 'DESC')->limit(6)->get();
         foreach ($blogs as $value) {
            $value->blog_url =  $this->getArticleUrl($value->category_slug,$value->article_slug);
        }
         return $blogs;
     }
     public function getCategortyBlog($category_slug)
     {
        $data       = [];
        $blogs    = DB::table('blogs')->leftJoin('categories','categories.id','=','blogs.category_id')
        ->leftJoin('users','blogs.created_by','=','users.id')
        ->select('blogs.id','blogs.slug as article_slug','categories.category_slug','blogs.title','blogs.image','blogs.summary','categories.category_name','blogs.details','blogs.tag','blogs.created_at','categories.id as category_id',
        'blogs.summary','users.name as user_name','users.profile_image','blogs.author','users.designation'
        )->where('categories.category_slug',$category_slug)
        ->where('blogs.is_active',1)
        ->orderby('blogs.order_id','DESC')->paginate(11);
        foreach ($blogs as $value) {
            $value->blog_url =  $this->getArticleUrl($value->category_slug,$value->article_slug);
        }

         return $blogs;
     }

}
