/*Ryan Buzzell
 *generates HTML links and pages for Segfault given a filename convention
 */

 #include <iostream>
 #include <fstream>
 #include <string>
 using namespace std;

 //Declare functions
void singleFile();
void multiIssue();
//void generateHTML(int)


 const string fullFirst = "<a href =\"https://members.csh.rit.edu/segfault/Segfault%20-%20Volume%20";
 const string fullSec = ",%20Issue%20";
 const string fullTri = ".pdf\" target=\"iframePdf\">Issue ";
 const string fullFrth = "</a>";
 int main()
 { 
 	int option = 0;
 	cout << "Welcome to the CSH segfault webpage builder. This is an imperfect process, on an alpha program." << endl;
 	cout << "Please select an option: " << endl << "[1] Generate HTML Link for single file" << endl << "[2] Generate HTML Links for Multiple files in the same volume" << endl <<"Option: ";
 	cin >> option;

 	switch(option)
 	{
	 	case 1:
	 	singleFile();
	 	break;
	 	case 2:
	 	multiIssue();
	 	break;
	 	default:
	 	singleFile();
 	}
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

 void multiIssue()
 {
 	int start;
 	int end;
 	string filenameMod;
 	string volume;

 	cout << "Enter Volume Number: ";
 	cin >> volume;
 	cout << "Enter Starting issue # ";
 	cin >> start;
 	cout << "Enter Ending Issue # ";
 	cin >> end;

 	if (start == 0){
	 	for (; start <= end; start++)
	 	{
		 	if (start%2 == 1)
		 		cout << fullFirst << volume << fullSec << start << fullTri << start << fullFrth << "</br>" << endl;
		 	else if (start == end)
		 		cout << fullFirst << volume << fullSec << start << fullTri << start << fullFrth << "</br>" << endl;
		 	else
		 		cout << fullFirst << volume << fullSec << start << fullTri << start << fullFrth << endl;
	 	}
 	}
 	else
 	{
 		for (; start <= end; start++)
	 	{
		 	if (start%2 == 0 && start !=0)
		 		cout << fullFirst << volume << fullSec << start << fullTri << start << fullFrth << "</br>" << endl;
		 	else if (start == end)
		 		cout << fullFirst << volume << fullSec << start << fullTri << start << fullFrth << "</br>" << endl;
		 	else
		 		cout << fullFirst << volume << fullSec << start << fullTri << start << fullFrth << endl;
	 	}
 	}
 }


 /*Generates a collapsing button bar with links.
 void generateHTML()
 {
 	int start;
 	int end;
 	string filenameMod;
 	string volume;

 	cout << "Enter Volume Number: ";
 	cin >> volume;
 	cout << "Enter Starting issue # ";
 	cin >> start;
 	cout << "Enter Ending Issue # ";
 	cin >> end;

 	for (; start <= end; start++)
 	{
 	cout << fullFirst << volume << fullSec << start << fullTri << start << fullFrth << endl;
 	}


 }*/