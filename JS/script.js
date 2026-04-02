
  const Sidebar = document.querySelector('.sidebar');
  const Hamburger = document.querySelector('.hamburger');
  const CloseSidebar = document.querySelector('.closeSidebar');

  Hamburger.addEventListener('click', function() {
    Sidebar.classList.add('active');
    Hamburger.classList.add('hidden');
  });

  CloseSidebar.addEventListener('click', function() {
    Sidebar.classList.remove('active'); 
    Hamburger.classList.remove('hidden');
  });
