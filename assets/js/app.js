//Выпадающий список стран

function toggleDropdown() {
  const dropdown = document.getElementById("dropdown");
  const chevron = document.getElementById("chevron_down");

  const isOpen = dropdown.style.display === "block" || dropdown.style.display === "flex";

  if (isOpen) {
    dropdown.style.display = "none";
    chevron.classList.remove('active');
  } else {
    dropdown.style.display = "flex";
    chevron.classList.add('active');
  }
}


//Выбор города
const cityLinks = document.querySelectorAll('.city');
const chooseCityBtn = document.getElementById('choose_city');
cityLinks.forEach(function(link) {
  link.addEventListener('click', function(e) {
    e.preventDefault(); 
    chooseCityBtn.textContent = this.textContent; 
    document.getElementById("dropdown").style.display = "none"; 
  });
});

//Закрытие списка

document.addEventListener('click', function(e) {
  const dropdown = document.getElementById("dropdown");
  const button = document.getElementById("choose_city");

  if (!button.contains(e.target) && !dropdown.contains(e.target)) {
    dropdown.style.display = "none";
  }
});

//Показ пороля

  document.getElementById('togglePassword').addEventListener('click', function () {
            let passwordField = document.getElementById('password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                this.textContent = 'Скрыть пароль';
            } else {
               passwordField.type = 'password';
             this.textContent = 'Показать пароль';
         }
    });
//Слайдер на главной странице
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider-container');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.style.cursor = 'grabbing';
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.style.cursor = 'grab';
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.style.cursor = 'grab';
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;
    });
});