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
public class ProductBuy {
    private int Drink_ID;
    private String Drink_name;
    private int Quantity;
    private int Price;

    public ProductBuy() {
    }

    public ProductBuy(int Drink_ID, String Drink_name, int Quantity, int Price) {
        this.Drink_ID = Drink_ID;
        this.Drink_name = Drink_name;
        this.Quantity = Quantity;
        this.Price = Price;
    }

    public int getDrink_ID() {
        return Drink_ID;
    }

    public void setDrink_ID(int Drink_ID) {
        this.Drink_ID = Drink_ID;
    }

    public String getDrink_name() {
        return Drink_name;
    }

    public void setDrink_name(String Drink_name) {
        this.Drink_name = Drink_name;
    }

    public int getQuantity() {
        return Quantity;
    }

    public void setQuantity(int Quantity) {
        this.Quantity = Quantity;
    }

    public int getPrice() {
        return Price;
    }

    public void setPrice(int Price) {
        this.Price = Price;
    }

    
    
   
    
}
