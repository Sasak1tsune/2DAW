import java.util.Scanner;

public class Ejercicio6 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Ingresa una línea de texto: ");
        String texto = entrada.nextLine();

        texto = texto.toLowerCase(); // Convertir todo el texto a minúsculas para contar letras

        int contadorA = 0, contadorB = 0, contadorC = 0, contadorD = 0, contadorE = 0,
                contadorF = 0, contadorG = 0, contadorH = 0, contadorI = 0, contadorJ = 0,
                contadorK = 0, contadorL = 0, contadorM = 0, contadorN = 0, contadorO = 0,
                contadorP = 0, contadorQ = 0, contadorR = 0, contadorS = 0, contadorT = 0,
                contadorU = 0, contadorV = 0, contadorW = 0, contadorX = 0, contadorY = 0,
                contadorZ = 0;

        for (int i = 0; i < texto.length(); i++) {
            char caracter = texto.charAt(i);
            if (caracter >= 'a' && caracter <= 'z') {
                switch (caracter) {
                    case 'a':
                        contadorA++;
                        break;
                    case 'b':
                        contadorB++;
                        break;
                    case 'c':
                        contadorC++;
                        break;
                    case 'd':
                        contadorD++;
                        break;
                    case 'e':
                        contadorE++;
                        break;
                    case 'f':
                        contadorF++;
                        break;
                    case 'g':
                        contadorG++;
                        break;
                    case 'h':
                        contadorH++;
                        break;
                    case 'i':
                        contadorI++;
                        break;
                    case 'j':
                        contadorJ++;
                        break;
                    case 'k':
                        contadorK++;
                        break;
                    case 'l':
                        contadorL++;
                        break;
                    case 'm':
                        contadorM++;
                        break;
                    case 'n':
                        contadorN++;
                        break;
                    case 'o':
                        contadorO++;
                        break;
                    case 'p':
                        contadorP++;
                        break;
                    case 'q':
                        contadorQ++;
                        break;
                    case 'r':
                        contadorR++;
                        break;
                    case 's':
                        contadorS++;
                        break;
                    case 't':
                        contadorT++;
                        break;
                    case 'u':
                        contadorU++;
                        break;
                    case 'v':
                        contadorV++;
                        break;
                    case 'w':
                        contadorW++;
                        break;
                    case 'x':
                        contadorX++;
                        break;
                    case 'y':
                        contadorY++;
                        break;
                    case 'z':
                        contadorZ++;
                        break;
                }
            }
        }

        // Imprimir los resultados en formato tabular
        System.out.println("Letra\tOcurrencias");
        imprimirOcurrencia('a', contadorA);
        imprimirOcurrencia('b', contadorB);
        imprimirOcurrencia('c', contadorC);
        imprimirOcurrencia('d', contadorD);
        imprimirOcurrencia('e', contadorE);
        imprimirOcurrencia('f', contadorF);
        imprimirOcurrencia('g', contadorG);
        imprimirOcurrencia('h', contadorH);
        imprimirOcurrencia('i', contadorI);
        imprimirOcurrencia('j', contadorJ);
        imprimirOcurrencia('k', contadorK);
        imprimirOcurrencia('l', contadorL);
        imprimirOcurrencia('m', contadorM);
        imprimirOcurrencia('n', contadorN);
        imprimirOcurrencia('o', contadorO);
        imprimirOcurrencia('p', contadorP);
        imprimirOcurrencia('q', contadorQ);
        imprimirOcurrencia('r', contadorR);
        imprimirOcurrencia('s', contadorS);
        imprimirOcurrencia('t', contadorT);
        imprimirOcurrencia('u', contadorU);
        imprimirOcurrencia('v', contadorV);
        imprimirOcurrencia('w', contadorW);
        imprimirOcurrencia('x', contadorX);
        imprimirOcurrencia('y', contadorY);
        imprimirOcurrencia('z', contadorZ);
    }

    public static void imprimirOcurrencia(char letra, int contador) {
        if (contador > 0) {
            System.out.println(letra + "\t" + contador);
        }
    }
}
