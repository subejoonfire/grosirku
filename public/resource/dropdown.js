const headerDropdownButton = $("#header-dropdown-button");
const headerContent = $("#dropdown-content");

// Fungsi untuk mengatur cookie
function setCookie(name, value, days) {
  const expires = new Date();
  expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
  document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
}

// Fungsi untuk mendapatkan nilai cookie
function getCookie(name) {
  const cookieName = `${name}=`;
  const cookies = document.cookie.split(';');
  for (let i = 0; i < cookies.length; i++) {
    let cookie = cookies[i].trim();
    if (cookie.indexOf(cookieName) === 0) {
      return cookie.substring(cookieName.length, cookie.length);
    }
  }
  return null;
}

// Ikon SVG untuk dropdown terbuka dan tertutup
const svgOpen = `<svg xmlns="http://www.w3.org/2000/svg" height="0.9em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>`;
const svgClosed = `<svg xmlns="http://www.w3.org/2000/svg"
height="0.9em"
 viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
 <path
   d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
</svg>`;

// Cek cookie saat halaman dimuat
$(document).ready(function () {
  const isDropdownOpen = getCookie('dropdownOpen');

  if (isDropdownOpen === 'true') {
    headerContent.show();
    headerDropdownButton.html(svgOpen);
    headerDropdownButton.addClass("dropdown-active");
  } else {
    headerContent.hide();
    headerDropdownButton.html(svgClosed);
    headerDropdownButton.removeClass("dropdown-active");
  }
});

// Event click pada tombol dropdown
headerDropdownButton.click(function (e) {
  e.stopPropagation(); // Menghentikan propagasi event untuk menghindari klik pada elemen <a> di dalam dropdown

  if (headerContent.is(":hidden")) {
    headerContent.slideDown("fast");
    headerDropdownButton.html(svgOpen);
    headerDropdownButton.addClass("dropdown-active");
    setCookie('dropdownOpen', 'true', 30); // Mengatur cookie agar dropdown terbuka
  } else {
    headerContent.slideUp("fast");
    headerDropdownButton.html(svgClosed);
    headerDropdownButton.removeClass("dropdown-active");
    setCookie('dropdownOpen', 'false', 30); // Mengatur cookie agar dropdown tertutup
  }
});
