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

  function enableForm() {
      var form = document.getElementById("updateProfileForm");
      var elements = form.elements;
      for (var i = 0; i < elements.length; i++) {
        elements[i].removeAttribute("readonly");
        elements[i].removeAttribute("disabled");
      }
    }


document.addEventListener("DOMContentLoaded", function() {
  // Get the radio buttons
  const lightThemeButton = document.getElementById('light-theme-button');
  const darkThemeButton = document.getElementById('dark-theme-button');

  // Function to be called when a radio button is clicked
  function radioButtonClicked(event) {
    // Get the value of the clicked radio button
    const selectedTheme = event.target.value;

    // Call your method here, passing the selected theme as an argument
    // For example, you can call a function to change the theme
    changeTheme(selectedTheme);
  }

  // Add event listener to the radio buttons
  lightThemeButton.addEventListener('change', radioButtonClicked);
  darkThemeButton.addEventListener('change', radioButtonClicked);

  // Example method to change the theme
  function changeTheme(theme) {
    // Your logic to change the theme based on the selected theme value
    var element = document.body;
    if(theme==="dark")
    {
      element.classList.add("dark-mode");
      element.classList.remove("light-mode");
      localStorage.setItem("theme", "dark");
    }
    else if(theme==="light")
    {
      element.classList.add("light-mode");
      element.classList.remove("dark-mode");
      localStorage.setItem("theme", "light");
    }
    
  }
});

function onload() {
    setModeClass();
}

// Function to set dark mode class based on localStorage value
function setModeClass() {
    const theme = localStorage.getItem('theme');
    const element = document.body;
    if (theme === 'dark') {
        element.classList.add('dark-mode');
    } else if(theme==='light'||theme=== null)
    {
        element.classList.remove('dark-mode');
        element.classList.add('light-mode'); // Add default light-mode class
    }
}

function settingsonload() {
    const theme = localStorage.getItem('theme');
    const lightThemeButton = document.getElementById('light-theme-button');
    const darkThemeButton = document.getElementById('dark-theme-button');

    if (theme === 'dark') {
        darkThemeButton.checked = true;
    } else {
        lightThemeButton.checked = true; // Assuming default is light theme
    }
    onload();
}

