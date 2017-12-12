<?php
//源码由旺旺:ecshop2012所有 未经允许禁止倒卖 一经发现停止任何服务
include_once 'BCGDraw.php';

if (!function_exists('file_put_contents')) {
	function file_put_contents($filename, $data)
	{
		$f = @fopen($filename, 'w');

		if (!$f) {
			return false;
		}
		else {
			$bytes = fwrite($f, $data);
			fclose($f);
			return $bytes;
		}
	}
}

class BCGDrawJPG extends BCGDraw
{
	private $dpi;
	private $quality;

	public function __construct($im)
	{
		parent::__construct($im);
	}

	public function setDPI($dpi)
	{
		if (is_int($dpi)) {
			$this->dpi = max(1, $dpi);
		}
		else {
			$this->dpi = NULL;
		}
	}

	public function setQuality($quality)
	{
		$this->quality = $quality;
	}

	public function draw()
	{
		ob_start();
		imagejpeg($this->im, NULL, $this->quality);
		$bin = ob_get_contents();
		ob_end_clean();
		$this->setInternalProperties($bin);

		if (empty($this->filename)) {
			echo $bin;
		}
		else {
			file_put_contents($this->filename, $bin);
		}
	}

	private function setInternalProperties(&$bin)
	{
		$this->internalSetDPI($bin);
		$this->internalSetC($bin);
	}

	private function internalSetDPI(&$bin)
	{
		if ($this->dpi !== NULL) {
			$bin = substr_replace($bin, pack('Cnn', 1, $this->dpi, $this->dpi), 13, 5);
		}
	}

	private function internalSetC(&$bin)
	{
		if (strcmp(substr($bin, 0, 4), pack('H*', 'FFD8FFE0')) === 0) {
			$offset = 4 + ((ord($bin[4]) << 8) | ord($bin[5]));
			$firstPart = substr($bin, 0, $offset);
			$secondPart = substr($bin, $offset);
			$cr = pack('H*', 'FFFE004447656E657261746564207769746820426172636F64652047656E657261746F7220666F722050485020687474703A2F2F7777772E626172636F64657068702E636F6D');
			$bin = $firstPart;
			$bin .= $cr;
			$bin .= $secondPart;
		}
	}
}

?>
