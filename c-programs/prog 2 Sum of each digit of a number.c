//print the sum of each digit of a number//
int main()
{
int n,r,s=0;
printf ("\n enter a number");
scanf ("%d",&n);
while (n!=0)
{r=n%10;
s=s+r;
n=n/10;
}

printf ("\n Sum= %d",s);
return 0;
}
