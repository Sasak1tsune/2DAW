import java.util.Scanner;

public class Ejercicio13 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa una línea de texto: ");
        String lineaTexto = entrada.nextLine();

        String[] palabras = lineaTexto.split("\\s+"); 

        int[] contadorPalabrasPorLongitud = new int[21]; 

        // Contar las palabras por longitud
        for (String palabra : palabras) {
            int longitud = palabra.length();
            if (longitud <= 20) {
                contadorPalabrasPorLongitud[longitud]++;
            }
        }

        // Imprimir la tabla de ocurrencias
        System.out.println("Tabla de ocurrencias de palabras por longitud:");
        for (int i = 1; i <= 20; i++) {
            int ocurrencias = contadorPalabrasPorLongitud[i];
            if (ocurrencias > 0) {
                System.out.println("Palabras de " + i + " letra(s): " + ocurrencias);
            }
        }
    }
}
