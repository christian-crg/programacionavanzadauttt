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
			Breakout
		</h1>
		<canvas></canvas>
		<script>
			var blocksColor = Array();
			var blocksCoordinates = Array();
			var blocksState = Array();
			var canvas = document.querySelector('canvas'),
    		ctx = canvas.getContext('2d');
    		function TwoDCoordinate(x, y)
    		{
    			this.x = x;
    			this.y = y;
    		}
    		function TwoTwoDCoordinate(x1, y1, x2, y2)
    		{
    			this.x1 = x1;
    			this.y1 = y1;
    			this.x2 = x2;
    			this.y2 = y2;
    		}
    		function Ball(position, size, color)
    		{
    			this.position = new TwoDCoordinate(0, 0);
    			this.color = color;
    			this.size = size;
    			this.velocity = new TwoDCoordinate(0, 0);
    		}
    		Ball.prototype.draw = 
				function()
				{
					if (pos.x < 5 || pos.x > canvas.width - 100)
						vel.x *= -1;
				    if (pos.y < 5 || pos.y > canvas.height - 100)
						vel.y *= -1;
				    ctx.fillStyle = this.color;//
				    ctx.fillarc();
				    ctx.fillRect(this.position.x - 5, this.position.y - 5, 100, 100);
				};

			function resize()
			{
				canvas.width = window.innerWidth;
				canvas.height = window.innerHeight;
			}
			function setBlocksColor()
			{
				var index = 0;
				for(var startX = 0 ; startX < canvas.width ; startX = startX + 100)
					for(var startY = 0 ; startY < (canvas.height / 2) ; startY = startY + 100)
					{
						blocksColor[index] = "rgb(" + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + ")";
						blocksState[index] = true;
						blocksCoordinates[index] = { x1 : startX + 5, y1 : startY + 5, x2 : startX + 105, y2 : startY + 105};

						index++;
					}
			}
			function drawBlocks()
			{
				var index = 0;
				for(var startX = 0 ; startX < canvas.width ; startX = startX + 100)
					for(var startY = 0 ; startY < (canvas.height / 2) ; startY = startY + 100)
					{
						if (blocksState[index])
						{
							ctx.fillStyle = blocksColor[index];
							ctx.fillRect(startX + 5, startY + 5, 100, 100);
						}
						index++;
					}
			}
			function checkUnion(position, coordinates)
			{
				if ((position.x >= coordinates.x1) && (position.x <= coordinates.x2) && (position.y >= coordinates.y1) && (position.y <= coordinates.y2))
					return true;
				else if(((position.x + 100) >= coordinates.x1) && ((position.x + 100) <= coordinates.x2) && (position.y >= coordinates.y1) && (position.y <= coordinates.y2))
					return true;
				else if(((position.x + 100) >= coordinates.x1) && ((position.x + 100) <= coordinates.x2) && ((position.y + 100) >= coordinates.y1) && ((position.y + 100) <= coordinates.y2))
					return true;
				else if((position.x >= coordinates.x1) && (position.x <= coordinates.x2) && ((position.y + 100) >= coordinates.y1) && ((position.y + 100) <= coordinates.y2))
					return true;
				else
					return false;
			}
			//window.addEventListener('load', drawBlocks);
			window.addEventListener('resize', resize);
			window.addEventListener
			(
				'load',
				function ()
				{
					resize();
					setBlocksColor();
					var pos, vel;
					pos =
					{
						x: canvas.width - 100,
						y: canvas.height - 100
					};
					vel =
					{
						x: Math.floor(Math.random()*51),
						y: Math.floor(Math.random()*51)
					};
		
					var loop = 
					function ()
					{
						var index = 0;
						ctx.clearRect(0, 0, canvas.width, canvas.height);
						pos.x += vel.x;
						pos.y += vel.y;
						for(var startX = 0 ; startX < canvas.width ; startX = startX + 100)
							for(var startY = 0 ; startY < (canvas.height / 2) ; startY = startY + 100)
							{
								if (checkUnion(pos, blocksCoordinates[index]))//((pos.x >= blocksCoordinates[index].x1) && (pos.x <= blocksCoordinates[index].x2) && (pos.y >= blocksCoordinates[index].y1) && (pos.y <= blocksCoordinates[index].y2))
								{
									blocksState[index] = false;
									blocksCoordinates[index] = false;
									vel.y *= -1;
									startX = 99999;
									break;
								}
								index++;
							}
						drawBlocks();
						if (pos.x < 5 || pos.x > canvas.width - 100)
							vel.x *= -1;
					    if (pos.y < 5 || pos.y > canvas.height - 100)
							vel.y *= -1;
					    ctx.fillStyle = "rgba(255,255,255,0.5)";
					    ctx.fillRect(pos.x - 5, pos.y - 5, 100, 100);
					};
					setInterval(loop, 1000 / 60);
				}
			);
			canvas.addEventListener
			(
				'click',
				function(e)
				{
					var pos =
					{
						x : e.screenX - canvas.offsetLeft,
						y : e.screenY - canvas.offsetTop
					};
					console.log(pos.x)
					console.log(pos.y)
				}
			);
		</script>
	</body>
</html>