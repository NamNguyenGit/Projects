/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAOImplement;

import DAO.OrderdDetailDAO;
import Database.Database_Connect;
import Entities.OrderdDetail;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author acer
 */
public class OrderdDetailDAOimp implements OrderdDetailDAO {

    @Override
    public boolean insertOrdersDetail(OrderdDetail od1) {
        boolean bl = false;

        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("insert into order_detail(order_id,drink_id,quantity,price) values (?,?,?,?)");
            ps.setInt(1, od1.getIdOrder());
            ps.setInt(2, od1.getDrinkId());
            ps.setInt(3, od1.getQuantity());
            ps.setInt(4, od1.getPrice());

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
    public List<OrderdDetail> getlistdetailbyid(int orderid) {
        List<OrderdDetail> listod = new ArrayList<>();
        Connection conn;
        PreparedStatement ps = null;
        ResultSet rs = null;

        conn = Database_Connect.openConnection();
        try {
            ps = conn.prepareStatement("select * from vDetail where oID = ?");
            ps.setInt(1, orderid);
            rs = ps.executeQuery();
            while (rs.next()) {
                OrderdDetail od1 = new OrderdDetail();
                od1.setIdOrder(rs.getInt("order_id"));
                od1.setDrinkId(rs.getInt("drink_id"));
                od1.setQuantity(rs.getInt("quantity"));
                od1.setPrice(rs.getInt("price"));

                listod.add(od1);

            }
        } catch (SQLException e) {
        } finally {
            Database_Connect.closeAll(conn, ps, rs);
        }

        return listod;

    }

}
