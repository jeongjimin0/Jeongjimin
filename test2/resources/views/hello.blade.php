@extends('layout')

@section('content')
<html>
<head>


</head>
<body>
  <div style="width:800px; margin: 0px auto; height:100%; text-align: center; padding-top: 80px;">
  <nav>
    <ul>
      <li><a href="/">자기소개서</a></li>
      <li>｜<a href="/hello" style="color: blue;">&nbsp;&nbsp;포트폴리오</a></li>
      <li>｜<a href="/welcome">&nbsp;&nbsp;상세사항</a></li>
  </nav>


    <div style="margin-top: 50px;"></div>
    <button class="accordion">Projects</button>
    <div class="panel">
    <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Experiences</button>
    <div class="panel">
    <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 3</button>
    <div class="panel">
    <p>Lorem ipsum...</p>
    </div>
  </div>
</body>

<script src="/js/script.js"></script>

</div>

@endsection
