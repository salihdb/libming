#!/usr/bin/php -c.

<? 

$m = new SWFMovie(7);
$m->setRate(1);
$mc = new SWFMovieClip();
$mc->setSoundStream("../Media/sound1.mp3", $m->getRate());
$mc->nextFrame();
$mc->nextFrame();
$m->add($mc);
$m->nextFrame();

$m->save("test01.swf");

?>