<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Data structures is quite a topic to cover in ten hours, this page shows just the most basic things about it.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h1>
			Tic-Tac-Toe
		</h1>
		<canvas id="TicTacToeCanvas"></canvas>
		<script>
			function TwoTwoDCoordinate(x1, y1, x2, y2)
    		{
    			this.x1 = x1;
    			this.y1 = y1;
    			this.x2 = x2;
    			this.y2 = y2;
    		}

			function TicTacToe(size)
			{
				this.canvas = document.getElementById('TicTacToeCanvas');
				this.theCanvasContext = this.canvas.getContext('2d');
				this.size = size;
				this.coordinates = new Array();
				if (this.canvas.width > this.canvas.height)
					this.cellSize = this.canvas.height / this.size;
				else
					this.cellSize = this.canvas.width / this.size;
				this.boundingClientArea = this.canvas.getBoundingClientRect();
				this.cells = new Array();
				this.end = new Boolean();
				this.color = "rgb(" + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + ")";
			}
			TicTacToe.prototype.setCells = 
				function()
				{
					for (var index = 0 ; index < (this.size * this.size) ; index++)
						this.cells[index] = 0;
				};
			TicTacToe.prototype.setCoordinates = 
				function(theTwoTwoDCoordinate)
				{
					var index = new Number();
					for (var sizeX = 0 ; sizeX < this.size ; sizeX++)
						for (var sizeY = 0 ; sizeY < this.size ; sizeY++)
							this.coordinates[index++] = new TwoTwoDCoordinate(this.cellSize * sizeX, this.cellSize * sizeY, this.cellSize * (sizeX + 1), this.cellSize * (sizeY + 1));
				};
			TicTacToe.prototype.draw = 
				function()
				{
					this.theCanvasContext.strokeStyle = this.color;
					for (var sizeX = 1 ; sizeX < this.size ; sizeX++)
					{
						this.theCanvasContext.moveTo(this.cellSize * sizeX, 0);
						this.theCanvasContext.lineTo(this.cellSize * sizeX, this.size * this.cellSize);
						this.theCanvasContext.stroke();
					}
					for (var sizeY = 1 ; sizeY < this.size ; sizeY++)
					{
						this.theCanvasContext.moveTo(0, this.cellSize * sizeY);
						this.theCanvasContext.lineTo(this.size * this.cellSize, this.cellSize * sizeY);
						this.theCanvasContext.stroke();
					}
				};
				
			TicTacToe.prototype.drawShot = 
				function(cell, custom)
				{
					if (custom == 1)
					{
						this.theCanvasContext.strokeStyle = 'rgb(100,100,255)';
						this.theCanvasContext.beginPath();
						this.theCanvasContext.arc(Math.floor((this.coordinates[cell].x1 + this.coordinates[cell].x2) * 0.5), Math.floor((this.coordinates[cell].y1 + this.coordinates[cell].y2) * 0.5), Math.floor(this.cellSize * 0.5), 0, Math.PI * 2, false);
						this.theCanvasContext.stroke();
					}
					else if (custom == -1)
					{
						this.theCanvasContext.strokeStyle = 'rgb(255,100,100)';
						this.theCanvasContext.beginPath();
						this.theCanvasContext.moveTo(this.coordinates[cell].x1, this.coordinates[cell].y1);
						this.theCanvasContext.lineTo(this.coordinates[cell].x2, this.coordinates[cell].y2);
						this.theCanvasContext.stroke();
						this.theCanvasContext.moveTo(this.coordinates[cell].x2, this.coordinates[cell].y1);
						this.theCanvasContext.lineTo(this.coordinates[cell].x1, this.coordinates[cell].y2);
						this.theCanvasContext.stroke();
					}
				};

			TicTacToe.prototype.resize =
				function()
				{
					this.canvas.width = window.innerWidth;
					this.canvas.height = window.innerHeight;
					if (this.canvas.width > this.canvas.height)
						this.cellSize = this.canvas.height / this.size;
					else
						this.cellSize = this.canvas.width / this.size;
					this.boundingClientArea = this.canvas.getBoundingClientRect();
				};
				
			TicTacToe.prototype.determineCell =
				function(clickCoordinate)
				{
					var index = new Number();
					index = 0;
					for (var sizeX = 0 ; sizeX < this.size ; sizeX++)
						for (var sizeY = 0 ; sizeY < this.size ; sizeY++)
						{
							if ((clickCoordinate.x > this.coordinates[index].x1) && (clickCoordinate.x < this.coordinates[index].x2) && (clickCoordinate.y > this.coordinates[index].y1) && (clickCoordinate.y < this.coordinates[index].y2))
								return index;
							index++;
						}
					return -1;
				};
			
			TicTacToe.prototype.checkMove =
				function(cell, custom)
				{
					if (this.cells[cell] == 0)
					{
						this.cells[cell] = custom;
						return true;
					}
					return false;
				};

			TicTacToe.prototype.play = 
				function()
				{
					var cell = new Number();
					if (this.ableToPlay())
					{
						cell = this.playCustom(-1);
						if ( cell != -1)
						{
							if (this.checkMove(cell, -1))
								this.drawShot(cell, -1);
						}
						else
						{
							cell = this.playCustom(1);
							if ( cell != -1)
							{
								if (this.checkMove(cell, -1))
									this.drawShot(cell, -1);
							}
							else
							{
								cell = this.playRandom();
								if ( cell != -1)
								{
									if (this.checkMove(cell, -1))
										this.drawShot(cell, -1);
								}
							}
						}
					}
					if (this.haveWinner())
						this.fillBoard();
				};
				
			TicTacToe.prototype.playCustom = 
				function(custom)
				{
					if (this.cells[0] == custom)
					{
						if (this.cells[1] == custom)
						{
							if (this.cells[2] == 0)
								return 2;
						}
						if (this.cells[2] == custom)
						{
							if (this.cells[1] == 0)
								return 1;
						}
						if (this.cells[3] == custom)
						{
							if (this.cells[6] == 0)
								return 6;
						}
						if (this.cells[4] == custom)
						{
							if (this.cells[8] == 0)
								return 8;
						}
						//else if (this.cells[5])
						if (this.cells[6] == custom)
						{
							if (this.cells[3] == 0)
								return 3;
						}
						//else if (this.cells[7])
						if (this.cells[8] == custom)
							if (this.cells[4] == 0)
								return 4;
					}
					if (this.cells[1] == custom)
					{
						if (this.cells[2] == custom)
						{
							if (this.cells[0] == 0)
								return 0;
						}
						//else if (this.cells[3] == custom)
						if (this.cells[4] == custom)
						{
							if (this.cells[7] == 0)
								return 7;
						}
						//else if (this.cells[5] == custom)
						//else if (this.cells[6] == custom)
						if (this.cells[7] == custom)
							if (this.cells[4] == 0)
								return 4;
						//else if (this.cells[8] == custom)
					}
					if (this.cells[2] == custom)
					{
						//if (this.cells[3] == custom)
						if (this.cells[4] == custom)
						{
							if (this.cells[6] == 0)
								return 6;
						}
						if (this.cells[5] == custom)
						{
							if (this.cells[8] == 0)
								return 8;
						}
						if (this.cells[6] == custom)
						{
							if (this.cells[4] == 0)
								return 4;
						}
						//else if (this.cells[7] == custom)
						if (this.cells[8] == custom)
							if (this.cells[5] == 0)
								return 5;
					}
					if (this.cells[3] == custom)
					{
						if (this.cells[4] == custom)
						{
							if (this.cells[5] == 0)
								return 5;
						}
						if (this.cells[5] == custom)
						{
							if (this.cells[4] == 0)
								return 4;
						}
						if (this.cells[6] == custom)
							if (this.cells[0] == 0)
								return 0;
						//else if (this.cells[7] == custom)
						//else if (this.cells[8] == custom)
					}	
					if (this.cells[4] == custom)
					{
						if (this.cells[5] == custom)
						{
							if (this.cells[3] == 0)
								return 3;
						}
						if (this.cells[6] == custom)
						{
							if (this.cells[2] == 0)
								return 2;
						}
						if (this.cells[7] == custom)
						{
							if (this.cells[1] == 0)
								return 1;
						}
						if (this.cells[8] == custom)
							if (this.cells[0] == 0)
								return 0;
					}
					if (this.cells[5] == custom)
					{
						//if (this.cells[6] == custom)
						//if (this.cells[7] == custom)
						if (this.cells[8] == custom)
							if (this.cells[2] == 0)
								return 2;
					}
					if (this.cells[6] == custom)
					{
						if (this.cells[7] == custom)
						{
							if (this.cells[8] == 0)
								return 8;
						}
						if (this.cells[8] == custom)
							if (this.cells[7] == 0)
								return 7;
					}
					if (this.cells[7] == custom)
						if (this.cells[8] == custom)
							if (this.cells[6] == 0)
								return 6;
					return -1;
				};
			TicTacToe.prototype.playRandom = 
				function()
				{
					var cell = new Number();
					
					do
					{
						cell = Math.floor(Math.random()*9)
					}while(this.cells[cell] != 0)
					
					return cell;
				};
				
			TicTacToe.prototype.ableToPlay = 
				function()
				{
					for(var index = 0 ; index < (this.size * this.size) ; index++)
						if (this.cells[index] == 0)
							return true;
					return false;
				};
				
			TicTacToe.prototype.haveWinner = 
				function()
				{
					if((this.cells[0] == this.cells[1]) && (this.cells[2] == this.cells[1]) && (this.cells[2] != 0))
						return true;
					else if((this.cells[3] == this.cells[4]) && (this.cells[5] == this.cells[4]) && (this.cells[5] != 0))
						return true;
					else if((this.cells[6] == this.cells[7]) && (this.cells[8] == this.cells[7]) && (this.cells[8] != 0))
						return true;
					else if((this.cells[0] == this.cells[3]) && (this.cells[6] == this.cells[3]) && (this.cells[6] != 0))
						return true;
					else if((this.cells[1] == this.cells[4]) && (this.cells[7] == this.cells[4]) && (this.cells[7] != 0))
						return true;
					else if((this.cells[2] == this.cells[5]) && (this.cells[8] == this.cells[5]) && (this.cells[8] != 0))
						return true;
					else if((this.cells[0] == this.cells[4]) && (this.cells[8] == this.cells[4]) && (this.cells[8] != 0))
						return true;
					else if((this.cells[2] == this.cells[4]) && (this.cells[6] == this.cells[4]) && (this.cells[6] != 0))
						return true;
					return false;
				};
				
			TicTacToe.prototype.fillBoard = 
				function()
				{
					for(var index = 0 ; index < (this.size * this.size) ; index++)
						if (this.cells[index] == 0)
							this.cells[index] = -2;
				};
			
			var theTicTacToeGame = new TicTacToe(3);
			
			//window.addEventListener('load', drawBlocks);
			window.addEventListener('resize', theTicTacToeGame.resize);
			window.addEventListener
			(
				'load',
				function ()
				{
					theTicTacToeGame.resize();
					theTicTacToeGame.draw();
					theTicTacToeGame.setCoordinates();
					theTicTacToeGame.setCells();
				}
			);
			theTicTacToeGame.canvas.addEventListener
			(
				'mousedown',
				function(e)
				{
					var pos =
					{
						x : e.clientX - theTicTacToeGame.boundingClientArea.left,
						y : e.clientY - theTicTacToeGame.boundingClientArea.top
					};
					if (theTicTacToeGame.checkMove(theTicTacToeGame.determineCell(pos),1))
					{
						theTicTacToeGame.drawShot(theTicTacToeGame.determineCell(pos), 1);
						if (theTicTacToeGame.haveWinner())
							theTicTacToeGame.fillBoard();
						theTicTacToeGame.play();
					}
					console.log(pos.x);
					console.log(pos.y);
				}
			);
		</script>
	</body>
</html>