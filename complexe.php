<?php 
if ((isset($_POST['nb1']) AND isset($_POST['nb2']) AND isset($_POST['signe']))) {
	include 'declaration.php';
?>
			<div>
				<hr>
<?php

		if ((!empty($_POST['nb1']) AND !empty($_POST['nb2']))) {
			include 'F_Algebrique.php';
			echo "<div class = 'info' id = 'info'>
					<h3><center style = 'color: black'>Recapitulatif<br></center></h3>
						<div id = position>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> partie réelle: <span style='color:  rgb(255, 157, 0)' lang='latex' >\\Re ($nb1)</span> </p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'lang='latex'>\\Im ($nb2Bis)</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Coordonnées du point M : <span style='color:  rgb(255, 157, 0)'lang='latex'>M = $coordonnes</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Conjugué : <span style='color:  rgb(255, 157, 0)'lang='latex'>\\bar{Z} = $conjugue</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Module : <span style='color:  rgb(255, 157, 0)'lang='latex'>$abs = $mod</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Inverse : <span style='color:  rgb(255, 157, 0)'lang='latex'>$resInverse</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Argument : <span style='color:  rgb(255, 157, 0)'lang='latex'> \\theta = $resTeta</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Forme trigonométrique : <span style='color:  rgb(255, 157, 0)'lang='latex'> Z = ( \\cos( ". round($resTeta, 3) . " ) + \\sin( ". round($resTeta, 3) . " ).i )</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Forme exponentielle : <span style='color:  rgb(255, 157, 0)'lang='latex'> Z =\\sqrt$abs.e^{i.". round($resTeta, 3) . "}</span></span></p>
						 </div>
				 </div><br>";
			
		}elseif ((empty($_POST['nb1']) AND !empty($_POST['nb2']))) {
			include'AutreFichier/ImaginairePur.php';
			echo "<div class = 'info' id = 'info'>";
					echo "<h3><center style = 'color: black'>Recapitulatif<br></center></h3>";
						echo "<div id = position>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> partie réelle : <span style='color:  rgb(255, 157, 0)'>\\Re $nb1</span> </p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'>\\Im $nb2Bis</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Coordonnées du point M : <span style='color:  rgb(255, 157, 0)'>M = ($nb1; $nb2Bis)</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Conjugué : <span style='color:  rgb(255, 157, 0)'>\\bar{Z} = $conjugue</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Module : <span style='color:  rgb(255, 157, 0)'>$abs = $mod</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Inverse : <span style='color:  rgb(255, 157, 0)'>$resInverse</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Argument : <span style='color:  rgb(255, 157, 0)'>\\theta = $resTeta</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Forme trigonométrique : <span style='color:  rgb(255, 157, 0)'> Z = \\sqrt$abs( \\cos( $resTeta ) + \\sin( $resTeta ).i )</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Forme exponentielle : <span style='color:  rgb(255, 157, 0)'> Z = \\sqrt$abs.e^{i.$resTeta}</span></span></p>
						 </div>
				</div><br>";
		}elseif ((!empty($_POST['nb1']) AND empty($_POST['nb2']))) {
			include'PartieReel.php';
			echo "<div class = 'info' id = 'info'>";
					echo "<h3><center style = 'color: black'>Recapitulatif<br></center></h3>";
						echo "<div id = position>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> partie réelle : <span style='color:  rgb(255, 157, 0)'>\\Re $nb1</span> </p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> partie imaginaire : <span style='color:  rgb(255, 157, 0)'>\\Im $nb2Bis</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Coordonnées du point M : <span style='color:  rgb(255, 157, 0)'>M = ($nb1; $nb2Bis)</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Conjugué : <span style='color:  rgb(255, 157, 0)'>\\bar{Z} = $conjugue</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Module : <span style='color:  rgb(255, 157, 0)'>$abs = $mod</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Inverse : <span style='color:  rgb(255, 157, 0)'>$resInverse</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Argument : <span style='color:  rgb(255, 157, 0)'>\\theta = $resTeta</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Forme trigonométrique : <span style='color:  rgb(255, 157, 0)'> Z = \\sqrt$abs( \\cos( $resTeta ) + \\sin( $resTeta ).i )</span></p>
						 	<p style = 'color: black'> -> <span class = 'position' style = 'color: rgb(255, 255, 247)'>  </span> Forme exponentielle : <span style='color:  rgb(255, 157, 0)'> Z = \\sqrt$abs.e^{i.$resTeta}</span></span></p>
						 </div>
				</div><br>";
		}elseif ((empty($_POST['nb1']) AND empty($_POST['nb2']))) {
			echo "<div id='Error' class='container'>
					<div class='alert alert-danger fade in'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <strong>Attention !</strong> Vous devez au moins remplir un champs
					    <ul><li>Le champs des réels ET/OU des imaginaires doivent être completés</li></ul>
					</div>
	     		 </div>";
		}

}
echo "<div class = 'info' id = 'info'>";
echo "<div id = position2>";
		echo "<canvas id='myCanvas' width='600' height='300'></canvas>";
		echo "<script>
      function Graph(config) {
        // user defined properties
        this.canvas = document.getElementById(config.canvasId);
        this.minX = config.minX;
        this.minY = config.minY;
        this.maxX = config.maxX;
        this.maxY = config.maxY;
        this.unitsPerTick = config.unitsPerTick;

        // constants
        this.axisColor = '#aaa';
        this.font = '8pt Calibri';
        this.tickSize = 20;

        // relationships
        this.context = this.canvas.getContext('2d');
        this.rangeX = this.maxX - this.minX;
        this.rangeY = this.maxY - this.minY;
        this.unitX = this.canvas.width / this.rangeX;
        this.unitY = this.canvas.height / this.rangeY;
        this.centerY = Math.round(Math.abs(this.minY / this.rangeY) * this.canvas.height);
        this.centerX = Math.round(Math.abs(this.minX / this.rangeX) * this.canvas.width);
        this.iteration = (this.maxX - this.minX) / 1000;
        this.scaleX = this.canvas.width / this.rangeX;
        this.scaleY = this.canvas.height / this.rangeY;

        // draw x and y axis
        this.drawXAxis();
        this.drawYAxis();
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
      var centerX = ((".$nb1."*30)+300);
      var centerY = (-(".$nb2Bis."*15)+150);
      var radius = 1;

      context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fill();
      context.lineWidth = 5;
      context.stroke();
      }

      Graph.prototype.drawXAxis = function() {
        var context = this.context;
        context.save();
        context.beginPath();
        context.moveTo(0, this.centerY);
        context.lineTo(this.canvas.width, this.centerY);
        context.strokeStyle = this.axisColor;
        context.lineWidth = 2;
        context.stroke();

        // draw tick marks
        var xPosIncrement = this.unitsPerTick * this.unitX;
        var xPos, unit;
        context.font = this.font;
        context.textAlign = 'center';
        context.textBaseline = 'top';

        // draw left tick marks
        xPos = this.centerX - xPosIncrement;
        unit = -1 * this.unitsPerTick;
        while(xPos > 0) {
          context.moveTo(xPos, this.centerY - this.tickSize / 2);
          context.lineTo(xPos, this.centerY + this.tickSize / 2);
          context.stroke();
          context.fillText(unit, xPos, this.centerY + this.tickSize / 2 + 3);
          unit -= this.unitsPerTick;
          xPos = Math.round(xPos - xPosIncrement);
        }

        // draw right tick marks
        xPos = this.centerX + xPosIncrement;
        unit = this.unitsPerTick;
        while(xPos < this.canvas.width) {
          context.moveTo(xPos, this.centerY - this.tickSize / 2);
          context.lineTo(xPos, this.centerY + this.tickSize / 2);
          context.stroke();
          context.fillText(unit, xPos, this.centerY + this.tickSize / 2 + 3);
          unit += this.unitsPerTick;
          xPos = Math.round(xPos + xPosIncrement);
        }
        context.restore();
      };

      Graph.prototype.drawYAxis = function() {
        var context = this.context;
        context.save();
        context.beginPath();
        context.moveTo(this.centerX, 0);
        context.lineTo(this.centerX, this.canvas.height);
        context.strokeStyle = this.axisColor;
        context.lineWidth = 2;
        context.stroke();

        // draw tick marks
        var yPosIncrement = this.unitsPerTick * this.unitY;
        var yPos, unit;
        context.font = this.font;
        context.textAlign = 'right';
        context.textBaseline = 'middle';

        // draw top tick marks
        yPos = this.centerY - yPosIncrement;
        unit = this.unitsPerTick;
        while(yPos > 0) {
          context.moveTo(this.centerX - this.tickSize / 2, yPos);
          context.lineTo(this.centerX + this.tickSize / 2, yPos);
          context.stroke();
          context.fillText(unit, this.centerX - this.tickSize / 2 - 3, yPos);
          unit += this.unitsPerTick;
          yPos = Math.round(yPos - yPosIncrement);
        }

        // draw bottom tick marks
        yPos = this.centerY + yPosIncrement;
        unit = -1 * this.unitsPerTick;
        while(yPos < this.canvas.height) {
          context.moveTo(this.centerX - this.tickSize / 2, yPos);
          context.lineTo(this.centerX + this.tickSize / 2, yPos);
          context.stroke();
          context.fillText(unit, this.centerX - this.tickSize / 2 - 3, yPos);
          unit -= this.unitsPerTick;
          yPos = Math.round(yPos + yPosIncrement);
        }
        context.restore();
      };



      Graph.prototype.transformContext = function() {
        var context = this.context;

        // move context to center of canvas
        this.context.translate(this.centerX, this.centerY);

        /*
         * stretch grid to fit the canvas window, and
         * invert the y scale so that that increments
         * as you move upwards
         */
        context.scale(this.scaleX, -this.scaleY);
      };
      var myGraph = new Graph({
        canvasId: 'myCanvas',
        minX: -10.5,
        minY: -11,
        maxX: 10.5,
        maxY: 11,
        unitsPerTick: 1
      });
  </script>";
  echo "</div>";
  echo "</div>";
?>

	</div>