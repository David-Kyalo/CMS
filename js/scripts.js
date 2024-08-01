// Select all elements with the class 'switcher' and convert the NodeList to an array
const switchers = [...document.querySelectorAll('.switcher')]

// Iterate over each 'switcher' element
switchers.forEach(item => {
  // Add a click event listener to each 'switcher' element
  item.addEventListener('click', function() {
    // For each 'switcher', remove the 'is-active' class from the parent element
    switchers.forEach(item => item.parentElement.classList.remove('is-active'))
    // Add the 'is-active' class to the parent element of the clicked 'switcher'
    this.parentElement.classList.add('is-active')
  })
})


