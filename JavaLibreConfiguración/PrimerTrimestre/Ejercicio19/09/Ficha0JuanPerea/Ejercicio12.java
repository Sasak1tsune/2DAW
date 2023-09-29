import java.util.Scanner;

public class Ejercicio12 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa una línea de texto: ");
        String lineaTexto = entrada.nextLine();

        // Convertir el texto a minúsculas
        lineaTexto = lineaTexto.toLowerCase();

        int[] contadorLetras = new int[26]; //El alfabeto tiene 26

        // Contar las ocurrencias de cada letra
        for (int i = 0; i < lineaTexto.length(); i++) {
            char caracter = lineaTexto.charAt(i);
            if (caracter >= 'a' && caracter <= 'z') {
                int indice = caracter - 'a'; // Calcular el índice en el array
                contadorLetras[indice]++;
            }
        }

        // Imprimir la tabla de ocurrencias
        System.out.println("Tabla de ocurrencias de letras del alfabeto:");
        for (char letra = 'a'; letra <= 'z'; letra++) {
            int indice = letra - 'a';
            int ocurrencias = contadorLetras[indice];
            System.out.println(letra + ": " + ocurrencias);
        }
    }
}
