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
        <dt style="font-size: 25px;">졸업작품</dt>
        <dd>
        <p>디자이너 1, 메인화면 2, 로그인창 2, 백엔드 1, 총괄 1명으로 구성</p>
        <p><a style="background-color:powderblue;">메인 페이지 화면 설계, 기능 구현 담당<a/></p>
        <p>Android studio, Photoshop, Java</p>
        </dd>

        <dt style="font-size: 25px; padding-top: 30px;">고객관리 시스템</dt>
        <dd>
        <p><a style="background-color:powderblue;">디자인 및 데이터베이스 연결/구축</a></p>
        <p>팀원과 github 이용한 협업</p>
        <p>PHP, Atom, Laravel, Adminer, git</p>
        </dd>

        <dt style="font-size: 25px; padding-top: 30px;">유지보수 시스템</dt>
        <dd>
        <p></p>
        <p><a style="background-color:powderblue;">화면 설계부터 기획, 기능 개발 + 데이터베이스 연결/구축</a></p>
        <p>팀원과 github 이용한 협업</p>
        <p>PHP, Atom, Laravel, Adminer, git</p>
        <p style="color:red;">DB 테이블 추가 생성 후 기존 테이블의 id를 외래키로 지정</p>
        </dd>

        <dt style="font-size: 25px; padding-top: 30px;">자기소개서 페이지</dt>
        <dd>
        <p></p>
        <p><a style="background-color:powderblue;">웹 디자인 및 기능 개발 + 설계 + 데이터베이스 연결/구축</a></p>
        <p>연습 포트폴리오</p>
        <p>PHP, Atom, Laravel, Adminer, git</p>
        </dd>
    </div>

    <button class="accordion">Experiences</button>
    <div class="panel">
      <dt style="font-size: 25px;">동계 현장실습 '휴인텍'</dt>
      <dd>
      <p><strong><a style="background-color:powderblue;">회사 분위기</a>를 느낄 수 있었던 실습 시간</strong></p>
      <p>Arduino IDE를 이용한 Uno Board 설계</p>
      <p>실무 능력 향상, 사회 경험</p>
      </dd>

      <dt style="font-size: 25px; padding-top: 30px;">주식회사한국기술원</dt>
      <dd>
      <p></p>
      <p><a style="background-color:powderblue;">웹 디자인 및 기능 개발 + 설계 + 데이터베이스 연결/구축</a></p>
      <p>연습 포트폴리오</p>
      <p>PHP, Atom, Laravel, Adminer, git</p>
      </dd>

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
