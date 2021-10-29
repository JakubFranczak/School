#include <iostream>
#include <fstream>

using namespace std;

int main(){
    fstream f1;
    fstream f2;
    f1.open("f1.txt",ios_base::out | ios_base::app);
    int i = 0;
    do{
        f1 << i << endl;
        i++;
    }while(i<21);
    f1.close();
    f1.open("f1.txt", ios_base::in);
    int a;
    f2.open("f2.txt",ios_base::out | ios_base::app);

    while(f1>>a){
       cout << a << endl;
       if(a%7!=0){
        f2 << a << endl;
       }
    }
    f2.close();
    f1.close();
    cout << endl << endl << endl;
    f1.open("f2.txt", ios_base::in);
    float x = 0;
    int y = 0;
    while(f1 >> a){
        if(a%3!=0){
        cout << a << endl;
        x = x + a;
        y++;
       }
    }
    cout << "Suma wynosi: " << x << endl;
    cout << "Srednia wynosi: " << x/y;
    f1.close();
    return 0;
}
