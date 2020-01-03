<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 52pページ
use Illuminate\Http\Response;



// 45ページ

// class PostsController extends Controller
// {
//   public function index($id='noname',$pass="unknown"){
//     return "
//     <html>
//     <head>
//       <title>hello/index</title>
//       <style>
//       body { font-size:16pt; color:#999; }
//       h1 { font-size:100pt; text-align:right; color:#000; margin:-40px 0px -50px 0px;}
//       </style>
//     </head>
//     <body>
//       <h1>Index</h1>
//       <p>これはpostコントローラーのアクションです</p>
//       <ul>
//         <li>ID: {$id}</li>
//         <li>PASS: {$pass}</li>
//       </ul>
//     </body>
//     </html>";
//   }
// }

// class PostsController extends Controller
// {
//   public function other($id='noname',$pass="unknown"){
//     return "
//     <html>
//     <head>
//       <title>hello/index</title>
//       <style>
//       body { font-size:16pt; color:#999; }
//       h1 { font-size:100pt; text-align:right; color:#000; margin:-40px 0px -50px 0px;}
//       </style>
//     </head>
//     <body>
//       <h1>Index</h1>
//       <p>これはpostコントローラーのアクションです</p>
//       <ul>
//         <li>ID: {$id}</li>
//         <li>PASS: {$pass}</li>
//       </ul>
//     </body>
//     </html>";
//   }
// }


// // 47ページ
// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style ='<style>
//       body { font-size:16pt; color:#999; }
//       h1 { font-size:100pt; text-align:right; color:#000; margin:-40px 0px -50px 0px;}
//       </style>';
// $body ='</head><body>';
// $end ='</body></html>';

// function tag($tag,$txt){
//   return"<$tag>".$txt."</{$tag}>";
// }

// class PostsController extends Controller
// {
//   public function index(){
//     global $head,$style,$body,$end;
//     $html = $head.tag('title','Hello/Index').$style.$body.tag('h1','Index').tag('p','this is Index page').'<a href ="/hello/other">go to Other page</a>'.$end;
//     return $html;
//   }

//   public function other(){
//     global $head,$style,$body,$end;
//     $html = $head.tag('title','Hello/Other').$style.$body.tag('h1','Ohter').tag('p','this is Other page').$end;
//     return $html;
//   }
// }

// 49ページ
// class PostsController extends Controller
// {
//   public function __invoke(){
//     return "<h1>single action</h1>
//     <p>これは、シングルアクションnコントローラーのアクションです。</p>";
//   }
// }

// 52ページ
// class PostsController extends Controller
// {
//   public function index(Request $request, Response $response){
//     $html =
//     "<html>
//     <head>
//       <title>Hello?Index</title>
//       <style>
//       body { font-size:16pt; color:#999; }
//       h1 { font-size:100pt; text-align:right; color:#000; margin:-40px 0px -50px 0px;}
//       </style>
//     </head>
//     <body>
//       <h1>Hello</h1>
//       <h3>Request</h3>
//       <pre>{$request}</pre>
//       <h3>Response</h3>
//       <pre>{$response}</pre>
//     </body>
//     </html>";

//     $response->setContent($html);

// // php117に代入する
//     // $request->url();
//     // $request->fullUrl();
//     // $request->path();

// // php123に代入する
//     // $this->status();
//     // $this->content();
//     // $this->setContent(値);

//     return $response;
//   }
// }

// 62ページ
// class PostsController extends Controller
// {
//   public function index(){
//     return view('hello.index');
//   }
// }

// 63ページ
// class PostsController extends Controller
// {
//   public function index(){
//     $data = ['msg'=>'これはコントローラーから渡されたメッセージです。'];
//     return view('hello.index',$data);
//   }
// }

// 65ページ
// class PostsController extends Controller
// {
//   public function index($id='zero'){
//     $data = ['msg'=>'これはコントローラーから渡されたメッセージです。','id'=>$id];
//     return view('hello.index',$data);
//   }
// }

// 66ページ
// class PostsController extends Controller
// {
//   public function index(Request $request){
//     $data = ['msg'=>'これはコントローラーから渡されたメッセージです。','id'=>$request->id];
//     return view('hello.index',$data);
//   }
// }

// // 68ページ
// class PostsController extends Controller
// {
//   public function index(){
//     $data = ['msg'=>'これはBladeを利用したサンプルです。'];
//     return view('hello.index',$data);
//   }
// }

// 71ページ
// class PostsController extends Controller
// {
//   public function index(){
//     $data = ['msg'=>'お名前を入力してください'];
//     return view('hello.index',$data);
//   }

//   public function post(Request $request)
//   {
//     $msg =$request ->msg;
//     $data =['msg'=>'こんにちは'.$msg.'さん！'];
//     return view('hello.index',$data);
//   }
// }

// 75ページ
// class PostsController extends Controller
// {
//   public function index(){
//     return view('hello.index',['msg'=>'']);
//   }

//   public function post(Request $request)
//   {
//     return view('hello.index',['msg'=>$request->msg]);
//   }
// }

// 77ページ
// class PostsController extends Controller
// {
//   public function index(){
//     return view('hello.index');
//   }

//   public function post(Request $request)
//   {
//     return view('hello.index',['msg'=>$request->msg]);
//   }
// }

// 80ページ〜95ページ
// class PostsController extends Controller
// {
//   public function index(){
//     $data = ['one','two','three','four','five'];
//     return view('hello.index',['data'=>$data]);
//   }
// }

// 97ページ
// class PostsController extends Controller
// {
//   public function index(){
//     $data = [
//       ['name'=>'山田たろう','mail'=>'taro@yamada'],
//       ['name'=>'田中はなこ','mail'=>'hanako@flower'],
//       ['name'=>'鈴木さちこ','mail'=>'sachico@happy']
//     ];
//     return view('hello.index',['data'=>$data]);
//   }
// }

// 104ページ
// class PostsController extends Controller
// {
//   public function index(){
//     return view('hello.index',['message'=>'Hello!']);
//   }
// }

// 112ページ
// class PostsController extends Controller
// {
//   public function index(Request $request){
//     return view('hello.index',['data'=>$request->data]);
//   }
// }

// 117ページ
// class PostsController extends Controller
// {
//   public function index(Request $request){
//     return view('hello.index');
//   }
// }

// 123ページ
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     return view('hello.index',['msg'=>'フォームを入力：']);
//   }

//   public function post(Request $request)
//   {
//     $validate_rule =[
//       'name' => 'required',
//       'mail' => 'email',
//       'age' => 'numeric|between:0,150',
//     ];
//     $this->validate($request,$validate_rule);
//       return view('hello.index',['msg'=>'正しく入力されました！']);
//   }
// }

// 138ページ〜
use App\Http\Requests\HelloRequest;

// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     return view('hello.index',['msg'=>'フォームを入力：']);
//   }


//   public function post(HelloRequest $request)
//   {
//     return view('hello.index',['msg'=>'正しく入力されました！']);
//   }
// }

// 140ページ〜
use Validator;

// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     return view('hello.index',['msg'=>'フォームを入力：']);
//   }

//   public function post(Request $request)
//   {
//     $validator = Validator::make($request->all(),[
//       'name' => 'required',
//       'mail' => 'email',
//       'age' => 'numeric|between:0,150',
//     ]);
//     if($validator->fails()){
//       return redirect('/hello')
//       ->withErrors($validator)
//       ->withInput();
//     }
//     return view('hello.index',['msg'=>'正しく入力されました！']);
//   }
// }

// 143ページ
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     $validator = Validator::make($request->query(),[
//       'id' => 'required',
//       'pass' => 'required',
//     ]);
//     if ($validator->fails()){
//       $msg ='クエリーに問題があります。';
//     } else {
//       $msg ='ID/PASSを受け付けました。フォームを入力してください。';
//     }
//     return view('hello.index',['msg'=>$msg,]);
//   }

//   public function post(Request $request)
//   {
//     $validator = Validator::make($request->all(),[
//       'name' => 'required',
//       'mail' => 'email',
//       'age' => 'numeric|between:0,150',
//     ]);
//     if($validator->fails()){
//       return redirect('/hello')
//       ->withErrors($validator)
//       ->withInput();
//     }
//     return view('hello.index',['msg'=>'正しく入力されました！']);
//   }
// }

// 144ページ
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     $validator = Validator::make($request->query(),[
//       'id' => 'required',
//       'pass' => 'required',
//     ]);
//     if ($validator->fails()){
//       $msg ='クエリーに問題があります。';
//     } else {
//       $msg ='ID/PASSを受け付けました。フォームを入力してください。';
//     }
//     return view('hello.index',['msg'=>$msg,]);
//   }

//   public function post(Request $request)
//   {
//     $rules = [
//       'name' => 'required',
//       'mail' => 'email',
//       'age' => 'numeric|between:0,150',
//     ];
//     $message = [
//       'name.required' => '名前は必ず入力してください。',
//       'mail.email' => 'メールアドレスが必要です。',
//       'age.numeric' => '年齢を整数で記入してください。',
//       'age.between' => '年齢は0〜150の間で入力ください。',
//     ];
//     $validator = Validator::make($request->all(),$rules,$message);
//     if($validator->fails()){
//       return redirect('/hello')
//       ->withErrors($validator)
//       ->withInput();
//     }
//     return view('hello.index',['msg'=>'正しく入力されました！']);
//   }
// }

// 147ページ
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     $validator = Validator::make($request->query(),[
//       'id' => 'required',
//       'pass' => 'required',
//     ]);
//     if ($validator->fails()){
//       $msg ='クエリーに問題があります。';
//     } else {
//       $msg ='ID/PASSを受け付けました。フォームを入力してください。';
//     }
//     return view('hello.index',['msg'=>$msg,]);
//   }

//   public function post(Request $request)
//   {
//     $rules = [
//       'name' => 'required',
//       'mail' => 'email',
//       'age' => 'numeric',
//     ];
//     $message = [
//       'name.required' => '名前は必ず入力してください。',
//       'mail.email' => 'メールアドレスが必要です。',
//       'age.numeric' => '年齢を整数で記入してください。',
//       'age.min' => '年齢は0歳以上で記入してください。',
//       'age.max' => '年齢は200歳以下で記入ください。',
//     ];

//     $validator = Validator::make($request->all(),$rules,$message);

//     $validator ->sometimes('age','min:0',function($input){
//       return !is_int($input->age);
//     });

//     $validator ->sometimes('age','max:200',function($input){
//       return !is_int($input->age);
//     });


//     if($validator->fails()){
//       return redirect('/hello')
//       ->withErrors($validator)
//       ->withInput();
//     }
//     return view('hello.index',['msg'=>'正しく入力されました！']);
//   }
// }


// 152ページ（参照151ページhttp内requestフォルダのhellorequest.php）
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     return view('hello.index',['msg'=>'フォームを入力してください。']);
//   }

//   public function post(HelloRequest $request)
//   {
//     return view('hello.index',['msg'=>'正しく入力されました！']);
//   }
// }

// 157ページ
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     if($request->hasCookie('msg'))
//     {
//       $msg ='Cookie:'.$request->cookie('msg');
//     } else {
//       $msg ='※クッキーはありません。';
//     }
//     return view('hello.index',['msg'=>$msg,]);
//   }

//   public function post(Request $request)
//   {
//     $validate_rule = [
//       'msg' => 'required',
//     ];
//     $this->validate($request,$validate_rule);
//     $msg = $request->msg;
//     $response = new Response(view('hello.index',['msg'=>'「'.$msg.'」を保存しました。']));
//     $response->cookie('msg',$msg,100);
//     return $response;
//   }
// }

// 183ページ
use Illuminate\Support\Facades\DB;

// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     $items = DB::select('select * from people');
//     return view('hello.index',['items'=>$items,]);
//   }

//   public function post(Request $request)
//   {
//     $validate_rule = [
//       'msg' => 'required',
//     ];
//     $this->validate($request,$validate_rule);
//     $msg = $request->msg;
//     $response = new Response(view('hello.index',['msg'=>'「'.$msg.'」を保存しました。']));
//     $response->cookie('msg',$msg,100);
//     return $response;
//   }
// }

// 185ページ
// class PostsController extends Controller
// {
//   public function index(Request $request){
//     if(isset($request->id))
//     {
//       $param = ['id' => $request ->id];
//       $items =DB::select('select * from people where id = :id',$param);
//     } else {
//         $items =DB::select('select * from people');
//       }
//     return view('hello.index',['items'=>$items,]);
//   }

//   public function post(Request $request)
//   {
//     $validate_rule = [
//       'msg' => 'required',
//     ];
//     $this->validate($request,$validate_rule);
//     $msg = $request->msg;
//     $response = new Response(view('hello.index',['msg'=>'「'.$msg.'」を保存しました。']));
//     $response->cookie('msg',$msg,100);
//     return $response;
//   }
// }

// 188ページ
class PostsController extends Controller
{
  public function index(Request $request)
  {
    $items =DB::select('select * from people');
    return view('hello.index',['items'=>$items,]);
  }

  public function post(Request $request)
  {
    $items =DB::select('select * from people');
    return view('hello.index',['items'=>$items,]);
  }

  public function add(Request $request)
  {
    return view('hello.add');
  }

  public function create(Request $request)
  {
    $param =[
      'name' =>$request->name,
      'mail' =>$request->mail,
      'age' =>$request->age,
    ];
    DB::insert('insert into people (name, mail, age) values(:name,:mail,:age)',$param);
    return redirect('/hello');
  }
}

// 191ページ
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     $items =DB::select('select * from people');
//     return view('hello.index',['items'=>$items,]);
//   }

//   public function post(Request $request)
//   {
//     $items =DB::select('select * from people');
//     return view('hello.index',['items'=>$items,]);
//   }

//   public function add(Request $request)
//   {
//     return view('hello.add');
//   }

//   public function create(Request $request)
//   {
//     $param =[
//       'name' =>$request->name,
//       'mail' =>$request->mail,
//       'age' =>$request->age,
//     ];
//     DB::insert('insert into people (name, mail, age) values(:name,:mail,:age)',$param);
//     return redirect('/hello');
//   }

//   public function edit(Request $request)
//   {
//     $param =['id' =>$request->id,];
//     $item =DB::select('select * from people where id = :id',$param);
//     return view('hello.edit',['form' => $item[0]]);
//   }

//   public function update(Request $request)
//   {
//     $param =[
//       'id' =>$request->id,
//       'name' =>$request->name,
//       'mail' =>$request->mail,
//       'age' =>$request->age,
//     ];
//     DB::update('update people set name =:name, mail = :mail, age =:age where id = :id',$param);
//     return redirect('/hello');
//   }
// }

// 194ページ
// class PostsController extends Controller
// {
//   public function index(Request $request)
//   {
//     $items =DB::select('select * from people');
//     return view('hello.index',['items'=>$items,]);
//   }

//   public function post(Request $request)
//   {
//     $items =DB::select('select * from people');
//     return view('hello.index',['items'=>$items,]);
//   }

//   public function add(Request $request)
//   {
//     return view('hello.add');
//   }

//   public function create(Request $request)
//   {
//     $param =[
//       'name' =>$request->name,
//       'mail' =>$request->mail,
//       'age' =>$request->age,
//     ];
//     DB::insert('insert into people (name, mail, age) values(:name,:mail,:age)',$param);
//     return redirect('/hello');
//   }

//   public function edit(Request $request)
//   {
//     $param =['id' =>$request->id,];
//     $item =DB::select('select * from people where id = :id',$param);
//     return view('hello.edit',['form' => $item[0]]);
//   }

//   public function update(Request $request)
//   {
//     $param =[
//       'id' =>$request->id,
//       'name' =>$request->name,
//       'mail' =>$request->mail,
//       'age' =>$request->age,
//     ];
//     DB::update('update people set name =:name, mail = :mail, age =:age where id = :id',$param);
//     return redirect('/hello');
//   }

//   public function del(Request $request)
//   {
//     $param =['id' =>$request->id,];
//     $item =DB::select('select * from people where id = :id',$param);
//     return view('hello.del',['form' => $item[0]]);
//   }

//   public function remove(Request $request)
//   {
//     $param =[
//       'id' =>$request->id,];
//     DB::delete('delete from people where id = :id',$param);
//     return redirect('/hello');
//   }
// }

