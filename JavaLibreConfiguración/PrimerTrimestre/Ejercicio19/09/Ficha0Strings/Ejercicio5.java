import java.util.Scanner;

public class Ejercicio5 {
     public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingrese una cadena: ");
        String texto = entrada.nextLine();

        System.out.print("Ingrese el carácter: ");
        char caracterBusqueda = entrada.next().charAt(0);

        int contador = contarOcurrencias(texto, caracterBusqueda);

        System.out.println("El carácter '" + caracterBusqueda + "' aparece " + contador + " veces.");
    }

    public static int contarOcurrencias(String texto, char caracterBusqueda) {
        int contador = 0;
        int index = texto.indexOf(caracterBusqueda);

        while (index != -1) {
            contador++;
            index = texto.indexOf(caracterBusqueda, index + 1);
        }

        return contador;
    }
}
