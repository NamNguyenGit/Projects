/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;
import Entities.Customer;
import java.util.List;
/**
 *
 * @author acer
 */
public interface CustomerDAO {
    public List<Customer> getlistCustomer();
    public boolean insertCustomer(Customer d1);
    public List<Customer> getCustomerbyName(String NameCustomer);
    public List<Customer> getCustomerbyID(int IdCustomer);
    
}
