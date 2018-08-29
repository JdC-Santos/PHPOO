<?php
	interface Controlador{
		public function ligaDesliga();
		public function abreMenu();
		public function fechaMenu();
		public function maisVolume();
		public function menosVolume();
		public function mudo();
		public function playPause();
	}