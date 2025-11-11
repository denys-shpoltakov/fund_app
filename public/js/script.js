// здесь скрипты которые связаны с элементами на странице

const toggle = document.getElementById('theme-toggle');

// При загрузке страницы проверяем сохранённую тему
if (localStorage.getItem('theme') === 'dark') {
  document.body.classList.add('dark');
  toggle.checked = true;
}

toggle.addEventListener('change', () => {
  if (toggle.checked) {
    document.body.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.body.classList.remove('dark');
    localStorage.setItem('theme', 'light');
  }
});