@extends('layout')

@section('content')
<html>
<head>


</head>
<body>





  <div id="boxstyle" class="box">
    <div class="content-wrapper2" style="width:900px; margin: 0px auto;">
  <div class="row">
    <h5 class="project--one"><strong> Front-End Developer </strong> </h5>
    <dl class="row" style="padding-top: 50px;">
    <dt class="col-sm-5">Front-End</dt>
    <dd class="col-sm-7">
    <p> HTML, CSS</p>
    <p>CSS Framework: Bootstrap 5</p>
    </dd>
    <dt class="col-sm-5">Back-End</dt>
    <dd class="col-sm-7">
    <p>PHP</p>
    <p>PHP Framework: Laravel 6.*</p>
    </dd>
    <dt class="col-sm-5">Collaboration & Tools</dt>
    <dd class="col-sm-7">
    <p>Atom</p>
    <p>Github, Flow</p>
    <p>Adminer, phpMyAdmin</p>
    </dd>
</dl>

<div class="row" style="padding-bottom: 50px;">
  <h5 class="project--one"><strong> Github </strong></h5>
  <dt class="col-sm-5">주소:</dt>
  <dd class="col-sm-7"><a href="<?php echo url('https://github.com/jeongjimin0/Jeongjimin.git'); ?>">https://github.com/jeongjimin0/Jeongjimin.git</dd></a>
  </dd>
</div>

  <div class="row" style="padding-bottom: 50px;">
    <h5 class="project--one"><strong>학력</strong></h5>
    <dt class="col-sm-5">학교</dt>
    <dd class="col-sm-7">순천대학교</dd>
    <dt class="col-sm-5">학점</dt>
    <dd class="col-sm-7">3.85/4.5</dd>
    <dt class="col-sm-5">논문 & 졸업작품</dt>
    <dd class="col-sm-7">졸업작품</dd>
  </div>

  <div class="row" style="padding-bottom: 50px;">
    <h5 class="project--one"><strong>경력</strong></h5>
    <dt class="col-sm-5">한국공학기술연구원(KETRI)</dt>
    <dd class="col-sm-7">
    <p>직급: 인턴</p>
    <p>근무부서: 개발팀</p>
    <p>담당업무: 시스템 관리 및 보안</p>
    </dd>
  </div>

  <div class="row" style="padding-bottom: 100px;">
    <h5 class="project--one"><strong>자격증</strong></h5>
    <dt class="col-sm-5">정보처리기사</dt>
    <dd class="col-sm-7">합격구분 : 필기합격
    </dd>
    <dt class="col-sm-5">빅데이터실무활용능력1급</dt>
    <dd class="col-sm-7">합격구분 : 최종합격
    </dd>
  </div>


</body>

</div>

@endsection
