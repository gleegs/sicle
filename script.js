import './assets/js/form.js'
import * as THREE from 'three'
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js'
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js'
import * as dat from 'lil-gui'

/**
 * Debug
 */
const gui = new dat.GUI()
gui.hide()

if(window.location.hash === '#debug')
    gui.show()

/**
 * Base
 */

// Canvas
const canvas = document.querySelector('canvas.webgl')

canvas.addEventListener('mousedown', (event) =>
{
    canvas.style.cursor = "grabbing"
})

canvas.addEventListener('mouseup', (event) =>
{
    canvas.style.cursor = "grab"
})

// Scene
const scene = new THREE.Scene()

/**
 * Models
 */
const logo = new THREE.Group()
scene.add(logo)

const gltfLoader = new GLTFLoader()

gltfLoader.load(
    'assets/models/logo.glb',
    (gltf) =>
    {
        const children = [...gltf.scene.children]

        for(const child of children)
        {
            child.material.color.set(0x272f38)
        }

        gltf.scene.scale.set(0.12, 0.12, 0.12)
        gltf.scene.rotateY(4)

        logo.add(gltf.scene)
    }
)

/**
 * Lights
 */
const ambientLight = new THREE.AmbientLight(0xffffff, 0.8)
scene.add(ambientLight)

const directionalLight = new THREE.DirectionalLight(0xffffff, 0.6)
directionalLight.castShadow = true
directionalLight.shadow.mapSize.set(1024, 1024)
directionalLight.shadow.camera.far = 15
directionalLight.shadow.camera.left = - 7
directionalLight.shadow.camera.top = 7
directionalLight.shadow.camera.right = 7
directionalLight.shadow.camera.bottom = - 7
directionalLight.position.set(5, 5, 5)
scene.add(directionalLight)

/**
 * Sizes
 */
const sizes = {
    width: 675,
    height: 800
}

window.addEventListener('resize', () =>
{
    // Update camera
    camera.aspect = sizes.width / sizes.height
    camera.updateProjectionMatrix()

    // Update renderer
    renderer.setSize(sizes.width, sizes.height)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
})

/**
 * Camera
 */
// Base camera
const cameraGroup = new THREE.Group()
scene.add(cameraGroup)

const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
camera.position.set(2, 0, 2)
cameraGroup.add(camera)

gui.add(cameraGroup.position, 'x').min(- 5).max(5).step(0.001)  

// Controls
const controls = new OrbitControls(camera, canvas)
controls.target.set(0, 0, 0)
controls.enableDamping = true
controls.enablePan = false
controls.dampingFactor = 0.03
controls.enableZoom = false

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer({
    canvas: canvas,
    alpha: true
})
renderer.shadowMap.enabled = true
renderer.shadowMap.type = THREE.PCFSoftShadowMap
renderer.setClearAlpha(0);
renderer.setSize(sizes.width, sizes.height)
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))

/**
 * Rotation of logo
 */
let rotationLogoValue = 0.7

/**
 * Konami code
 */
console.log('↑ ↑ ↓ ↓ ← → ← → B A')
// a key map of allowed keys
const allowedKeys = {
    37: 'left',
    38: 'up',
    39: 'right',
    40: 'down',
    65: 'a',
    66: 'b'
}

// the 'official' Konami Code sequence
const konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];

// a variable to remember the 'position' the user has reached so far.
let konamiCodePosition = 0;

// add keydown event listener
document.addEventListener('keydown', (event) => {
  // get the value of the key code from the key map
  const key = allowedKeys[event.keyCode];
  // get the value of the required key from the konami code
  let requiredKey = konamiCode[konamiCodePosition];

  // compare the key with the required key
  if (key == requiredKey) {

    // move to the next key in the konami code sequence
    konamiCodePosition++;

    // if the last key is reached, activate cheats
    if (konamiCodePosition == konamiCode.length) {
      activateCheats();
      konamiCodePosition = 0;
    }
  } else {
    konamiCodePosition = 0;
  }
});

function activateCheats() {
    rotationLogoValue = rotationLogoValue + 20
}

/**
 * Cursor
 */
const cursor = {}
cursor.x = 0
cursor.y = 0

window.addEventListener('mousemove', (event) =>
{
    cursor.x = event.clientX / window.innerWidth - 0.5
    cursor.y = event.clientY / window.innerHeight - 0.5
})

/**
 * Animate
 */
const clock = new THREE.Clock()
let previousTime = 0

const tick = () =>
{
    const elapsedTime = clock.getElapsedTime()
    const deltaTime = elapsedTime - previousTime
    previousTime = elapsedTime

    const parallaxX = cursor.x * 1
    const parallaxY = - cursor.y * 1
    logo.position.x += (- parallaxX - logo.position.x) * 1 * deltaTime
    logo.position.z += (parallaxX - logo.position.z) * 1 * deltaTime
    logo.position.y += (- parallaxY - logo.position.y) * 1 * deltaTime

    logo.rotation.y = - elapsedTime * rotationLogoValue

    // Update controls
    controls.update()

    // Render
    renderer.render(scene, camera)

    // Call tick again on the next frame
    window.requestAnimationFrame(tick)
}

tick()