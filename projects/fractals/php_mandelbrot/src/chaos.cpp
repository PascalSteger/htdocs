// (c) 2008 GPL v3 Pascal & Benedikt Steger

// This program gives a file with an array as output, where every number corresponds the iteration after which z->z^2+c leaves radius 2

#include <iostream>
#include <fstream>
#include <cmath>
#include <QImage>

#define PI 3.14159265358

int fac(int n) {
	if(n==0){return 1;}
	else if(n==1){return 1;}
	else if(n==2){return 2;}
	else if(n==3){return 6;}
	else if(n==4){return 24;}
	else if(n==5){return 120;}
	else if(n==6){return 720;}
	else
		return n*fac(n-1);
}

int npr(int n, int p) {
	if(n<p){int xx=n;n=p;p=xx;}
	if(p==0){return 1;}
	if(n==p){return 1;}
	return fac(n)/(fac(p)*fac(n-p));
}

int is_outside_n(double rec, double imc, int  n, int level) {
	double im=imc;
	double re=rec;
	int j;
	for(j=0;j<level;++j) {
		if(re*re+im*im > 256){
			return j;
		}
		int reold=re;
		int imold=im;
		for(int k=0;k<=n;++k) {
			if(k%4==0) {re+=npr(n, k)*pow(reold, n-k)*pow(imold, k);}
			else if(k%4==1) {im+=npr(n, k)*pow(reold, n-k)*pow(imold, k);}
			else if(k%4==2) {re-=npr(n, k)*pow(reold, n-k)*pow(imold, k);}
			else if(k%4==3) {im-=npr(n, k)*pow(reold, n-k)*pow(imold, k);}
		}
	}
	return j;
}

int is_outside(double rec, double imc, int level) {
	double im=imc;
	double re=rec;
	int j;
	for(j=0;j<level;++j){
		double re2=re*re;
		double im2=im*im;
		if(re2+im2 > 256){
			return j;
		}
		im=2*re*im+imc;
		re=re2-im2+rec;
	}
	return j;
}

QRgb colfun(int i) {
    int rr = 255*std::abs(std::sin((3.14159265358*i)/255));//*std::exp(-i/10.0);    rr%=255;
    int gg = 255*std::abs(std::sin((3.14159265358*i)/255));            gg%=255;
    int bb = 255*std::abs(std::sin((3.14159265358*i)/255));//*std::exp(-i/10.0);    bb%=255;

    return qRgb(rr,gg,bb);
}

int main(int argc, char* argv[]){
    if(argc!=6) {
	std::cout << "usage: ./chaos r wx re im" << std::endl;
	std::cout << " with r:  radius of calculated area " << std::endl;
	std::cout << "      wx: width of the resulting image in pixels" << std::endl;
	std::cout << "      wy: height of the resulting image in pixels" << std::endl;
	std::cout << "      re: real part and" << std::endl;
	std::cout << "      im: imaginary part of the central point." << std::endl;
	return 1;
    }

double r=atof(argv[1]);
double wx = atoi(argv[2]);
double wy = atoi(argv[3]);
double recen = atof(argv[4]);
double imcen = atof(argv[5]);

double s=2.0*r/wx;

QImage image(wx, wy, QImage::Format_RGB32);

//std::ofstream fout("/home/bs/public_html/chaoso.php");
//fout << "<?php" << std::endl;
//fout << " $output=array();" << std::endl;
for(int y=0;y<wy;y++){
    //std::cout << " Calculating line " << y << " of " << wy << std::endl;
    //fout << "$output[" << y << "]=array(";
	for(int x=0;x<wx;x++){
		double rec=1.0*s*(x-wx/2)+recen;
		double imc=1.0*s*(y-wy/2)+imcen;
// 		scale=255-is_outside(rec, imc, 255*(-log10(s)/2));
		int scale=255-is_outside(rec, imc, 255);
 		image.setPixel(x, y, colfun(scale));
//		fout << scale << ",";
	}
//	fout << ");"<< std::endl;
}

image.save("out.png");
//fout << "?>" << std::endl;
//fout.close();
//std::cout << " done!" << std::endl;
}
