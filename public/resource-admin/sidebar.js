// Membuat objek untuk melacak status dropdown
var isDropdownVisible = {
  'kategori': false,
  'harga': false
};

function toggleDropdown(type) {
  // Toggle tampilan dropdown dengan animasi slide
  $('#' + type + '-content-dropdown').slideToggle("fast");

  // Toggle ikon antara "caret-down" dan "caret-up" berdasarkan status dropdown
  if (isDropdownVisible[type]) {
    $('#' + type + '-dropdown i').removeClass('fa-caret-up').addClass('fa-caret-down');
  } else {
    $('#' + type + '-dropdown i').removeClass('fa-caret-down').addClass('fa-caret-up');
  }

  // Update status dropdown
  isDropdownVisible[type] = !isDropdownVisible[type];
}
