
import java.util.HashSet;
import java.util.Set;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author david
 */
public class TestCompte {
    public static void main(String[] args){
        Compte n1= new Compte(2000.8694, "Bank0004446785");
        Compte n2= new Compte("Bank0004654654");
        Compte n3= new Compte(1050.956, "Bank0046782116");
        
        n1.setSaldo(100.12493);
        n2.setSaldo(3595988.96355);
        n3.setSaldo(900.32145);
        
        n1.setIngresar(496.95664);
        n2.setRetirar(3336.36447);
        n3.setIngresar(400);
        
        n1.setRetirar(600);
        
        
        
        System.out.println(n1.toString() + "\n" + n2.toString() 
                +  "\n" + n3.toString());
        
        
    }
    
}
