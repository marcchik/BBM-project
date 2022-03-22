import { loadBirds } from 'http://startslam.site/Load_3D/src/World/components/birds/birds.js';
import { createCamera } from 'http://startslam.site/Load_3D/src/World/components/camera.js';
import { createLights } from 'http://startslam.site/Load_3D/src/World/components/lights.js';
import { createScene } from 'http://startslam.site/Load_3D/src/World/components/scene.js';

import { createControls } from 'http://startslam.site/Load_3D/src/World/systems/controls.js';
import { createRenderer } from 'http://startslam.site/Load_3D/src/World/systems/renderer.js';
import { Resizer } from 'http://startslam.site/Load_3D/src/World/systems/Resizer.js';
import { Loop } from 'http://startslam.site/Load_3D/src/World/systems/Loop.js';

let camera;
let controls;
let renderer;
let scene;
let loop;

class World {
  constructor(container) {
    camera = createCamera();
    renderer = createRenderer();
    scene = createScene();
    loop = new Loop(camera, scene, renderer);
    container.append(renderer.domElement);
    controls = createControls(camera, renderer.domElement);

    const { ambientLight, mainLight } = createLights();

    loop.updatables.push(controls);
    scene.add(ambientLight, mainLight);

    const resizer = new Resizer(container, camera, renderer);
  }

  async init() {
    const { parrot, flamingo, stork } = await loadBirds();

    // move the target to the center of the front bird
    controls.target.copy(parrot.position);

    scene.add(parrot, flamingo, stork);
  }

  render() {
    renderer.render(scene, camera);
  }

  start() {
    loop.start();
  }

  stop() {
    loop.stop();
  }
}

export { World };
