#include<iostream>

using namespace std;

int main()
{
	int array[12] ={2,3,5,1,22,651,2,-2,0,-8,-6,-8};
	int x = -1000, y=1000;
	int i = 0;
	string wybor;
	cout << "Podaj czego szukasz: MAXIMUM/MINIMUM: " << endl;
	cin >> wybor;
	int z;
	if(wybor == "MAXIMUM" ||wybor == "Maximum" ||wybor == "maximum") z = 0;
	if(wybor == "MINIMUM" ||wybor == "Minimum" ||wybor == "minimum") z = 1;
	switch(z){
	case 0:
        do{
            if(x<=array[i]){
                x=array[i];
            }
            i++;
        }while(i<12);
        cout << "Wartosc maxymalna to: "<< x;
        break;
	case 1:
        do{
            if(y>=array[i]){
                y=array[i];
            }
            i++;
        }while(i<12);
        cout << "Wartosc minimalna to: " << y;
        break;
    default:
        cout << "Zla wartosc" << endl;
        break;
	}
	return 0;
}
