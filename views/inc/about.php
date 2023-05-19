<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body
{
	margin: 0;
	padding: 0;
	background: #073146;
	font-family: sans-serif;
}
.box
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 400px;
	height: 400px;
	background: #001e2d;
	box-sizing: border-box;
	box-shadow: 0 20px 50px rgba(0,0,0,.5);
	border:2px solid rgba(0,0,0,.5);
}
.box .content{
	position: absolute;
	top: 15px;
	left: 15px;
	right: 15px;
	bottom: 15px;
	border: 2px solid #0093ff;;
	padding: 30px;
	box-shadow: 0 5px 10px rgba(0,0,0,.5);
	text-align: center;
}
.box .content h1{
	color: #fff;
	font-size: 30px;
	margin: 0 0 10px;
	padding: 0;

}
.box .content p{
 color: #fff;
}
.box svg,
.box svg rect{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	fill: transparent;
}
.box svg rect{
	stroke: #ff0000;
	stroke-width:4px;
	stroke-dasharray: 400;
	animation: animate 3s linear infinite;

}

@keyframes animate
{
	0%{
		stroke-dashoffset:800;
	}
	100%{
		stroke-dashoffset:0;
	}

}
</style>
<div class="box">
		<svg><rect></rect></svg>
		<div class="content">
			<h1>INTERESSADO NESTE PROJETO?</h1><br>
			<p>
				<b>Contate o Desenvolvedor:</b><br><br>
				Nome: <i>Elder Mosé Pontello</i><br>
				E-mail: <i>epontello@hotmail.com</i><br>
				Celular: <i>(31) 9 9743-9253</i><br>

			</p>
		</div>
	</div>