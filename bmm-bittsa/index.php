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

var loaderKitchen1Path1Door27 = new GLTFLoader();

loaderKitchen1Path1Door27.load('models/door27.gltf', function(meshK1P1Door27){
    meshK1P1Door27.scene;

    //----------------bbox----------

    var door27Bbox = new THREE.Box3();
    door27Bbox.setFromObject(meshK1P1Door27.scene);
    var bboxDoor27Center = door27Bbox.getCenter().clone();
    bboxDoor27Center.multiplyScalar(-1);
    meshK1P1Door27.scene.traverse(function(child){
        child.castShadow = true;
        child.receiveShadow = true;
        if (child instanceof THREE.Mesh){
            child.geometry.translate(bboxDoor27Center.x, bboxDoor27Center.y, bboxDoor27Center.z);
        }
    });

    //------------------------------------------------
    cubeAs[27].add(meshK1P1Door27.scene);
    meshK1P1Door27.scene.position.set((-door[27].cubeAs27X),0,(-door[27].cubeAs27Z));//-1.36,0.471, 2.435465
    meshK1P1Door27.scene.rotation.y = Math.PI;

});

var raycaster = new THREE.Raycaster();
var projector = new Projector();
var directionVector = new THREE.Vector3();
function getIntersects( x, y ) {
    x = ( x / window.innerWidth ) * 2 - 1;
    y = - ( y  / window.innerHeight ) * 2 + 1;
    var z = 0.5;
    directionVector.set( x, y, z );
    projector.unprojectVector(directionVector, camera);
    directionVector.sub(camera.position);
    directionVector.normalize();
    raycaster.set(camera.position, directionVector);
    var rayCube = raycaster.intersectObjects( scene.children, true );
    if (rayCube.length) {
        var target1 = rayCube[0].object;
        if (target1.id === door[27].id){
            return rayCube;
        }
    }
}


</script>

<hr>
    <br/><br/><br/><br/><br/><br/>

<!---->
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>