package user;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import util.DatabaseUtil;

public class UserDAO {
	
	public int login(String userID, String userPassword) {
		String SQL = "SELECT userPassword FROM USER WHERE userID = ?";
		Connection conn = null;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		// 특정한 SQL을 설정한 뒤에 나온 결과값에 대한 처리를 해주고자 할 때 사용
		try {
			conn = DatabaseUtil.getConnection();
			// 위 SQL 문장을 실행시키기 위한 준비
			pstmt = conn.prepareStatement(SQL); 
			// 사용자에게 입력 받은 아이디 값을 SQL의 ? 안에 넣어준다.
			pstmt.setString(1, userID);
			// 실제로 데이터베이스에 SQL문을 실행시켜서 결과값을 rs에 담아준다.
			rs = pstmt.executeQuery(); // 쿼리같은 경우 데이터베이스에서 검색&조회
			if(rs.next()) {
				if(rs.getString(1).equals(userPassword)) {
					return 1;
				}
				else {
					return 0;
				}
			}
			
			return -1; //아이디 없음
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try { if(conn != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(pstmt != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(rs != null) conn.close();} catch (Exception e) {e.printStackTrace();}
		}
		return -2;
		
	}
	
	public int join(UserDTO user) {
		String SQL = "INSERT INTO USER VALUES(?, ?, ?, ?, false)";
		Connection conn = null;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		// 특정한 SQL을 설정한 뒤에 나온 결과값에 대한 처리를 해주고자 할 때 사용
		try {
			conn = DatabaseUtil.getConnection();
			// 위 SQL 문장을 실행시키기 위한 준비
			pstmt = conn.prepareStatement(SQL); 
			// 사용자에게 입력 받은 아이디 값을 SQL의 ? 안에 넣어준다.
			pstmt.setString(1, user.getUserID());
			pstmt.setString(2, user.getUserPassword());
			pstmt.setString(3, user.getUserEmail());
			pstmt.setString(4, user.getUserEmailHash());
			return pstmt.executeUpdate(); // 실제로 영향을 받은 데이터베이스를 반환 = 1 값 반환
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try { if(conn != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(pstmt != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(rs != null) conn.close();} catch (Exception e) {e.printStackTrace();}
		}
		return -1; // 회원가입 실패
		
	}
	
	public boolean getUserEmailChecked(String userID) {
		String SQL = "SELECT userEmailChecked FROM USER WHERE userID = ?";
		Connection conn = null;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		// 특정한 SQL을 설정한 뒤에 나온 결과값에 대한 처리를 해주고자 할 때 사용
		try {
			conn = DatabaseUtil.getConnection();
			// 위 SQL 문장을 실행시키기 위한 준비
			pstmt = conn.prepareStatement(SQL); 
			// 사용자에게 입력 받은 아이디 값을 SQL의 ? 안에 넣어준다.
			pstmt.setString(1, userID);
			rs = pstmt.executeQuery();
			if(rs.next()) {
				return rs.getBoolean(1);
			}
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try { if(conn != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(pstmt != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(rs != null) conn.close();} catch (Exception e) {e.printStackTrace();}
		}
		return false; // 회원가입 실패
		
	}
	
	public String getUserEmail(String userID) {
		String SQL = "SELECT userEmail FROM USER WHERE userID = ?";
		Connection conn = null;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		// 특정한 SQL을 설정한 뒤에 나온 결과값에 대한 처리를 해주고자 할 때 사용
		try {
			conn = DatabaseUtil.getConnection();
			// 위 SQL 문장을 실행시키기 위한 준비
			pstmt = conn.prepareStatement(SQL); 
			// 사용자에게 입력 받은 아이디 값을 SQL의 ? 안에 넣어준다.
			pstmt.setString(1, userID);
			rs = pstmt.executeQuery();
			if(rs.next()) {
				return rs.getString(1);
			}
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try { if(conn != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(pstmt != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(rs != null) conn.close();} catch (Exception e) {e.printStackTrace();}
		}
		return null; // 회원가입 실패
		
		
	}
	
	public boolean setUserEmailChecked(String userID) {
		String SQL = "UPDATE USER SET userEmailCheched = ture WHERE userID = ?";
		Connection conn = null;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		// 특정한 SQL을 설정한 뒤에 나온 결과값에 대한 처리를 해주고자 할 때 사용
		try {
			conn = DatabaseUtil.getConnection();
			// 위 SQL 문장을 실행시키기 위한 준비
			pstmt = conn.prepareStatement(SQL); 
			// 사용자에게 입력 받은 아이디 값을 SQL의 ? 안에 넣어준다.
			pstmt.setString(1, userID);
			pstmt.executeUpdate();
			return true;
			
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try { if(conn != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(pstmt != null) conn.close();} catch (Exception e) {e.printStackTrace();}
			try { if(rs != null) conn.close();} catch (Exception e) {e.printStackTrace();}
		}
		return false; // 회원가입 실패
		
	}

}
