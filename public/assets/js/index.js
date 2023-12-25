function clickedButton(imgId, btn) {
  document.getElementById(imgId).src = btn.getAttribute("data-src");
}

function bindClick(imgId) {
  return function (btn) {
    btn.addEventListener("click", clickedButton.bind(null, imgId, btn));
  };
}

function setupClickHandlers(imgId, thumbId) {
  Array.from(document.querySelectorAll(`#${thumbId} > button`)).forEach(
    bindClick(imgId)
  );
}

document.addEventListener("DOMContentLoaded", function () {
  setupClickHandlers("img-primo", "thumb-primo");
  setupClickHandlers("img-savio", "thumb-savio");
  setupClickHandlers("img-serio", "thumb-serio");
  setupClickHandlers("img-senza", "thumb-senza");
});

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
