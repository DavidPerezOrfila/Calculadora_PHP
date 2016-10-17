
import java.util.Scanner;

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
        Scanner teclado = new Scanner(System.in);

        //Demanem a l'usuari que escrigui True o False
        boolean b= false;
        boolean entradaValida= true;
    do {     
        System.out.println("Introdueix un boolean True o False: ");

        //Exemple de if amb un boolean per teclat
        
       
        try{
            b = teclado.nextBoolean();
            entradaValida =true;
        } 
        catch (Exception e) {
            System.out.println("S'ha produït una excepció");
            System.out.println("Has de'introduïr true o false");
            teclado.next();
            entradaValida = false;
        }
       } while (entradaValida == false);
            
        if (b) {
            System.out.println("El paràmetre és cert!");

        } else {
            System.out.println("El paràmetre és fals!");

        }

    
    
    }
}
