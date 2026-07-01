#include <stdio.h>
int main()
{ int  i,num,count=0;
for (i=1;i<=5;i++)
{printf ("\n enter number ");
scanf ("%d",&num);
if
(num % 2 == 0)
count++;}

printf ("\n number of even numbers = %d",count);
return 0;
}
