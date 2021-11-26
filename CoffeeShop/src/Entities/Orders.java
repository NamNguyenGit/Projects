/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.util.Date;

/**
 *
 * @author acer
 */
public class Orders {
    private int IdOrder;
    private int IdCustomer;
    private String NameCustomer;
    private String NameStaff;
    private int Id_Staff;
    private int AmountOrder;
    private Date created_at;

    public Orders() {
    }

    public Orders(int IdOrder, int IdCustomer, String NameCustomer, String NameStaff, int Id_Staff, int AmountOrder, Date created_at) {
        this.IdOrder = IdOrder;
        this.IdCustomer = IdCustomer;
        this.NameCustomer = NameCustomer;
        this.NameStaff = NameStaff;
        this.Id_Staff = Id_Staff;
        this.AmountOrder = AmountOrder;
        this.created_at = created_at;
    }

    public int getIdOrder() {
        return IdOrder;
    }

    public void setIdOrder(int IdOrder) {
        this.IdOrder = IdOrder;
    }

    public int getIdCustomer() {
        return IdCustomer;
    }

    public void setIdCustomer(int IdCustomer) {
        this.IdCustomer = IdCustomer;
    }

    public String getNameCustomer() {
        return NameCustomer;
    }

    public void setNameCustomer(String NameCustomer) {
        this.NameCustomer = NameCustomer;
    }

    public String getNameStaff() {
        return NameStaff;
    }

    public void setNameStaff(String NameStaff) {
        this.NameStaff = NameStaff;
    }

    public int getId_Staff() {
        return Id_Staff;
    }

    public void setId_Staff(int Id_Staff) {
        this.Id_Staff = Id_Staff;
    }

    public int getAmountOrder() {
        return AmountOrder;
    }

    public void setAmountOrder(int AmountOrder) {
        this.AmountOrder = AmountOrder;
    }

    public Date getCreated_at() {
        return created_at;
    }

    public void setCreated_at(Date created_at) {
        this.created_at = created_at;
    }

    


    
}
