<!-- 72ページ -->
{{--<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>{{$msg}}</p>
  <form method="POST" action="/hello">
    {{csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>
</html>--}}

<!-- 75ページ -->
{{--<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  @if ($msg!='')
  <p>こんにちは、{{$msg}}さん。</p>
  @else
  <p>何か書いてください</p>
  @endif
  <form method="POST" action="/hello">
    {{csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>
</html>--}}

<!-- 77ページ -->
{{--<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  @isset ($msg)
  <p>こんにちは、{{$msg}}さん。</p>
  @else
  <p>何か書いてください</p>
  @endisset
  <form method="POST" action="/hello">
    {{csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>
</html>--}}

<!-- 80ページ -->
{{--<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>&#64;foreachデレクテブの例</p>
  <ol>
    @foreach($data as $item)
    <li>{{$item}}
    @endforeach
  </ol>
</body>
</html>--}}

<!-- 81ページ -->
{{--<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>&#64;forデレクテブの例</p>
  <ol>
    @for($i = 1;$i < 100;$i++)
    @if($i % 2 == 1)
      @continue
    @elseif($i <= 10)
    <li>No,{{$i}}
    @else
      @break
    @endif
    @endfor
  </ol>
</body>
</html>--}}

<!-- 83ページ -->
{{--<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>&#64;foreachデレクテブの例</p>
  <ol>
    @foreach($data as $item)
    @if ($loop->first)
    <p>*データ一覧</p><ul>
    @endif
    <li>No,{{$loop->iteration}}.{{$item}}</li>
    @if($loop->last)
    </ul><p>---ここまで</p>
    @endif
    @endforeach
</body>
</html>--}}

<!-- 89ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです</p>
  <p>必要なだけ記述できます</p>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection --}}

<!-- 93ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです</p>
  <p>必要なだけ記述できます</p>

  @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot
    @slot('msg_content')
    これはメッセージの表示です。
    @endslot
  @endcomponent
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}

<!-- 95ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです</p>
  <p>必要なだけ記述できます</p>

  @include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューです。'])
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}

<!-- 97ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです</p>
  <ul>
    @each('components.item',$data,'item')
  </ul>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}

<!-- 103ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです</p>
  <p>Controller value<br>'message' = {{$message}}</p>
  <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}

<!-- 112ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです</p>
  <table>
  @foreach($data as $item)
  <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
  @endforeach
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}

<!-- 117ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです</p>
  <p>これは、<middleware>google.com</middleware>へのリンクです</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです</p>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}

<!-- 122/125ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  @if(count($errors) > 0)
  <div>
    <ul>
      @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <table>
    <form action="/hello" method="post">
      {{csrf_field()}}
      <tr><th>name:</th><td><input type="text" name="name"></td></tr>
      <tr><th>mail:</th><td><input type="text" name="mail"></td></tr>
      <tr><th>age:</th><td><input type="text" name="age"></td></tr>
      <tr><th></th><td><input type="submit" name="send"></td></tr>
    </form>
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}


<!-- 128ページ -->
{{--@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  @if(count($errors) > 0)
  <p>入力に問題があります。再入力してください</p>
  @endif
  <table>
  <form action="/hello" method="post">
    {{csrf_field()}}
    @if($errors->has('name'))
    <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
    @endif
    <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

    @if($errors->has('mail'))
    <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
    @endif
    <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

    @if($errors->has('age'))
    <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
    @endif
    <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>

    <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
  </table>
@endsection--}}

<!-- 155ページ -->
{{--
@section('footer')
copyright 2017 tuyano.
@endsection

@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  @if(count($errors) > 0)
  <p>入力に問題があります。再入力してください</p>
  @endif
  <table>
  <form action="/hello" method="post">
    @if($errors->has('name'))
    <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
    @endif
    <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

    @if($errors->has('mail'))
    <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
    @endif
    <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

    @if($errors->has('age'))
    <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
    @endif
    <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>

    <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
--}}

<!-- 157ページ -->
{{--@section('footer')
copyright 2017 tuyano.
@endsection

@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  @if(count($errors) > 0)
  <p>入力に問題があります。再入力してください</p>
  @endif
  <table>
  <form action="/hello" method="post">
    {{ csrf_field() }}
    @if($errors->has('msg'))
    <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
    @endif
    <tr><th>Message:</th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection--}}

<!-- 183ページ -->
@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection




