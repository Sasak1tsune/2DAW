import java.util.Scanner;
public class Ejercicio15 {
    public static Scanner scanner = new Scanner(System.in);
    public static void main(String[] args) {
        
        int opcion;
        boolean[] asientos;
        asientos = new boolean[10];
        establecerTomados(asientos); //Establezco todos los asientos a libres
       
        do {
            System.out.println("Menu de Opciones:");
            System.out.println("1 - Asignar asiento en Primera Clase");
            System.out.println("2 - Asignar asiento en Clase Económica");
            System.out.println("0 - Salir");
            System.out.print("Por favor, seleccione una opcion: ");

            opcion = scanner.nextInt();

            switch (opcion) {
                case 1:
                asignarPrimeraClase(asientos);
                    break;
                case 2:
                mostrarArray(asientos);
                    break;
                case 0:
                    System.out.println("Gracias por usar nuestra aplicación.");
                    break;
                default:
                    System.out.println("Opción no válida. Por favor, seleccione una opción válida.");
                    break;
            }

        } while (opcion != 0);
    }
    public static void asignarPrimeraClase(boolean[]asientos) {
        for (int i = 0; i < 5; i++) {
            if (asientos[i]==false){
                asientos[i]=true;
                break;
            } else if(asientos[4]==true){    
                byte seleccion;
                do{
                System.out.println("primera clase llena, desea comprar un asiento en la clase economica?");
                System.out.println("[1]Si\n[2]No");
                seleccion = scanner.nextByte();
                switch(seleccion){
                    case 1:

                        break;
                    case 2:
                        System.out.println("Entendible, tenga buen dia");
                        break;
                    default:
                        System.out.println("Por favor inserte un numero valido");
                }
                }while(seleccion!=1 && seleccion!=2);        
            }
        }
    }
    public static void establecerTomados(boolean[] asientos) {
        for (int i = 0; i < 10; i++) {
            asientos[i] = false;
        }
    }
    public static void mostrarArray(boolean[] asientos) {
        for (int i = 0; i < 10; i++) {
            System.out.println("Asiento "+i+":");
            System.out.println(asientos[i]);
        }
    }
}