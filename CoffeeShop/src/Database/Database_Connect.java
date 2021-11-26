/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Database;
import java.sql.*;

/**
 *
 * @author acer
 */
public class Database_Connect {
    public static  Connection openConnection(){
        Connection conn = null;
        try {
            Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/eproject2");
        } catch (ClassNotFoundException | SQLException e) {
        }
        return conn;
    }
    public static void closeAll(Connection conn, PreparedStatement ps, ResultSet rs){
        if (conn!=null){
            try {
                conn.close();
            } catch (SQLException e) {
            }
        }
        if (ps!=null){
            try {
                ps.close();
            } catch (SQLException e) {
            }
        }
        if (rs!=null){
            try {
                rs.close();
            } catch (SQLException e) {
            }
        }
    }

    public static void main(String[] args) {
        System.out.println(openConnection());
    }
    
}
