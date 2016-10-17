/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author david
 */
public class Compte {
    
    String numeroCompte;
    double saldo= 0;
    
    
   public Compte(String numeroCompte){
       this.numeroCompte= numeroCompte;
   }
    
   public Compte(double saldo, String numeroCompte){
       this.saldo= saldo;
       this.numeroCompte= numeroCompte;
       
   }
   
   public double getSaldo(){
       
       return this.saldo;
   }
   
   public double setSaldo(double saldo){
       return this.saldo= saldo;
   }
   
   public String getNumeroCompte(){
       return this.numeroCompte;
   }
   
   double quantitat= 0;
   
   public void setIngresar(double quantitat){
       this.setSaldo(this.getSaldo() + quantitat);
     }
   
   public void setRetirar(double quantitat){
       if((this.getSaldo() - quantitat) < 0){
           System.out.println("No dispone de suficiente saldo en su cuenta: " + numeroCompte);
       }else{
       this.setSaldo(this.getSaldo() - quantitat);
       }
   }
   
   public String toString(){
       double round2= Math.round(this.getSaldo()*100)/100d;
       return "Compte Nro: " + this.numeroCompte + ", Saldo:  " + round2 + " €";
   }
}
