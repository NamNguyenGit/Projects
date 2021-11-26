/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author acer
 */
public class Customer {
    private int id;
    private String Cusname;
    private String Phone;

    public Customer() {
    }

    public Customer(int id, String Cusname, String Phone) {
        this.id = id;
        this.Cusname = Cusname;
        this.Phone = Phone;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getCusname() {
        return Cusname;
    }

    public void setCusname(String Cusname) {
        this.Cusname = Cusname;
    }

    public String getPhone() {
        return Phone;
    }

    public void setPhone(String Phone) {
        this.Phone = Phone;
    }

    
}
