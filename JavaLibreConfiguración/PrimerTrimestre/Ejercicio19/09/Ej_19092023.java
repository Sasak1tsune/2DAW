/*Pedir por entrada una cadena, mostrar menu con las siguientes opciones
-mostrada al revés
-contar el numero de vocales
-contar el número de consonantes
-pasar a minuscula
-pasar a mayúsculas
-decir si es palindromo
*/
import java.util.Scanner;

public class Ej_19092023 {
    public static Scanner entrada = new Scanner(System.in);
    public static void main(String[] args) {
        int seleccion;
        boolean salida = false;
        while (salida == false) {
            String cadena = pedirCadena();
            menu();
            seleccion = entrada.nextInt();
            switch (seleccion) {
                case 1:
                    System.out.println("La cadena: " + cadena + "al revés se leería:\n");
                    System.out.println(invertirString(cadena) + "\n");
                    break;
                case 2:
                    System.out.println("La cadena cuenta con " + contarVocales(cadena) + " vocales");
                    break;
                case 3:
                    System.out.println("La cadena cuenta con " + contarConsonantes(cadena) + " Consonantes");
                    break;
                case 0:
                    salida = true;
                    break;
            }
        }
        System.out.println("auf wiedersehen");
    }
    public static String pedirCadena() {
        System.out.println("Por favor introduzca una cadena");
        String cadenaPedida = entrada.nextLine();
        System.out.println();
        return cadenaPedida;
    }
    public static void menu() {
        System.out.println("Bienvenido papu\nSelecciona tu magia:\n");
        System.out.println("[1]Mostrar la cadena al revés\n[2]Contar el número de vocales\n[3]Contar el número de consonantes\n[4]Pasar cadena a minuscula\n[5]pasar cadena a mayuscula\n[6]Comprobar palindromo\n");
        System.out.println("[0]Salida");
    }
    public static String invertirString(String cadena) {
        int longitud = cadena.length();
        String cadenaInvertida = "";
        for (int i = longitud - 1; i >= 0; i--) {
            char caracter = cadena.charAt(i);
            cadenaInvertida += caracter;
        }

        return cadenaInvertida;
    }
    public static int contarVocales(String cadena) {
        cadena = cadena.toLowerCase();
        int numeroVocales = 0;
        int longitud = cadena.length();
        for (int i = longitud - 1; i >= 0; i--) {
            char letra = cadena.charAt(i);
            if (letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || letra == 'u') {
                numeroVocales++;
            }
        }
        return numeroVocales;
    }
    public static int contarConsonantes(String cadena) {
        cadena = cadena.toLowerCase();
        int numeroConsonantes = 0;
        int longitud = cadena.length();

        for (int i = 0; i < longitud; i++) {
            char letra = cadena.charAt(i);
            if (letra >= 'a' && letra <= 'z' && letra != 'a' && letra != 'e' && letra != 'i' && letra != 'o' && letra != 'u') {
                numeroConsonantes++;
            }
        }

        return numeroConsonantes;
    }
    public static String pasarMinuscula(String cadena) {
        cadena = cadena.toLowerCase();
        return cadena;
    }
    public static String pasarMayuscula(String cadena) {
        cadena = cadena.toUpperCase();
        return cadena;
    }
    public static boolean esPalindromo(String cadena, String cadenaInversa) {
        cadena = cadena.strip();
        cadenaInversa = cadenaInversa.strip();
        
        return true;
    }
}