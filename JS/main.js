const toggleBtn = document.querySelector('.navbar__toggleBtn');
const menu = document.querySelector('.navbar__menu');
const icons = document.querySelector('.navbar__icons');

toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('active');
    icons.classList.toggle('active');
});

function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
  }

  var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
  })
  
  function discordButton() {
    location.replace("https://discord.gg/4TGdXfrc3F")
  }