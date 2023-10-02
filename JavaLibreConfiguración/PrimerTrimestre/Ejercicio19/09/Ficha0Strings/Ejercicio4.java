import java.util.Scanner;
public class Ejercicio4 {
    public static void main(String[] args) {
            Scanner entrada = new Scanner(System.in);
            System.out.println("Introduce una línea de cadena:");
            String linea = entrada.nextLine();
            imprimirMayusculas(linea);
            imprimirMinusculas(linea);
    }
    public static void imprimirMayusculas(String cadena) {
            System.out.println(cadena.toUpperCase());
        }
        public static void imprimirMinusculas(String cadena) {
            System.out.println(cadena.toLowerCase());
        }
}
