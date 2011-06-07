Kohana QRcode generator
=======================

QRcode provides to Kohana an easy way to generate ISO/IEC 18004:2006 quick response codes compatible with almost mobile 2-D QRcode readers.


Usage
-----

### Display a QRCode

    // Force content type
    $this->response->headers('Content-Type','image/png');

    // Show QRcode         
    $this->response->body(QRCode::instance()->png('http://kohanaframework.org/')); 


### Save a QRCode as file

    // Save as qrcode.png
    QRCode::instance()->png('http://kohanaframework.org/', 'qrcode.png');

