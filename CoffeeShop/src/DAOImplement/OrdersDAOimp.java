/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAOImplement;

import java.sql.*;
import DAO.OrderDAO;
import Database.Database_Connect;
import Entities.Orders;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author acer
 */
public class OrdersDAOimp implements OrderDAO {

    @Override
    public List<Orders> getlistOrders() {
        List<Orders> listorder = new ArrayList<>();

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from orders");
            rs = ps.executeQuery();
            while (rs.next()) {
                Orders o1 = new Orders();
                o1.setIdOrder(rs.getInt("ID"));
                o1.setIdCustomer(rs.getInt("CUSTOMER_ID"));
                o1.setId_Staff(rs.getInt("STAFF_ID"));
                o1.setAmountOrder(rs.getInt("AMOUNT"));
                o1.setCreated_at(rs.getDate("CREATED_AT"));

                listorder.add(o1);
            }
        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return listorder;
    }

    @Override
    public boolean insertOrders(Orders o1) {
        boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();

        try {
            ps = conn.prepareStatement("insert into orders(customer_id,staff_id,amount,created_at) values (?,?,?,?)");
            ps.setInt(1, o1.getIdCustomer());
            ps.setInt(2, o1.getId_Staff());
            ps.setInt(3, o1.getAmountOrder());
            ps.setDate(4, new Date(o1.getCreated_at().getTime()));

            int i = ps.executeUpdate();
            if (i > 0) {
                bl = true;
            }

        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return bl;
    }

    public boolean deleteOrders(int IdOrders) {
        boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("delete from orders where id = ?");
            ps.setInt(1, IdOrders);
            int i = ps.executeUpdate();
            if (i > 0) {
                bl = true;
            }
        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return bl;
    }

    public boolean updateOrders(Orders o1) {
        boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("UPDATE orders SET customer = ? , staff_id = ? , amount = ?  WHERE id = ?");
            ps.setInt(1, o1.getIdCustomer());
            ps.setInt(2, o1.getId_Staff());
            ps.setFloat(3, o1.getAmountOrder());
            ps.setInt(4, o1.getIdOrder());

            int i = ps.executeUpdate();
            if (i > 0) {
                bl = true;
            }

        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return bl;
    }

    @Override
    public List<Orders> getOrdersbyName(String CustomerOrder) {
        List<Orders> listorder = new ArrayList<>();

        if (CustomerOrder.length() == 0) {
            CustomerOrder = "%";
        } else {
            CustomerOrder = "%" + CustomerOrder + "%";
        }

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from orders where customer like ?");
            ps.setString(1, CustomerOrder);
            rs = ps.executeQuery();
            while (rs.next()) {
                Orders o1 = new Orders();
                o1.setIdOrder(rs.getInt("ID"));
                o1.setIdCustomer(rs.getInt("CUSTOMER_ID"));
                o1.setId_Staff(rs.getInt("STAFF_ID"));
                o1.setAmountOrder(rs.getInt("AMOUNT"));
                o1.setCreated_at(rs.getDate("CREATED_AT"));
                listorder.add(o1);

            }
        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return listorder;
    }

    @Override
    public List<Orders> getOrdersbyID(int IDCUS) {
        List<Orders> listorder = new ArrayList<>();

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from v_customer4 where customersid = ? ");
            ps.setInt(1, IDCUS);
            rs = ps.executeQuery();

            while (rs.next()) {

                Orders o1 = new Orders();
                o1.setIdOrder(rs.getInt("id"));
                o1.setNameStaff(rs.getString("name"));
                o1.setNameCustomer(rs.getString("namecus"));
                o1.setAmountOrder(rs.getInt("amount"));
                o1.setCreated_at(rs.getDate("created_at"));
                System.out.println(o1.toString());
                listorder.add(o1);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return listorder;

    }

    @Override
    public int getOrderdIDbycusid(int idcustomer) {
        int id = 0;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("SELECT * FROM orders WHERE customer_id = ? ORDER BY id DESC LIMIT 1");
            ps.setInt(1, idcustomer);
            rs = ps.executeQuery();
            while (rs.next()) {
                id = rs.getInt("id");
            }
        } catch (Exception e) {
        }
        return id;
    }

    @Override
    public int getCusIDbyOrderid(int orderid) {
        int id = 0;
        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("SELECT * FROM orders WHERE id = ? ");
            ps.setInt(1, orderid);
            rs = ps.executeQuery();
            while (rs.next()) {
                id = rs.getInt("customer_id");
            }
        } catch (Exception e) {
        }
        return id;
    }

    @Override
    public int getOrderdIdbycusid(int idcustomer) {
         int id = 0;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("SELECT * FROM orders WHERE customer_id = ? ");
            ps.setInt(1, idcustomer);
            rs = ps.executeQuery();
            while (rs.next()) {
                id = rs.getInt("id");
            }
        } catch (Exception e) {
        }
        return id;
    }

}
