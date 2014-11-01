// (c) 2008 GPL v3 Pascal Stephan Philipp Steger

#include <iostream>
#include <fstream>
#include <cmath>
#include <vector>
#include <QColor>
#include <QImage>
#include <QLine>
#include <QPainter>
#include <QPicture>

#define PI 3.14159265358926

std::vector<int> xstart;
std::vector<int> xend;
std::vector<int> ystart;
std::vector<int> yend;

double xpos, ypos, phi;
double ttl = -60.0*PI/180.0;
double ttr = 60.0*PI/180.0;
double line_length;

void turn(double dphi) {
	phi += dphi;
}

void draw(int n) {
	if(n==1) {
		xstart.push_back(int(xpos));
		ystart.push_back(int(ypos));
		double dx = line_length * std::cos(phi);
		double dy = line_length * std::sin(phi);
		xpos += dx;
		ypos += dy;
		xend.push_back(int(xpos));
		yend.push_back(int(ypos));
		return;
	}
	draw(n-1);
	turn(ttr);
	draw(n-1);
	turn(2*ttl);
	draw(n-1);
	turn(ttr);
	draw(n-1);
}

int
main(int argc, char* argv[]){

	if(argc != 2) {
		std::cout << " Give one int parameter < 20! " << std::endl;
		return 1;
	}
	int n = atoi(argv[1]);
	// set starting point
	xpos = 0.0;
	ypos = 0.0;
	phi = 0.0;
	int image_size = 500;
	line_length = double(2*image_size) / (std::pow(3.0, n));

	// start Qt painting
	QImage image(image_size, image_size, QImage::Format_RGB32);
	QPainter painter;
	painter.begin(&image);           // paint in image
	painter.setPen(QColor(255,255,255));

	// call recursion
	draw(n);
	turn(2*ttl);
	draw(n);
	turn(2*ttl);
	draw(n);

	// draw all lines
	int xoffset = image_size/6.0;
	int yoffset = image_size*(1/2+1/6+std::sqrt(3)/6);
	QLine ll(0,0,0,0);
	for(unsigned i=0; i<xstart.size(); ++i) {
		ll.setLine(
			xoffset+xstart.at(i),
			yoffset-ystart.at(i),
			xoffset+xend.at(i),
			yoffset-yend.at(i));
		painter.drawLine(ll);
	}
	// output and cleanup
	painter.end();                     // painting done
	image.save("out.png");

	return 0;
}
