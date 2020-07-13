//Script uses Matter as the physics library, and P5 as the renderer, instead of using Matter's built in renderer

//Global Variables

//Module aliases
var Engine = Matter.Engine,
  World = Matter.World,
  Bodies = Matter.Bodies;

var engine;
var world;
//var boxes = [];
var circles = [];

var ground;
var left;
var right;

function setup() {//things we do before the game is made
  createCanvas(400, 800); //Window size

  engine = Engine.create(); //initializing the Engine to var engine
  world = engine.world; //initializing the world to var world

  Engine.run(engine); //Starts engine, Refreshes page at 60 fps

  var options = { //properties assigned to objects
    isStatic: true //makes the object unmoveable
  }

  ground = Bodies.rectangle(200, height + 40, width, 100, options); //sets properties for the ground
  left = Bodies.rectangle(-190, 0, width, 1600, options);
  right = Bodies.rectangle(590, 0, width, 1600, options);

  //This makes the objects real, but not yet visible
  World.add(world, ground); //enters the world and ground object into The World
  World.add(world, left);
  World.add(world, right);
}

function mousePressed() { //Do this when mouse is pressed(control)
  circles.push(new Circle(mouseX, mouseY, 10));
}

function draw() { //actually makes the game
  background(51) //window color

  for(var i = 0;i < circles.length; i++) { //sets visible to all new boxes
    circles[i].show();
  }

  //These are for the gorund, left and right
  noStroke(255);
  fill(170);
  rectMode(CENTER);

  //Draws the shapes
  rect(ground.position.x, ground.position.y, width, 100);
  rect(left.position.x, left.position.y, width, 1600);
  rect(right.position.x, right.position.y, width, 1600);
}
