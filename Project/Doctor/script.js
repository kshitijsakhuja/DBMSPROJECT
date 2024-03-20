  function toggleDropdown() {
    var dropdownContent = document.getElementById('myDropdown');
    dropdownContent.classList.toggle('dropdown-active');
  }

  var dropdowns = document.querySelectorAll('.dropdown');
  // Close dropdowns when clicked outside
  document.addEventListener('click', function(event) {
    dropdowns.forEach(function(dropdown) {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('-active');
        }
    });
});
