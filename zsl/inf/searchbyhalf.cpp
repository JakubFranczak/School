#include<iostream>

using namespace std;
int main()
{
	int l = 0, r=9, x, mid;
	int array[10] = { 1,2,3,4,5,6,7,8,9,10 };
	cin >> x;
	while (l <= r)
	{
		mid = (l + r) / 2;
		if (array[mid] == x) {
		cout << "Liczba " << x << " wystepuje na miejscu:  " << mid+1 << endl;
		return 0;
		}
		if (array[mid] > x)
			r = mid - 1;
		else
			l = mid + 1;
	}
	cout << "Liczby nie wystepuje w tym ciagu";
	return 0;
}
