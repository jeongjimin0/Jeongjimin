package user;

import java.sql.Connection;
import java.sql.PreparedStatement;

import util.DatabaseUtil;

public class UserDAO { 
	
	// 실질적으로 데이터랑 연결하는 클래스
	
	public int join(String userID, String userPassword) {
		// (?, ?) 안에는 실제로 사용자가 입력한 ID와 PW 정보가 들어간다.
		String SQL = "INSERT INTO USER VALUES (?, ?)";
		try {	// DatabaseUtil 을 가져오기 위해 static을 붙여준다.
			Connection conn = DatabaseUtil.getConnection();
			// 물음표 안에 실제로 데이터를 넣어주는 명령어
			PreparedStatement pstmt = conn.prepareStatement(SQL);
			// 각각 물음표 안에 데이터를 직접 넣어줌 
			pstmt.setString(1, userID);
			pstmt.setString(2, userPassword);
			// INSERT SQL을 실행해서 나온 값을 반환하게 한다. 
			// 만약 1개의 데이터베이스가 반환되면 1 없으면 0 -> 반환함수 int 작성
			return pstmt.executeUpdate();
		} catch (Exception e) {
			e.printStackTrace();
		}
		return -1;
	}

}
