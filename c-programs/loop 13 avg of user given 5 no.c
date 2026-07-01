#include <stdio.h>
int main ()
{int i,s=0,num;
 float avg;
for (i=1;i<=5;i++)
{printf ("\n enter number  \n");
scanf ("%d",&num);
s=s+num;
}
avg= s/5.0;
printf ("\n avg is %f",avg);
return 0;
}
