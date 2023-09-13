function clickedButton(btn, event) {
  document.getElementById("img-primo").src = btn.getAttribute("data-src");
}
function clickedButton2(btn, event) {
  document.getElementById("img-savio").src = btn.getAttribute("data-src");
}
function clickedButton3(btn, event) {
  document.getElementById("img-serio").src = btn.getAttribute("data-src");
}
function clickedButton4(btn, event) {
  document.getElementById("img-senza").src = btn.getAttribute("data-src");
}

function bindClick(btn) {
  btn.addEventListener("click", clickedButton.bind(null, btn));
}
function bindClick2(btn) {
  btn.addEventListener("click", clickedButton2.bind(null, btn));
}
function bindClick3(btn) {
  btn.addEventListener("click", clickedButton3.bind(null, btn));
}
function bindClick4(btn) {
  btn.addEventListener("click", clickedButton4.bind(null, btn));
}

// Setup click handler(s) when content is loaded
document.addEventListener("DOMContentLoaded", function () {
  Array.from(
    document.querySelectorAll("#thumb-primo > button").forEach(bindClick),
    document.querySelectorAll("#thumb-savio > button").forEach(bindClick2),
    document.querySelectorAll("#thumb-serio > button").forEach(bindClick3),
    document.querySelectorAll("#thumb-senza > button").forEach(bindClick4)
  );
});
