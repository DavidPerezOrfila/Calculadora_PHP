/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author david
 */
public class Cercle {

    /**
* El mètode static main() recull paràmetres de la consola i els
* passa a la matriu de cadenes "args". La matriu "args" té un mètode
* públic de la classe array, "length()", el qual, al cridar-lo, ens
* proporciona la longitud, és a dir, el nombre d'elements, buits o
* no, que hi ha a la matriu (array).
*/
public static void main (String[] args) {
    
    int numParametres=args.length; // Declaració de la variable
                                   // "numParametres" del tipus "int"
                                   // i assignació del seu valor.
                                   
    double radi=0; // Declaració de la variable "radi" del tipus
                   // "double" i assignació d'un valor inicial.
                   
        switch (numParametres) { // Bifurcació del flux del programa
                                 // en funció del nombre de
                                 // paràmetres introduïts per
                                 // l'usuari.
            case 0:  // L'usuari, erròniament, no ha donat cap
                     // paràmetre. El programa imprimeix els
                     // missatges del cas i acaba.
                     // Els textos dels missatges són constants
                     // (fields) definides a la classe "Missatges".
                System.out.println(Missatges.NO_PARAMETRES);
                System.out.println(Missatges.RECORDA);
                System.exit(0);
            case 1:  // L'usuari, erròniament, ha donat un sol
                     // paràmetre. El programa imprimeix els
                     // missatges del cas i acaba.
                     // Els textos dels missatges són constants 
                     // (fields) definides a la classe "Missatges".
                System.out.println(Missatges.UN_SOL_PARAMETRE);
                System.out.println(Missatges.RECORDA);
                System.exit(0);
            default:
                String sRadi=args[0]; // Declaració de la variable
                                      // "sRadi" de tipus "String",
                                      // i assignació, com a valor,
                                      // del primer dels paràmetres
                                      // (posició 0 a la matriu args)
                                      // introduïts per l'usuari.
                    try { // Ara veurem si allò que ha escrit
                          // l'usuari (i que és a "sRadi") es pot
                          // llegir com a "double". Fem servir el
                          // mètode static de la classe Double
                          // public static double parseDouble(String
                          // string). EL mètode tira una excepció si
                          // no pot fer la traducció.
                          // El valor obtingut el posem a "radi".
                        radi=Double.parseDouble(sRadi);
                            if (radi>0) { // El paràmetre donat per
                                          // l'usuari és adequat. Li
                                          // imprimim un missatge, el
                                          // text del qual és una
                                          // constant (field) de la
                                          // classe "Missatges".
                                System.out.println(Missatges.RADI_BO+
                                                   sRadi);
                            } else { // El paràmetre donat per
                                     // l'usuari no és adequat. Li
                                     // imprimim un missatge, el
                                     // text del qual és una
                                     // constant (field) de la
                                     // classe "Missatges", i acabem
                                     // l'aplicació.
                                System.out.println(sRadi+
                                          Missatges.RADI_NO_POSITIU);
                                System.exit(0);
                            }
                    } catch (NumberFormatException e) {// No s'ha
                                                       // pogut
                                                       // llegir el
                                                       // paràmetre
                                                       // com a
                                                       // nombre!
                                                       // S'imprimeix
                                                       // un missatge
                                                       // i s'acaba
                                                       // l'aplicació
                        System.out.println(sRadi+
                                           Missatges.NOMBRE_ESTRANY);
                        System.exit(0);
                    }
                    
                int queFaig=0; // Declaració de la variable "queFaig"
                               // del tipus "int", i assignació d'un
                               // valor inicial.
                
                String sQueFaig=args[1]; // Declaració de la variable
                                         // "sQueFaig" del tipus
                                         // "String", i assignació,
                                         // com a valor, del segon
                                         // dels paràmetres (posició
                                         // 1 a la matriu "args")
                                         // introduïts per l'usuari.
                                         //
                
                    try { // Ara veurem si allò que ha escrit
                          // l'usuari (i que és a "sQueFaig") es pot
                          // llegir com a "int". Fem servir el
                          // mètode static de la classe Integer
                          // public static int parseInt(String
                          // string).EL mètode llença una excepció si
                          // no pot fer la traducció.
                          // El valor obtingut el posem a "queFaig".
                        queFaig=Integer.parseInt(sQueFaig);
                            if (queFaig>0 && queFaig<3) {// El
                                                         // paràmetre
                                                         // donat
                                                         // per
                                                         // l'usuari
                                                         // és
                                                         // adequat:
                                                         // Més gran
                                                         // que zero
                                                         // i ("&&")
                                                         // més
                                                         // petits
                                                         // que tres.
                                                         // Cridem el
                                                         // mètode
                                                         // "calcula"
                                calcula(radi,queFaig);
                            } else { // El paràmetre donat per
                                     // l'usuari no és adequat. Li
                                     // imprimim un missatge, el
                                     // text del qual és una
                                     // constant (field) de la
                                     // classe "Missatges", i acabem
                                     // l'aplicació.
                                System.out.println(sQueFaig+
                                          Missatges.OPCIO_NO_ADMESA);
                                System.exit(0);
                            }
                    } catch (NumberFormatException e) {// No s'ha
                                                       // pogut
                                                       // llegir el
                                                       // paràmetre
                                                       // com a
                                                       // nombre!
                                                       // S'imprimeix
                                                       // un missatge
                                                       // i s'acaba
                                                       // l'aplicació
                        System.out.println(sQueFaig+
                                           Missatges.NOMBRE_ESTRANY);
                        System.exit(0);
                    }
            }
    }

/**
* Aquest mètode fa els càlculs demanats per l'usuari i els imprimeix 
* a la pantalla.
* Com que fem servir directament la classe "Cercle" i no una
* instància d'aquesta classe, el mètode ha de ser "static".
*/
    static void calcula (double radi,int queFaig) { 
            switch (queFaig) { // Bifurcació segons l'opció de
                               // l'usuari, que és a "queFaig".
                case 1: // És l'opció "1" de l'usuari. Es calcula
                        // el perímetre del cercle de radi "radi".
                        // La constant pi=3.141592... és un field
                        // de la classe Math.
                        // S'imprimeix un missatge ad hoc, el text
                        // del qual és una constant (field) de
                        // la classe "Missatges".
                        // Observeu com l'operador "+" uneix un
                        // valor "String" (el text de "PERIMETRE_ES")
                        // amb un valor del tipus "double" dins
                        // del mètode println.
                    double perimetre=2.0*Math.PI*radi;
                    System.out.println(Missatges.PERIMETRE_ES+
                                       perimetre);
                    break;
                case 2: // És l'opció "2" de l'usuari. Es calcula
                        // l'àrea del cercle de radi "radi".
                        // La constant pi=3.141592... és un field
                        // de la classe Math.
                        // S'imprimeix un missatge ad hoc, el text
                        // text del qual és una constant (field) de
                        // la classe "Missatges".
                        // Observeu com l'operador "+" uneix un
                        // valor "String" (el text de "PERIMETRE_ES")
                        // amb un valor del tipus "double" dintre
                        // del mètode println.
                    double area=Math.PI*Math.pow(radi,2.0);
                    System.out.println(Missatges.AREA_ES+area);
                    break;
            }
    }

}
    

