<?php
// svg elements classes to extend Shape class

class Shape {
	public $x=0, $y=0;
    
    public function __construct($x, $y) {
    	$this->x = $x; 
        $this->y = $y; 
    }
	public function getPosition() {
    	$pos = array($this->x, $this->y);
    	return $pos;
    }
}


class Rect extends Shape {
	public $w = 0;
    public $h = 0;
    
    public function __construct($x, $y, $w, $h) {
    	parent::__construct($x, $y);
        $this->x = $x; $this->y = $y;
        $this->w = $w; $this->h = $h;
    }
    
    public function getX() {
    	return $this->x;
    }
    
    public function getY() {
    	return $this->y;
    }
    
    public function getXY() {
    	$pos = array($this->x, $this->y);
    	return $pos;
    }
    
//<svg width="400" height="110">
//<rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
//</svg>
    
    public function setRect($x, $y, $w, $h) {
    $string = "<rect x='$this->x' y='$this->y' width='$this->w' height='$this->h' />";
    	return $string;
    }
    
	public function getPosition() {
    	return 'Position: ' . parent::getPosition();
    }
}

// Circle($x, $y, $r)
class Circle extends Shape { 
	public $r;
    
    public function __construct($x, $y, $r) {
    	parent::__construct($x, $y);
        $this->x = $x; $this->y = $y;
        $this->r = $r;
    }	    
     public function setCircle($x, $y, $r) {
    $string = "<circle x='$this->x' y='$this->y' r='$this->r' />";
    	return $string;
    }
}

// Ellipse($x, $y, $rx, $ry)
class Ellipse extends Shape { 
	public $rx, $ry, $style="stroke:black;stroke-width:1;fill:none;";
    
    public function __construct($x, $y, $rx, $ry, $style) {
    	parent::__construct($x, $y);
        $this->x = $x; $this->y = $y;
        $this->rx = $rx; $this->ry = $ry;
        $this->style = $style;
    }	    
     public function setEllipse($x, $y, $rx, $ry) {
    $string = "<ellipse cx='$this->x' cy='$this->y' rx='$this->rx' ry='$this->ry' 
    style='$this->style' />";
    	return $string;
    }
}

$r1 = new Rect(50, 100, 30, 20);
$e1 = new Ellipse(100,100,30,50,'fill:red;');

echo $r1->getX().",".$r1->getY();
echo "<hr>";
print_r($r1->getXY());
echo "<hr><svg viewBox='0 0 500 500' xmlns='http://www.w3.org/2000/svg'>";
echo $r1->setRect();
echo $e1->setEllipse();

echo "</svg>";


?>

    
    
