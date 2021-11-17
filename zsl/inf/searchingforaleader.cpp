#include <iostream>;

using namespace std;

int main() {
	int licznik = 0;
	int lider;
	int i = 0;
	int array[10] = { 1,2,1,2,1,2,1,2,1,2};
	lider = array[i]; //3
	do {
		i++;
		if (array[i] == lider) {
			licznik++;
		}
		if (licznik == 0) {
			lider = array[i];
		}
		if (array[i] != lider) {
			licznik--;
		}
	} while (i < 9);
	licznik = 0, i = 0;
	do
	{
		if (array[i] == lider) {
			licznik++;
		}
		i++;
	} while (i<10);
	if (licznik > 10 / 2) {
		cout << "Liderem tego ciagu jest liczba: " << lider;
	}
	else {
		cout << "Ciag ten nie ma lidera";
	}
	return 0;

}
//08:37
