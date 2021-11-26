/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;
import Entities.Orders;
import java.util.List;

/**
 *
 * @author acer
 */
public interface OrderDAO {
    public List<Orders> getlistOrders();
    public boolean insertOrders(Orders o1);
    public List<Orders> getOrdersbyName(String NameOrders);
    public List<Orders> getOrdersbyID(int IDCUS);
    public int getOrderdIDbycusid(int idcustomer);
    public int getCusIDbyOrderid(int orderid);
    public int getOrderdIdbycusid(int idcustomer);
   
   
    
    
    
}
