<?//
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetTitle("Бмм-Битца");
//?>
    <script src="https://threejs.org/build/three.js"></script>



    <br/><br/><br/><br/><br/><br/>
<hr>


<script>
//
//    var scene = new THREE.Scene();
//    var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
//    var renderer = new THREE.WebGLRenderer();
//    renderer.setSize( window.innerWidth, window.innerHeight );
//    document.body.appendChild( renderer.domElement );
//    var geometry = new THREE.BoxGeometry( 10, 10, 10);
//    var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
//    var cube = new THREE.Mesh( geometry, material );
//    scene.add( cube );
//
//    camera.position.z = 25;
//
//    function render() {
//        requestAnimationFrame( render );
//        cube.rotation.x += 0.01;
//        cube.rotation.y += 0.01;
//        renderer.render( scene, camera );
//    }
//    render();



</script>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My first three.js app</title>
		<style>
			body { margin: 0; }
		</style>
	</head>
	<body>

		<script>
			const scene = new THREE.Scene();
			const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

			const renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );

			const geometry = new THREE.BoxGeometry();
			const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
			const cube = new THREE.Mesh( geometry, material );
			scene.add( cube );

			camera.position.z = 5;

			function animate() {
				requestAnimationFrame( animate );

				cube.rotation.x += 0.01;
				cube.rotation.y += 0.01;

				renderer.render( scene, camera );
			};

			animate();
		</script>
	</body>
</html>
<hr>
    <br/><br/><br/><br/><br/><br/>

<!---->
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>