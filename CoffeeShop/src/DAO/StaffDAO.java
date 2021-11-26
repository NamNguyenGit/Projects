/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;
import java.util.List;
import Entities.Staff;

/**
 *
 * @author acer
 */
public interface StaffDAO {
    public List<Staff> getlistStaff();
    public boolean insertStaff(Staff s1);
    public boolean deleteStaff(String UsernameStaff);
    public boolean updateStaff(Staff s1);
    public List<Staff> getStaffbyName(String NameStaff);
    public List<Staff> getStaffbyUserName(String UserName);
    public List<Staff> getStaffbyID(int id);
}
