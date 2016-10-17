/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication8_areacercle;

/**
 *
 * @author david
 */
public class AreaCercle {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        if(args.length != 1){
            System.out.println("Parametre: Radi en centimetres");
            //System.exit(1);
            return;
        }
        // TODO code application logic here
    
    double radi = Double.parseDouble(args[0]);
    
    String out ="L'area del cercle és: " + Math.PI*radi*radi;
    System.out.println(out + " centimetres");
    
    
    }
    
    
    
}

