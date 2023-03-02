package util;

import java.sql.Connection;
import java.sql.DriverManager;

public class DatabaseUtil {
	
	public static Connection getConnection() {
		try {
			// 접속함
			String dbURL = "jdbc:mysql://localhost:3306/TUTORIAL";
			String dbID = "root";
			String dbPassword ="root";
			Class.forName("com.mysql.jdbc.Driver");
			return DriverManager.getConnection(dbURL, dbID, dbPassword);
			// 접속한 상태의 데이터베이스를 반환하게 함
		} catch (Exception e) {
			e.printStackTrace();
		}
		return null; //오류가 발생할 경우 null값 반환
	}

}

