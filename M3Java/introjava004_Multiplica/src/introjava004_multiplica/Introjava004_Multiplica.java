/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package introjava004_multiplica;

import java.util.Scanner;

/**
 *
 * @author David
 */
public class Introjava004_Multiplica {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        /*if (args.length != 2) {
            System.out.println("falten dos paràmetres!");
            return;
        }*/
        Scanner teclado = new Scanner(System.in);

        //Demanem a l'usuari que escrigui True o False
        System.out.println("Introdueix op1 i enter: ");
        int op1= teclado.nextInt();
        
        
        
        System.out.println("Introdueix op2 i enter: ");
        int op2= teclado.nextInt();
        /**int op1= Integer.parseInt(args[0]);
        int op2= Integer.parseInt(args[1]);*/
        int resultat= 0;
        
        for (int i = 0; i < op2; i++) {
            resultat = resultat + op1;
        }
        
        System.out.println("El resultat de multiplicar: " + op1 + " per " + op2 + " és igual a " + resultat);
        
    }
    
}
