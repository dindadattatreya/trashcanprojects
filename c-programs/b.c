#include <stdio.h>
int main()
{
int a,b,c;
printf ("\n enter 2 numbers \n");
scanf ("%d %d",&a,&b);
c=a;
a=b;
b=c;
printf ("\n after swap a=%d and b=%d",a,b);
return 0;
}
