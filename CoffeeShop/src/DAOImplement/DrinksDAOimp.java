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
import DAO.DrinksDAO;
import Database.Database_Connect;
import Entities.Drinks;
/**
 *
 * @author acer
 */
public class DrinksDAOimp implements DrinksDAO{

    @Override
    public List<Drinks> getlistDrinks() {
        List<Drinks> listdrink = new ArrayList<>();
       
        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;
        
         conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from drinks");
            rs = ps.executeQuery();
            while (rs.next()){
                Drinks d1 = new Drinks();
                d1.setIdDrink(rs.getInt("ID"));
                d1.setNameDrink(rs.getString("NAME"));
                d1.setContentDrink(rs.getString("CONTENT"));
                d1.setPriceDrink(rs.getInt("PRICE"));
                
                listdrink.add(d1);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }         
         
         return listdrink;
    }

    @Override
    public boolean insertDrinks(Drinks d1) {
        boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("insert into drinks(name,content,price) values (?,?,?)");
            ps.setString(1,d1.getNameDrink());
            ps.setString(2,d1.getContentDrink());
            ps.setInt(3,d1.getPriceDrink());
          

            int i = ps.executeUpdate();
            if (i>0){
                bl = true;
            }


        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }

        return bl;
    }

    @Override
    public boolean deleteDrinks(int IdDrinks) {
       boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("delete from drinks where id = ?" );
            ps.setInt(1,IdDrinks);
            int i = ps.executeUpdate();
            if (i>0){
                bl = true;
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }



        return bl; 
    }

    @Override
    public boolean updateDrinks(Drinks d1) {
         boolean bl = false;


        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("UPDATE drinks SET name = ? , content = ? , price = ?  WHERE id = ?");
            ps.setString(1,d1.getNameDrink());
            ps.setString(2,d1.getContentDrink());
            ps.setInt(3,d1.getPriceDrink());
            ps.setInt(4,d1.getIdDrink());

            int i = ps.executeUpdate();
            if (i>0){
                bl = true;
            }


        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }


        return bl;
    }

    @Override
    public List<Drinks> getDrinksbyName(String NameDrink) {
        List<Drinks> listdrink = new ArrayList<>();

        if (NameDrink.length()==0){
            NameDrink = "%";
        }
        else NameDrink = "%"+NameDrink+"%";

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from drinks where Name like ?");
            ps.setString(1,NameDrink);
            rs = ps.executeQuery();
            while (rs.next()){
                Drinks d1 = new Drinks();
                d1.setIdDrink(rs.getInt("ID"));
                d1.setNameDrink(rs.getString("NAME"));
                d1.setContentDrink(rs.getString("CONTENT"));
                d1.setPriceDrink(rs.getInt("PRICE"));
                listdrink.add(d1);

            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }


        return listdrink;
    }
    
}
