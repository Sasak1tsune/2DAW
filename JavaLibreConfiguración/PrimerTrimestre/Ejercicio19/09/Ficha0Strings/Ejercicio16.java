import java.util.Scanner;
public class Ejercicio16 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        String[] morse = {
            ".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---", "-.-", ".-..",
            "--", "-.", "---", ".--.", "--.-", ".-.", "...", "-", "..-", "...-", ".--", "-..-",
            "-.--", "--.."
        };

        while (true) {
            System.out.println("Elige una opción:");
            System.out.println("1. Convertir una frase a Morse");
            System.out.println("2. Convertir Morse a frase");
            System.out.println("3. Salir");
            System.out.print("Opción: ");

            int opcion = scanner.nextInt();
            scanner.nextLine();  // Consumir la nueva línea

            switch (opcion) {
                case 1:
                    System.out.print("Ingresa una frase para convertir a Morse: ");
                    String frase = scanner.nextLine().toUpperCase();
                    String morseResultante = fraseAMorse(frase, letras, morse);
                    System.out.println("Frase en Morse: " + morseResultante);
                    break;
                case 2:
                    System.out.print("Ingresa un código Morse para convertir a frase: ");
                    String codigoMorse = scanner.nextLine();
                    String fraseDecodificada = morseAFrase(codigoMorse, letras, morse);
                    System.out.println("Frase decodificada: " + fraseDecodificada);
                    break;
                case 3:
                    System.out.println("¡Adiós!");
                    System.exit(0);
                    break;
                default:
                    System.out.println("Opción no válida. Por favor, elige una opción válida.");
            }
        }
    }

    public static String fraseAMorse(String frase, String letras, String[] morse) {
        StringBuilder morseResultante = new StringBuilder();

        for (int i = 0; i < frase.length(); i++) {
            char caracter = frase.charAt(i);

            if (caracter == ' ') {
                morseResultante.append("   ");  // Tres espacios para separar palabras en Morse
            } else {
                int indice = letras.indexOf(caracter);
                if (indice != -1) {
                    morseResultante.append(morse[indice]).append(" ");
                }
            }
        }

        return morseResultante.toString().trim();
    }

    public static String morseAFrase(String codigoMorse, String letras, String[] morse) {
        StringBuilder fraseDecodificada = new StringBuilder();

        String[] palabras = codigoMorse.split("   ");  // Separar palabras en Morse
        for (String palabra : palabras) {
            String[] letrasMorse = palabra.split(" ");  // Separar letras en Morse
            for (String letraMorse : letrasMorse) {
                int indice = indexOf(morse, letraMorse);
                if (indice != -1) {
                    fraseDecodificada.append(letras.charAt(indice));
                }
            }
            fraseDecodificada.append(' ');  // Espacio entre palabras
        }

        return fraseDecodificada.toString();
    }

    public static int indexOf(String[] array, String valor) {
        for (int i = 0; i < array.length; i++) {
            if (array[i].equals(valor)) {
                return i;
            }
        }
        return -1;
    }
}
