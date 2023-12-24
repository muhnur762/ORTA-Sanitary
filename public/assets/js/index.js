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

// Switch language function

window.addEventListener("DOMContentLoaded", async () => {
  const userPreferredLanguage = localStorage.getItem("language") || "en";
  const langData = await fetchLanguageData(userPreferredLanguage);
  updateContent(langData);
});

function updateContent(langData) {
  document.querySelectorAll("[data-i18n]").forEach((element) => {
    const key = element.getAttribute("data-i18n");
    element.textContent = langData[key];
  });
}

function setLanguagePreference(lang) {
  localStorage.setItem("language", lang);
  location.reload();
}

async function fetchLanguageData(lang) {
  const response = await fetch(`assets/languages/${lang}.json`);
  return response.json();
}

async function changeLanguage(lang) {
  await setLanguagePreference(lang);

  const langData = await fetchLanguageData(lang);
  updateContent(langData);
}
