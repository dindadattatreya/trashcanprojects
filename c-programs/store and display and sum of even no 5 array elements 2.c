#include<stdio.h>
int main()
{
    int a[5],i,s=0;
    printf("\n Enter Array Elements \n ");
    for(i=0;i<5;i++)
    {
        scanf("%d",&a[i]);
    }
printf("\n  Array Elements are \n");
    for(i=0;i<5;i++)
    {
        printf("%d\t",a[i]);
        if(a[i]%2==0)
        s=s+a[i];
    }

printf("\nSum=%d",s);
return 0;
}
