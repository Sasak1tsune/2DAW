/*Pedir por entrada una cadena, mostrar menu con las siguientes opciones
-mostrada al revés
-contar el numero de vocales
-contar el número de consonantes
-pasar a minuscula
-pasar a mayúsculas
-decir si es palindromo
*/
import java.util.Scanner;

public class Ej_19092023{   
    public static Scanner entrada = new Scanner(System.in);
    public static void main(String[]args){
    byte seleccion;
    boolean salida=false;
        while (salida == false){
            menu();
            seleccion = entrada.nextByte();
            switch(seleccion){
                case 1:
                break;
                case 0:
                    salida=true;
                break;
            }
        }
        System.out.println("auf wiedersehen");
    }
    public static String pedirCadena(){
        System.out.println("Por favor introduzca una cadena");
        String cadenaPedida = entrada.nextLine();
        return cadenaPedida;
    }
    public static void menu(){
        System.out.println("Bienvenido papu\nSelecciona tu magia:\n");
        System.out.println("[1]Mostrar la cadena al revés\n[2]Contar el número de vocales\n[3]Contar el número de consonantes\n[4]Pasar cadena a minuscula\n[5]pasar cadena a mayuscula\n[6]Comprobar palindromo\n");
        System.out.println("[0]Salida");
    }
    public static String alReves(String cadena){
        String cadenaimportada=cadena; 
        String cadenaReves="";
            for (int i=cadenaimportada.length();i>-1;i++){
                char caracter=cadenaimportada.charAt(i);
                cadenaReves.
            }
        return cadenaReves;
    }
}