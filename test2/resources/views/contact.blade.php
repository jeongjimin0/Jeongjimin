@extends('layout')

@section('content')
<html>
<head>


</head>
<body>
  <div style="width:800px; margin: 0px auto; height:100%; text-align: center; padding-top: 30px;">
    <h3 style="margin-top:30px;">순천대학교</h3>
  <nav>
    <ul>
      <li><a href="/" style="color: blue;">자기소개서</a></li>
      <li>｜<a href="/hello">&nbsp;&nbsp;포트폴리오</a></li>
      <li>｜<a href="/welcome">&nbsp;&nbsp;상세사항</a></li>
    </nav>

    <div class="row">
    <h5 class="project--one"> Projects </h5>
    <dl class="row">
    <dt class="col-sm-3"><a href="/text">유지보수 시스템</dt></a>
  <dd class="col-sm-9">유지보수 시스템 html, css 작성, 데이터베이스[Adminer] 연결</dd>
  <dt class="col-sm-3">졸업작품</dt>
  <dd class="col-sm-9">
    <p> for the term.</p>
    <p>And some more placeholder definition text.</p>
  </dd>
  <dt class="col-sm-3">Another term</dt>
  <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

  <dt class="col-sm-3">Nesting</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">Nested definition list</dt>
      <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
    </dl>
  </dd>
</dl>

  </div>
</body>

</div>

@endsection
