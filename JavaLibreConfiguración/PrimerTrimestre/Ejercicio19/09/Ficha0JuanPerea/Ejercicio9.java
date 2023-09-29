import java.util.Scanner;

public class Ejercicio9 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa un código entero para un carácter: ");
        int codigo = entrada.nextInt();

        // Convierte el código entero en un carácter
        char caracter = (char) codigo;

        System.out.println("El carácter correspondiente al código " + codigo + " es: " + caracter);
    }
}