import java.util.Scanner;
public class Ejercicio8 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa una línea de texto: ");
        String lineaTexto = entrada.nextLine();

        String[] palabras = lineaTexto.split(" "); 

        System.out.println("Palabras que comienzan con 'ED':");
        for (String palabra : palabras) {
            // Convertir la palabra a minúsculas
            palabra = palabra.toLowerCase();

            // Verificar si la palabra comienza con 'ed'
            if (palabra.startsWith("ed")) {
                System.out.println(palabra);
            }
        }
    }
}
