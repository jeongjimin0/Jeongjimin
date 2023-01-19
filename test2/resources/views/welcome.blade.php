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
      <li>｜<a href="/hello">&nbsp;&nbsp;포트폴리오</a></li>
      <li>｜<a href="/welcome" style="color: blue;">&nbsp;&nbsp;상세사항</a></li>
  </nav>


  <div class="header-left">
    <ul>
                <li><a href="/" class="active brich-logo"><img src="/images/admin/img1.png" width="86" alt="" class="logo"></a></li>
                <li class="left-btn"><a class="header-btn" href="/event" target="_self">이벤트</a></li>
                <li class="left-btn"><a class="header-btn" href="/faq" target="_self">자주 묻는 질문</a></li>
                <li class="left-btn"><a class="header-btn" href="https://main.co.kr" target="_blank">브리치</a></li>
                <li class="left-btn"><a class="header-btn" href="/tutorial" target="_self">사용 가이드</a></li>
                <li class="left-btn"><a class="header-btn" href="#main-contact-info">상담 신청</a></li>
    </ul>
</div>



  </div>
</body>

</div>

@endsection
