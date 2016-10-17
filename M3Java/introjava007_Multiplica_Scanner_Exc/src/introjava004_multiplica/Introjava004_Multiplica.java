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
        int operand1= 0;
        int operand2= 0;
        boolean entradaValida;

        //Demanem a l'usuari que escrigui True o False
        do {
        System.out.println("Introdueix operand1 i enter: ");
        
        
        try {
            operand1 = teclado.nextInt();
        }
        catch(Exception e){
            System.out.println("Introdueix true o false");
            teclado.next();
            entradaValida =false;
        } finally {
            System.out.println("Per aquí passo sempre");
        }
        }while (entradaValida=false);
        
        
        do {
        System.out.println("Introdueix operand2 i enter: ");
        
        try {
            operand2 = teclado.nextInt();
        }
        catch(Exception e){
            System.out.println("Introdueix true o false");
            teclado.next();
            entradaValida =false;
        } finally {
            System.out.println("Per aquí passo sempre");
        }
        }while (entradaValida=false);
        /**int op1= Integer.parseInt(args[0]);
        int op2= Integer.parseInt(args[1]);*/
        int resultat= 0;
        
        for (int i = 0; i < operand2; i++) {
            resultat = resultat + operand1;
        }
        
        System.out.println("El resultat de multiplicar: " + operand1 + " per " + operand2 + " és igual a " + resultat);
        
    }
    
}
