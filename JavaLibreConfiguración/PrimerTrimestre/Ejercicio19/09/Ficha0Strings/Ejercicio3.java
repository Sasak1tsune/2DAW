import java.util.Scanner;

public class Ejercicio3 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        String cadena1, cadena2;
        int resultado;
        System.out.println("Por favor ingrese la primera cadena");
        cadena1 = input.nextLine();
        System.out.println("Por favor ingrese la segunda cadena");
        cadena2 = input.nextLine();
        resultado = cadena2.compareTo(cadena1);
        if (resultado==0){
            System.out.println("Las cadenas coinciden");
        } else if (resultado<0){
            System.out.println("La segunda cadena es mayor a la primera");
            System.out.println(cadena2+" > "+cadena1);
        } else {
            System.out.println("La segunda cadena es menor a la primera");
            System.out.println(cadena2+" < "+cadena1);
        }
}
}