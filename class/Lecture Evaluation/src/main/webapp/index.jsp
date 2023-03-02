<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>강의평가 웹 사이트</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/custom.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.jsp">강의평가 웹 사이트</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
	<span class="navbar-toggler-icon"></span></button>
	<div id="navbar" class="collapse navbar-collapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.jsp">메인</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown">
					회원 관리
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdown">
					<a class="dropdown-item" href="#">로그인</a>
					<a class="dropdown-item" href="#">회원가입</a>
					<a class="dropdown-item" href="#">로그아웃</a>
				</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="내용을 입력하세요." aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">검색</button>
			</form>
		</div>
	</nav>
	<section class="container">
		<form method="get" action="./index.jsp" class="form.inline mt-3">
			<select name="lectureDivide" class="form-control mx-1 mt-2">
				<option value="전체">전체</option>
				<option value="전공">전공</option>
				<option value="교양">교양</option>
				<option value="기타">기타</option>
			</select>
			<input type="text" name="search" class="form-control mx-1 mt-2" placeholder="내용을 입력하세요.">
			<button type="submit" class="btn btn-primary mx-1 mt-2">검색</button>
			<a class="btn btn-primary mx-1 mt-2" data-toggle="modal" href="#registerModal">등록하기</a>
			<a class="btn btn-primary mx-1 mt-2" data-toggle="modal" href="#registerModal">신고</a>
		</form>
	</section>
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal">평가 등록</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="ture">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="./evalauationRegisterAction.jsp" method="post">
						<div class="form-row">
							<div class="form-gruop col-sm-6">
								<label>강의명</label>
								<input type="text" name="lectureName" class="form-control" maxlength="20">
							</div>
							<div class="form-group col-sm-6">
								<label>교수</label>
								<input type="text" name="professorName" class="form-control" maxlength="20">
							
							</div>
						</div>
						<div class="form-row">
							<div class="form group col-sm-4">
								<label>수강 연도</label>
								<select name="lectureYear" class="form-control">
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022" >2022</option>
									<option value="2023" selected>2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
								</select>
							
							</div>
							<div class="form-group col-sm-4">
							<label>수강 학기</label>
							<select name="semesterDivide" class="form-control">
								<option value="1학기" selected>1학기</option>
								<option value="여름학기" >여름학기</option>
								<option value="2학기" >2학기</option>
								<option value="겨울학기" >겨울학기</option>
							</select>
							</div>
							<div class="form-group col-sm-4">
								<label>강의 구분</label>
								<select name="lectureDivide" class="form-control">
									<option value="전공" selected>전공</option>
									<option value="교양" selected>교양</option>
									<option value="기타" selected>기타</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>제목</label>
							<input type="text name="evaluationTime" class="form-control" maxlength="30">
 						</div>
 						<div class="form-group">
 							<label>내용</label>
 							<textarea name="evaluationContent" class="form-control" maxlength="2048" style="height: 180px;"></textarea>
 						</div>
 						<div class="form-row">
 							<div class="form-group col-sm-3">
 								<label>종합</label>
 								<select name="totalScore" class="form-control">
 									<option value="A" selected>A</option>
 									<option value="B" >B</option>
 									<option value="C" >C</option>
 									<option value="D" >D</option>
 									<option value="F" >F</option>
 								</select>
 							</div>
 							<div class="form-group col-sm-3">
 								<label>성적</label>
 								<select name="totalScore" class="form-control">
 									<option value="A" selected>A</option>
 									<option value="B" >B</option>
 									<option value="C" >C</option>
 									<option value="D" >D</option>
 									<option value="F" >F</option>
 								</select>
 							</div>
 							<div class="form-group col-sm-3">
 								<label>널널</label>
 								<select name="comfortableScore" class="form-control">
 									<option value="A" selected>A</option>
 									<option value="B" >B</option>
 									<option value="C" >C</option>
 									<option value="D" >D</option>
 									<option value="F" >F</option>
 								</select>
 							</div>
 							<div class="form-group col-sm-3">
 								<label>강의</label>
 								<select name="comfortableScore" class="form-control">
 									<option value="A" selected>A</option>
 									<option value="B" >B</option>
 									<option value="C" >C</option>
 									<option value="D" >D</option>
 									<option value="F" >F</option>
 								</select>
 						</div>
 					</div>
 					<div class="modal-footer">
 						<button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
 						<button type="button" class="btn btn-primary ">등록하기</button>
 					</div>
 						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--  제이쿼리 자바스크립트 추가하기 -->
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/pooper.js"></script>
	
</body>
</html>