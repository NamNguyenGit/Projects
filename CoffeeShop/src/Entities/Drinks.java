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
public class Drinks {
    private int IdDrink;
    private String NameDrink;
    private String ContentDrink;
    private int PriceDrink;
    private int is_delete;

    public Drinks() {
    }

    public Drinks(int IdDrink, String NameDrink, String ContentDrink, int PriceDrink, int is_delete) {
        this.IdDrink = IdDrink;
        this.NameDrink = NameDrink;
        this.ContentDrink = ContentDrink;
        this.PriceDrink = PriceDrink;
        this.is_delete = is_delete;
    }

    public int getIdDrink() {
        return IdDrink;
    }

    public void setIdDrink(int IdDrink) {
        this.IdDrink = IdDrink;
    }

    public String getNameDrink() {
        return NameDrink;
    }

    public void setNameDrink(String NameDrink) {
        this.NameDrink = NameDrink;
    }

    public String getContentDrink() {
        return ContentDrink;
    }

    public void setContentDrink(String ContentDrink) {
        this.ContentDrink = ContentDrink;
    }

    public int getPriceDrink() {
        return PriceDrink;
    }

    public void setPriceDrink(int PriceDrink) {
        this.PriceDrink = PriceDrink;
    }

    public int getIs_delete() {
        return is_delete;
    }

    public void setIs_delete(int is_delete) {
        this.is_delete = is_delete;
    }
    
    
}
