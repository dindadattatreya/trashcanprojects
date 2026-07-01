#include <stdio.h>
int main ()
{ int m;
printf ("\n enter your marks  ");
scanf ("\n %d",&m);
if (m>=90 && m<=100)
printf ("\n grade is A");
else if (m>=80 && m<=90)
printf ("\n grade is B");
else if (m>=70 && m<=80)
printf ("\n grade is C");
else
printf ("\n grade is D");
return 0;
}
