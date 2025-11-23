const countries = [
  { name: "Afghanistan", code: "+93" },
  { name: "Albania", code: "+355" },
  { name: "Algeria", code: "+213" },
  { name: "Andorra", code: "+376" },
  { name: "Angola", code: "+244" },
  { name: "Argentina", code: "+54" },
  { name: "Armenia", code: "+374" },
  { name: "Australia", code: "+61" },
  { name: "Austria", code: "+43" },
  { name: "Bahamas", code: "+1-242" },
  { name: "Bahrain", code: "+973" },
  { name: "Bangladesh", code: "+880" },
  { name: "Belgium", code: "+32" },
  { name: "Benin", code: "+229" },
  { name: "Botswana", code: "+267" },
  { name: "Brazil", code: "+55" },
  { name: "Bulgaria", code: "+359" },
  { name: "Cameroon", code: "+237" },
  { name: "Canada", code: "+1" },
  { name: "Chile", code: "+56" },
  { name: "China", code: "+86" },
  { name: "Colombia", code: "+57" },
  { name: "Congo (DRC)", code: "+243" },
  { name: "Congo (Republic)", code: "+242" },
  
  // 🔥 African Countries
  { name: "Egypt", code: "+20" },
  { name: "Ethiopia", code: "+251" },
  { name: "Ghana", code: "+233" },
  { name: "Kenya", code: "+254" },
  { name: "Liberia", code: "+231" },
  { name: "Morocco", code: "+212" },
  { name: "Nigeria", code: "+234" },
  { name: "Rwanda", code: "+250" },
  { name: "Senegal", code: "+221" },
  { name: "South Africa", code: "+27" },
  { name: "Tanzania", code: "+255" },
  { name: "Uganda", code: "+256" },
  { name: "Zambia", code: "+260" },
  { name: "Zimbabwe", code: "+263" },

  // 🌍 Add more (FULL LIST AVAILABLE on request)
];

const menu = document.getElementById("phoneFlagMenu");

// CREATE DROPDOWN BUTTONS
countries.forEach(c => {
  const btn = document.createElement("button");
  btn.type = "button";
  btn.className = "country-option";
  btn.dataset.code = c.code;
  btn.textContent = `${c.name} (${c.code})`;
  menu.appendChild(btn);
});

// OPEN/CLOSE MENU
document.getElementById("phoneFlagButton").addEventListener("click", () => {
  menu.classList.toggle("show");
});

// CLICK OPTION
menu.addEventListener("click", function (e) {
  if (e.target.classList.contains("country-option")) {
    document.getElementById("selectedCode").textContent = e.target.dataset.code;
    menu.classList.remove("show");
  }
});

