#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nbr1,nbr2;
    int somme,sous,prod,module;
    float quot;

    printf("veuillez saisir le premier nombre : \n");
    scanf("%d", &nbr1);

    printf("veuillez saisir le deuxieme nombre : \n");
    scanf("%d",&nbr2);

    somme = nbr1 + nbr2;
    sous = nbr1 - nbr2;
    prod = nbr1 * nbr2;
    module = nbr1 % nbr2;
    quot = (float)nbr1 / nbr2;

    printf("somme est %d\n", somme);
    printf("soustraction est %d\n", sous);
    printf("produit est %d\n", prod);
    printf("reste est %d\n", module);
    printf("quotien est %.2f", quot);

    return 0;
}
