# Basic Usage

QRCode allow you generate and save QRCode in PNG, Text and Raw format.

## Display a QRcode

	$this->auto_render = FALSE;                   	  	  
	  
	// Force content type
	$this->response->headers('Content-Type','image/png');

	// Show QRcode         
	$this->response->body(QRCode::instance()->png('http://kohanaframework.org/')); 
	
## Save a QRcode as png

	QRCode::instance()->png('http://kohanaframework.org/', 'qrcode.png');

## Change configuration in runtine 
  
	QRCode::instance()->set('cacheable', TRUE);

## Return a QRcode as binary matrix

	$qrmatrix = QRCode::instance()->text('Hello Kohana');
	
## Using extra params

Extra params allow you to customize the quality, size or margins of you QRcode.

	QRCode::instance()->png('http://kohanaframework.org/', 'qrcode.png', QRConst::QR_ECLEVEL_M, 8, 2);

This example will save a QRcode with medium quality, with size of 8 pixels per dot (square) and a margin of 2x2

