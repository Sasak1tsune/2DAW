import java.util.Scanner;

public class Ejercicio7 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa una línea de texto: ");
        String lineaTexto = entrada.nextLine();

        String palabra = ""; // Variable para almacenar la palabra actual

        System.out.println("Palabras que comienzan con 'b':");
        for (int i = 0; i < lineaTexto.length(); i++) {
            char caracter = lineaTexto.charAt(i);

            // Si el caracter no es un espacio, se agrega el char a la palabra actual
            if (caracter != ' ') {
                palabra += caracter;
            } else {
                // Verificamos si la palabra actual comienza con 'b'
                if (palabra.toLowerCase().startsWith("b")) {
                    System.out.println(palabra);
                }

                // Reinicio de la palabra
                palabra = "";
            }
        }

        // Verifica la última palabra después del bucle
        if (palabra.length() > 0 && palabra.toLowerCase().startsWith("b")) {
            System.out.println(palabra);
        }
    }
}
