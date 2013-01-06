/*Ryan Buzzell
 *generates a HTML link for Segfault given a filename
 */

 #include <iostream>
 #include <fstream>
 #include <string>
 using namespace std;

 const string fullFirst = "<a href =\"https://members.csh.rit.edu/segfault/Segfault%20-%20Volume%20";
 const string fullSec = ",%20Issue%20";
 const string fullTri = ".pdf\" target=\"iframePdf\">Issue ";
 const string fullFrth = "</a>";
 int main()
 { 
 	int option = 0;
 	cout << "Welcome to the CSH segfault webpage builder. This is an imperfect process, on an alpha program." << endl;
 	cout << "Please select an option: " << endl << "[1] Generate HTML Link for single file";
 	cin >> option;

 	switch(option)
 	case 1:
 	singleFile();
 	break;
 	default:
 	singleFile();

 }

 void singleFile()
 {
 	//Declare Variables
 	string filename;
 	string filenameMod;
 	string volume;
 	string issue;

 	cout << "NOTE: PDF filename MUST be in format \"Segfault - Volume x, Issue y.pdf\"" << endl;
 	cout << "Enter Issue Number: ";
 	cin >> issue;
 	cout << "Enter volume Number: ";
 	cin >> volume;


 	filenameMod = fullFirst + volume + fullSec + issue + fullTri + issue + fullFrth;
 	cout << filenameMod << endl;
 	fstream fout;
 	fout.open("output.txt");
 	cout << "Wrote .txt" << endl;
 	fout << filenameMod;
 	fout.close();
 	fout.open("output.html");
 	fout << filenameMod;
 	cout << "wrote .html";
 	fout.close();
 }