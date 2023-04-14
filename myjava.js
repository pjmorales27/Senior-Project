const dropdowns = document.querySelectorAll('.dropdown');

//loop through all dropdown elements
dropdowns.forEach(dropdown => {
  //get inner elements from each dropdown
  const select = dropdown.querySelector('.select');
  const caret = dropdown.querySelector('.caret');
  const menu = dropdown.querySelector('.menu');
  const options = dropdown.querySelectorAll('.menu li');
  const selected = dropdown.querySelector('.selected');
  /*
    we are using this method in order to have 
    multiple dropdown menus on the page work
  */

  //add click event to select element
  select.addEventListener('click', () => {

    //add the click select style to the select element
    select.classList.toggle('select-clicked');

    //add the rotate style to the caret element
    caret.classList.toggle('caret-rotate');

    //add the open styles to the menu element
    menu.classList.toggle('menu-open');
  });

  //loop through all option elements
  options.forEach(option => {
    //all a click event to the option element
    option.addEventListener('click', () => {
      //change selected inner text to the clicked option inner text 
      selected.innerText = option.innerText

      //add the click style to the select element
      selected.classList.remove('select-clicked');

      //add the rotate style to the caret element
      caret.classList.remove('caret-rotate');

      //add open style to the menu element
      menu.classList.remove('menu-open');

      //remove active class from all option elements
      options.forEach(options => {
        option.classList.remove('active');
      });

      //add active class to clicked option element
      option.classList.add('active');
    });
  });
});