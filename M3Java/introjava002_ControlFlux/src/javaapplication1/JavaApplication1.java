/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication1;

/**
 *
 * @author David
 */
public class JavaApplication1 {

    /**
     * @param args the command line arguments
     */
    public static void main (String[] args) {
		System.out.println ("Ja funciona!");
                boolean b = true;
                
                if (b) {
                    System.out.println ("b és cert!");
                } else {System.out.println ("b és fals!");
                    
                } 
                
                if (b) System.out.println ("b és cert!");
                
                char lletra ='p';
                switch ( lletra ) {
                    case 'a': //continuem
                    case 'e': //continuem
                    case 'i': //continuem
                    case 'o': //continuem
                    case 'u':
                        System.out.println("és una vocal");
                        break;
                    default:
                        System.out.println("la variable lletra conté una consonant");
                        
                }
                
                for ( int i=0; i<10; i++ ) {
                    System.out.println("Valor de i: " +i);
                }
                for ( int i=0, n=500; i < 10; i++, n-=10) {
                    System.out.println("Valor de n: " +n); //hace una comparación si i es menor que 10,
                                                          //entonces n disminuye 10 cada vez que se ejecuta
    }
                int m =0;
                // n =10; //Cuando n vale 10 no se ejecuta
                while ( m < 10 ) {
                    System.out.println("El valor de m: " +m);
                    m++; //incrementa el valor de n en 1
                }
                
                int f =200;
                do {
                    if ( f%2==0 ) {
                    System.out.println("El valor de f: " +f);
                } 
                    f--; //decrementa el valor de f en cada ejecución
                    
                }while ( f>0 );
                
                
                for (int i=0; i< 1000; i++) {
                    if ( i== 836) break; // A l'arribar a 836, acaba el cicle
                    if (i % 3 !=0) continue; //A l'arribar al continue segueix amb la següent itineració
                                            //sense fer l'operació
                    System.out.println("El valor de i és: " +i);
                }
                
         //metode o funció return
                int z =0;
                if (esZero(z)) {
                    System.out.println("El valor de z és zero");
                }       
                
    }    
    //metode o funció return
               
    public static boolean esZero(int unnumero) {
       return (unnumero==0); //retorna true si un número és igual a 0
    
    }
}

                
                
                
                    
                
                
	
    

