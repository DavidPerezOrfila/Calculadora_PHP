/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author David
 */
public class TestBoolean {

    /**
     * @param args the command line arguments
     */
    //Array d'un string
    public static void main(String[] args) {
        //Amb un if args.length diferent a 1 salta l'error que falta el paràmetre 
        if (args.length != 1) {
            System.out.println("falta el paràmetre!");
            return;
        }
        //Exemple de if amb un boolean
       
        boolean b = Boolean.parseBoolean(args[0]);
        
       b = Boolean.parseBoolean(args[0]);


        if (b) {
            System.out.println("El paràmetre és cert!");

        } else {
            System.out.println("El paràmetre és fals!");

        }

    


    }
}