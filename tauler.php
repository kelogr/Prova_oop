<?php

	require 'quadre.php';

	class Tauler
	{
		private $peces= array();
		private $tipus;
		private $nRows=null;
		private $nCols=null;

		function __construct($nRows=null, $nCols=null, $tipus)
		{
			$this->tipus=$tipus;
			$this->nRows=$nRows;
			$this->nCols=$nCols;

			switch ($this->tipus) {
				case 'escac':
					$this->escac($nRows=null, $nCols=null, $tipus);
					break;
				
				case 'aleat':
					$this->aleat($nRows=null, $nCols=null, $tipus);
					break;
			}
		}
		function escac($nRows=null, $nCols=null, $tipus){
			for ($i=0; $i < $this->nRows; $i++) { 
				if(($i%2)==0){
					for ($j=0; $j < $this->nCols; $j++) { 
						if (($j%2)==0) {
							$this->peces[$i][$j]=new Quadre('black');
						}
						else{
							$this->peces[$i][$j]=new Quadre('white');
						}
					}
				}
				else{
					for ($j=0; $j < $this->nCols; $j++) { 
						if (($j%2)==0) {
							$this->peces[$i][$j]=new Quadre('white');
						}
						else{
							$this->peces[$i][$j]=new Quadre('black');
						}
					}
				}
			}
		}
		function aleat($nRows=null, $nCols=null, $tipus){
			for ($i=0; $i < $this->nRows; $i++) { 
					for ($j=0; $j < $this->nCols; $j++) { 
						$color = rand(0,1);
						if ($color==0) {
							$this->peces[$i][$j]=new Quadre('black');
						}
						else{
							$this->peces[$i][$j]=new Quadre('white');
						}
					}
				}
			}
		function show(){
			echo '<body bgcolor="tomato">';
			echo '<table border="1">';
			for ($l=0; $l < $this->nRows; $l++) { 
				echo '<tr>';
				for ($m=0; $m < $this->nCols; $m++) { 
					$this->peces[$l][$m]->show();
				}
				echo '</tr>';
			}
			echo '</table>';
			echo '</body>';
		}
	}