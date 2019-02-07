function opennav(){
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementByClass("box-shadow-menu").style.display = "none";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closenav(){
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "#fff";
}
