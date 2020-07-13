function Circle(x, y, radius) {
  var options = {
    friction: 0.0,
    restitution: 0.9 //bouciness
  }

  this.body = Bodies.circle(x, y, radius, options);
  this.radius = radius;

  World.add(world, this.body);

  this.show = function() {
    var pos = this.body.position;
    var angle = this.body.angle;

    push();
    translate(pos.x, pos.y);
    rotate(angle);
    ellipseMode(CENTER);
    strokeWeight(1);
    stroke(255);
    fill(127);
    //circle(0, 0, this.radius);
    ellipse(0, 0, this.radius * 2);
    pop();
  }
}
