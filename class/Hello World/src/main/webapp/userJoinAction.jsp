<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<%@ page import="user.UserDTO"%>
<%@ page import="user.UserDAO"%>
<%@ page import="java.io.PrintWriter" %>
<%-- 클라이언트가 볼 수 없는 주석 --%>
<!-- 클라이언트가 볼 수 있는 주석, java.io.PrinterWriter은 자바스크립트 넣기 위한 임폴트 -->

<%
// 실제로 사용자가 데이터를 처리해주는 문 
// 사용자가 보낸 데이터를 UTF-8(한글처리) 하게 해준다.
	request.setCharacterEncoding("UTF-8");
	String userID = null;
	String userPassword = null;
	// 사용자로부터 요청 패킷을 확인해서 userID란 변수가 존재하는지 확인
	// userID가 만약 존재한다면
	if(request.getParameter("userID") != null) {
		// request.getParameter = null 안에 변수값을 그대로 넣어주도록 한다.
		userID = (String) request.getParameter("userID");
	}
	if(request.getParameter("userPassword") != null) {
		// 위에서 선언한 null 안에 해당 데이터가 들어가게 만들어 주는 것
		userPassword = (String) request.getParameter("userPassword");
	}
	if (userID == null || userPassword == null) {
		PrintWriter script = response.getWriter();
		script.println("<script>");
		script.println("alert('입력이 안 된 사항이 있습니다.');");
		script.println("alert('history.back();");
		script.println("</script>");
		script.close();
		return;
	}
	
	UserDAO userDAO = new UserDAO();
	int result = userDAO.join(userID, userPassword);
	if ( result == 1) {
		PrintWriter script = response.getWriter();
		script.println("<script>");
		script.println("alert('회원가입에 성공했습니다.');");
		script.println("location.href = 'index.jsp'");
		script.println("</script>");
		script.close();
		return;
	}
%>
