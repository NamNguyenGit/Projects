/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAOImplement;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import Entities.Staff;
import Database.Database_Connect;
import DAO.StaffDAO;

/**
 *
 * @author acer
 */
public class StaffDAOimp implements StaffDAO{

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
                liststaff.add(s1);
            }
        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }         
         
         return liststaff;
       
    }

    @Override
    public boolean insertStaff(Staff s1) {
       boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("insert into staffs(name,birthday,address,phone,username,password) values (?,?,?,?,?,?)");
            ps.setString(1,s1.getNameStaff());
            ps.setString(2,s1.getBirthdayStaff());
            ps.setString(3,s1.getAddressStaff());
            ps.setString(4,s1.getPhoneStaff());
            ps.setString(5,s1.getUsername());
            ps.setString(6,s1.getPassword());

            int i = ps.executeUpdate();
            if (i>0){
                bl = true;
            }


        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }

        return bl;   
    }

    @Override
    public boolean deleteStaff(String UsernameStaff) {
        boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("delete from staffs where username = ?" );
            ps.setString(1,UsernameStaff);
            int i = ps.executeUpdate();
            if (i>0){
                bl = true;
            }
        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }



        return bl; 
    }

    @Override
    public boolean updateStaff(Staff s1) {
        boolean bl = false;


        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("UPDATE staffs SET name = ? , birthday = ? , address = ? , phone = ?  WHERE id = ?");
            ps.setString(1,s1.getNameStaff());
            ps.setString(2,s1.getBirthdayStaff());
            ps.setString(3,s1.getAddressStaff());
            ps.setString(4,s1.getPhoneStaff());
            ps.setInt(5,s1.getIdStaff());

            int i = ps.executeUpdate();
            if (i>0){
                bl = true;
            }


        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }


        return bl;
    }

    @Override
    public List<Staff> getStaffbyName(String NameStaff) {
       List<Staff> liststaff = new ArrayList<>();

        if (NameStaff.length()==0){
            NameStaff = "%";
        }
        else NameStaff = "%"+NameStaff+"%";

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from staffs where name like ?");
            ps.setString(1,NameStaff);
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
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }


        return liststaff; 
    }

    @Override
    public List<Staff> getStaffbyUserName(String UserName) {
        List<Staff> liststaff = new ArrayList<>();

        if (UserName.length()==0){
            UserName = "%";
        }
        else UserName = "%"+UserName+"%";

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from staffs where username like ?");
            ps.setString(1,UserName);
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
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }


        return liststaff; 
    }

    @Override
    public List<Staff> getStaffbyID(int id) {
        List<Staff> liststaff = new ArrayList<>();
        
        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from staffs where id = ?");
            ps.setInt(1,id);
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
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }
    
     return liststaff; 
}
}
