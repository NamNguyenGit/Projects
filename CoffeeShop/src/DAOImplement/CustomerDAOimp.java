/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAOImplement;

import Entities.Customer;
import DAO.CustomerDAO;
import Database.Database_Connect;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author acer
 */
public class CustomerDAOimp implements CustomerDAO {

    @Override
    public boolean insertCustomer(Customer c1) {
        boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("insert into customers(namecus,phone) values (?,?)");
            ps.setString(1, c1.getCusname());
            ps.setString(2, c1.getPhone());

            int i = ps.executeUpdate();
            if (i > 0) {
                bl = true;
            }

        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return bl;
    }

    @Override
    public List<Customer> getCustomerbyName(String NameCustomer) {
        List<Customer> listcustomer = new ArrayList<>();

        if (NameCustomer.length() == 0) {
            NameCustomer = "%";
        } else {
            NameCustomer = "%" + NameCustomer + "%";
        }

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from customers where namecus like ?");
            ps.setString(1, NameCustomer);
            rs = ps.executeQuery();
            while (rs.next()) {
                Customer c1 = new Customer();
                c1.setId(rs.getInt("id"));
                c1.setCusname(rs.getString("namecus"));
                c1.setPhone(rs.getString("phone"));

                listcustomer.add(c1);

            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return listcustomer;
    }

    @Override
    public List<Customer> getlistCustomer() {
        List<Customer> listCustomer = new ArrayList<>();
       
        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;
        
         conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from customers");
            rs = ps.executeQuery();
            while (rs.next()){
                Customer c1 = new Customer();
                c1.setId(rs.getInt("ID"));
                c1.setCusname(rs.getString("namecus"));
                c1.setPhone(rs.getString("PHONE"));
                
                
                listCustomer.add(c1);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn,ps,rs);
        }         
         
         return listCustomer;
    }

    @Override
    public List<Customer> getCustomerbyID(int IdCustomer) {
      List<Customer> listcustomer = new ArrayList<>();


        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from customers where id = ?");
            ps.setInt(1, IdCustomer);
            rs = ps.executeQuery();
            while (rs.next()) {
                Customer c1 = new Customer();
                c1.setId(rs.getInt("id"));
                c1.setCusname(rs.getString("namecus"));
                c1.setPhone(rs.getString("phone"));

                listcustomer.add(c1);

            }
        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return listcustomer;
    }

   
}
