import java.util.Scanner;

public class Ejercicio15 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa la cantidad a imprimir en el cheque: ");
        double cantidad = entrada.nextDouble();

        String cantidadconvertida = convertirCantidadCheque(cantidad);

        System.out.println("Cantidad: " + cantidadconvertida);
    }

    public static String convertirCantidadCheque(double cantidad) {
        String cantidadStr = String.format("%.2f", cantidad); // convertir la cantidad con dos decimales
        String parteEntera = cantidadStr.split("\\.")[0]; // Obtener la parte entera

        int longitudTotal = 9; // Nueve espacios disponibles para la cantidad en el cheque

        if (parteEntera.length() >= longitudTotal) {
            return cantidadStr; // Reviso si es necesario proteger el cheque
        } else {
            int numeroAster = longitudTotal - parteEntera.length(); // Calcular los asteriscos
            StringBuilder resultado = new StringBuilder();

            for (int i = 0; i < numeroAster; i++) {
                resultado.append("*"); // Agrega los asteriscos
            }

            resultado.append(cantidadStr); // Agrega el numero entero y decimales
            return resultado.toString();
        }
    }
}