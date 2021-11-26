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
public class OrderdDetail {
    private int IdOrder;
    private int DrinkId;
    private String DrinkName;
    private int Quantity;
    private int Price;
    

    public OrderdDetail() {
    }

    public OrderdDetail(int IdOrder, int DrinkId, String DrinkName, int Quantity, int Price) {
        this.IdOrder = IdOrder;
        this.DrinkId = DrinkId;
        this.DrinkName = DrinkName;
        this.Quantity = Quantity;
        this.Price = Price;
    }

    public int getIdOrder() {
        return IdOrder;
    }

    public void setIdOrder(int IdOrder) {
        this.IdOrder = IdOrder;
    }

    public int getDrinkId() {
        return DrinkId;
    }

    public void setDrinkId(int DrinkId) {
        this.DrinkId = DrinkId;
    }

    public String getDrinkName() {
        return DrinkName;
    }

    public void setDrinkName(String DrinkName) {
        this.DrinkName = DrinkName;
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

    @Override
    public String toString() {
        return "OrderdDetail{" + "IdOrder=" + IdOrder + ", DrinkId=" + DrinkId + ", DrinkName=" + DrinkName + ", Quantity=" + Quantity + ", Price=" + Price + '}';
    }

    
}
