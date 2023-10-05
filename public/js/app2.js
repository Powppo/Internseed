function myFunction() {
    const x = document.getElementById("myTopnav");
    if (x.className === "topmenu") {
      x.className += " responsive";
    } else {
      x.className = "topmenu";
    }
  }