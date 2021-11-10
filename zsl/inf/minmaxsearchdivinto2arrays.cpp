#include<iostream>

using namespace std;

int main()
{
	int array[12] ={2,3,5,1,22,651,2,-2,0,-8,-6,-8};
	int maxarray[6]={0,0,0,0,0,0};
	int minarray[6]={0,0,0,0,0,0};
	int i = 0, i2 = 1, wskaznik=0;
	do{
        if(array[i]<array[i2]){
            maxarray[wskaznik]=array[i2];
            minarray[wskaznik]=array[i];
        }else{
            maxarray[wskaznik]=array[i];
            minarray[wskaznik]=array[i2];
        }
        i=i+2;
        i2=i2+2;
        wskaznik++;
	}while(i<12);
	int x = -1000, y=1000;
	i = 0;
	i = 0;
        do{
            if(x<=maxarray[i]){
                x=maxarray[i];
            }
            i++;
        }while(i<6);
        cout << "Wartosc maxymalna to: "<< x << endl;
	i = 0;
        do{
            if(y>=minarray[i]){
                y=minarray[i];
            }
            i++;
        }while(i<6);
        cout << "Wartosc minimalna to: " << y;
	return 0;
}
