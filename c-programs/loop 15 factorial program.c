#include <stdio.h>
int main ()
{
int num,i,f=1;
printf("\n enter a number");
scanf ("%d",&num);
if (num == 0)
printf ("\n factorial is %d",f);
else
{
for (i=1;i<=num;i++)
f = f*i;
}
printf ("\n factorial is %d",f);
return 0;
}
