const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

const customerMenuItem = allSideMenu[1]; 
allSideMenu.forEach(item => {
    item.parentElement.classList.remove('active'); 
});
customerMenuItem.parentElement.classList.add('active'); 

allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', function () {
        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        });
        li.classList.add('active');
    });
});

const menuBar = document.querySelector('#content nav .menu img');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
});

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button img');
const searchForm = document.querySelector('#content nav form');