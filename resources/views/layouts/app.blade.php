<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>
</head>
<body>
  
    <div class="cont" style="margin:auto">
    <h1>TinyMCE Quick Start Guide</h1>
    <form method="post" action="{{url('store')}}">
        @csrf
        @method('get')
      <span>Title Of Article</span> 
      <input type="text" name="head">
      <textarea id="mytextarea" style="padding:50px" name="article">Hello, World!</textarea>
      <input type="file" name="img" id="">
      <input type="submit" value="نشر المقالة">
    </form>









</div>
</body>
</html>
