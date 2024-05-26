// Show Menu
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu')
})

navClose.addEventListener('click', () => {
    navMenu.classList.remove('show-menu')
})

//Search
const search = document.getElementById('search'),
    searchBtn = document.getElementById('search-btn'),
    searchClose = document.getElementById('search-close')

searchBtn.addEventListener('click', () => {
    search.classList.add('show-search')
})

searchClose.addEventListener('click', () => {
    search.classList.remove('show-search')
})

const displayTime = document.querySelector(".display-time");
// Time
function showTime() {
  let time = new Date();
  displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
  setTimeout(showTime, 1000);
}

showTime();

// Date
function updateDate() {
  let today = new Date();

  // return number
  let dayName = today.getDay(),
    dayNum = today.getDate(),
    month = today.getMonth(),
    year = today.getFullYear();

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const dayWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  // value -> ID of the html element
  const IDCollection = ["day", "daynum", "month", "year"];
  // return value array with number as a index
  const val = [dayWeek[dayName], dayNum, months[month], year];
  for (let i = 0; i < IDCollection.length; i++) {
    document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
  }
}

updateDate();

document.addEventListener('DOMContentLoaded', function() {
  AOS.init({
    duration: 1000, // Animation duration in milliseconds
    easing: 'ease-in-out', // Easing function for the animation
    once: true, // Whether animation should happen only once - while scrolling down
    mirror: false, // Whether elements should animate out while scrolling past them
  });
});

const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

// COMMENT SECTION
function toggleComments() {
  var commentsContent = document.getElementsByClassName("comments-content");
  for (var i = 0; i < commentsContent.length; i++) {
      if (commentsContent[i].style.display === "none" || commentsContent[i].style.display === "") {
          commentsContent[i].style.display = "block";
      } else {
          commentsContent[i].style.display = "none";
      }
  }
}

document.getElementById('logout-btn')?.addEventListener('click', function(event) {
  event.preventDefault();
  
  // Perform the logout operation via an AJAX request or another method
  // For example, making an AJAX call to the server to log out

  // Simulate the AJAX call with a timeout
  setTimeout(function() {
      // Assuming the logout was successful
      document.querySelector('.greeting').style.display = 'none';
      document.getElementById('logout-btn').style.display = 'none';
      const loginIcon = document.createElement('a');
      loginIcon.href = 'login.php';
      loginIcon.innerHTML = '<ion-icon name="person-circle-outline" class="nav_login" id="login-btn"></ion-icon>';
      document.querySelector('nav').appendChild(loginIcon);
  }, 1000); // Adjust the timeout duration as needed
});