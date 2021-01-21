#include <stdio.h>
#include <stdlib.h>

int main()
{
    char nom[12],prenom[12],sexe[7];
    int age,num;

    printf("veuillez saisir votre nom : \n");
    scanf("%s", &nom);

    printf("veuillez saisir votre prenom : \n");
    scanf("%s",&prenom);

    printf("veuiller saisir votre age : \n");
    scanf("%d",&age);

    printf("veuillez saisir votre sexe: \n");
    scanf("%s",&sexe);

    printf("veuillez saisir votre numero de telephone : \n");
    scanf("%d",&num);

    printf("nom : %s prenom : %s age : %d sexe : %s numero de telephone : %d", nom, prenom, age, sexe, num);


    return 0;
}
