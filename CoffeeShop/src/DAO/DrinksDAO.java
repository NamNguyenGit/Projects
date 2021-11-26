/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;
import Entities.Drinks;
import java.util.List;

/**
 *
 * @author acer
 */
public interface DrinksDAO {
    public List<Drinks> getlistDrinks();
    public boolean insertDrinks(Drinks d1);
    public boolean deleteDrinks(int IdDrinks);
    public boolean updateDrinks(Drinks d1);
    public List<Drinks> getDrinksbyName(String NameDrink);
    
}
