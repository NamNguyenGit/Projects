/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;
import Entities.OrderdDetail;
import java.util.List;
/**
 *
 * @author acer
 */
public interface OrderdDetailDAO {
    public boolean insertOrdersDetail(OrderdDetail od1);
    public List<OrderdDetail> getlistdetailbyid (int orderid);
}
