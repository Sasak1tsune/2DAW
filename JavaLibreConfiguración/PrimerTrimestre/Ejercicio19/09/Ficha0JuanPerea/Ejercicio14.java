import java.util.Scanner;
public class Ejercicio14 {
     public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa una fecha en el formato dd/MM/yyyy: ");
        String fechaStr = entrada.nextLine();

        String[] partes = fechaStr.split("/");
        if (partes.length == 3) {
            String dia = partes[0];
            String mes = obtenerNombreMes(partes[1]);
            String anio = partes[2];

            System.out.println("Fecha en el segundo formato: " + dia + " de " + mes + " de " + anio);
        } else {
            System.out.println("Formato de fecha incorrecto. Debe ser dd/MM/yyyy.");
        }
    }

    public static String obtenerNombreMes(String mes) {
        switch (mes) {
            case "01":
                return "enero";
            case "02":
                return "febrero";
            case "03":
                return "marzo";
            case "04":
                return "abril";
            case "05":
                return "mayo";
            case "06":
                return "junio";
            case "07":
                return "julio";
            case "08":
                return "agosto";
            case "09":
                return "septiembre";
            case "10":
                return "octubre";
            case "11":
                return "noviembre";
            case "12":
                return "diciembre";
            default:
                return mes;
        }
    }
}
