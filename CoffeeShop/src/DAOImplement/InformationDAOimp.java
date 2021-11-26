/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAOImplement;
import java.sql.*;
import DAO.InformationDAO;
import Database.Database_Connect;
import Entities.Staff;
import java.util.ArrayList;
import java.util.List;
/**
 *
 * @author acer
 */
public class InformationDAOimp implements InformationDAO{

    @Override
    public List<Staff> getlistStaff() {
        List<Staff> liststaff = new ArrayList<>();
       
        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;
        
         conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from staffs");
            rs = ps.executeQuery();
            while (rs.next()){
                Staff s1 = new Staff();
                s1.setIdStaff(rs.getInt("ID"));
                s1.setNameStaff(rs.getString("NAME"));
                s1.setBirthdayStaff(rs.getString("BIRTHDAY"));
                s1.setAddressStaff(rs.getString("ADDRESS"));
                s1.setPhoneStaff(rs.getString("PHONE"));
                s1.setUsername(rs.getString("USERNAME"));
                s1.setPassword(rs.getString("PASSWORD"));
                liststaff.add(s1);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }         
         
         return liststaff;
    }
    
}
