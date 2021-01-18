#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nbr,etl = 1,esp;

    printf("Veuillez saisir le nombre des lignes : ");
    scanf("%d", &nbr);

    esp = nbr;

    for(int i = 1 ; i <= nbr ; i++){
//           for(int g = 1 ; g <= esp ; g++){

//              printf(" ");

//              esp--;

//           }

                for(int j = 1 ; j <= etl ; j++){

                    printf("*");

                }


            etl += 2;

            printf("\n");
    }

    return 0;
}
