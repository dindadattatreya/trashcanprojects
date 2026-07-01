// reverse the number//
int main()
{
int n,r,s=0;
printf ("\n enter a number");
scanf ("%d",&n);
while (n!=0)
{r=n%10;
s=s*10+r;
n=n/10;
}

printf ("\n reversed no is = %d",s);
return 0;
}
