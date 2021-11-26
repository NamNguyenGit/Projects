/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.Date;

/**
 *
 * @author acer
 */
public class Staff {
    private int IdStaff ;
    private String NameStaff;
    private String BirthdayStaff;
    private String AddressStaff;
    private String PhoneStaff;
    private String Username;
    private String Password;

    public Staff() {
    }

    public Staff(int IdStaff, String NameStaff, String BirthdayStaff, String AddressStaff, String PhoneStaff, String Username, String Password) {
        this.IdStaff = IdStaff;
        this.NameStaff = NameStaff;
        this.BirthdayStaff = BirthdayStaff;
        this.AddressStaff = AddressStaff;
        this.PhoneStaff = PhoneStaff;
        this.Username = Username;
        this.Password = Password;

    }

    public int getIdStaff() {
        return IdStaff;
    }

    public void setIdStaff(int IdStaff) {
        this.IdStaff = IdStaff;
    }

    public String getNameStaff() {
        return NameStaff;
    }

    public void setNameStaff(String NameStaff) {
        this.NameStaff = NameStaff;
    }

    public String getBirthdayStaff() {
        return BirthdayStaff;
    }

    public void setBirthdayStaff(String BirthdayStaff) {
        this.BirthdayStaff = BirthdayStaff;
    }

    public String getAddressStaff() {
        return AddressStaff;
    }

    public void setAddressStaff(String AddressStaff) {
        this.AddressStaff = AddressStaff;
    }

    public String getPhoneStaff() {
        return PhoneStaff;
    }

    public void setPhoneStaff(String PhoneStaff) {
        this.PhoneStaff = PhoneStaff;
    }

    public String getUsername() {
        return Username;
    }

    public void setUsername(String Username) {
        this.Username = Username;
    }

    public String getPassword() {
        return Password;
    }

    public void setPassword(String Password) {
        this.Password = Password;
    }

  
    
}
