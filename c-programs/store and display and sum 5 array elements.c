#include <stdio.h>
int main(){
int a[5],i,s=0;
printf ("\n enter array elements");
for (i=0;i<5;i++)
{
scanf ("%d",&a[i]);
}
printf ("\n array elements are \n");
for (i=0;i<5;i++)
{printf ("%d \t",a[i]);
s=s+a[i];}
printf (" sum = %d \t",s);
return 0;
}
