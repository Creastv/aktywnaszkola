
// HEader fixed

const togglerNav = document.querySelector(".js-navbar__toggler");
const nav = document.querySelector(".js-navbar__navigation");
let navFlag = false;

togglerNav.addEventListener("click", () => {
  if (navFlag == false) {
    nav.classList.add("active");
    togglerNav.classList.add("active");
    // document.querySelector("body").style.overflow = "hidden";
    navFlag = true;
  } else {
    nav.classList.remove("active");
    togglerNav.classList.remove("active");
    // document.querySelector("body").style.overflow = "inherit";
    navFlag = false;
  }
});

// sticy nabvbar
// const navbar = document.querySelector(".js-navbar");
// document.addEventListener("scroll", () => {
//   var st = window.pageYOffset || document.documentElement.scrollTop;
//   if (window.pageYOffset) {
//     navbar.classList.add("active");
//     document.querySelector("#header").style.paddingTop = navbar.clientHeight + "px";
//   } else {
//     navbar.classList.remove("active");
//     document.querySelector("#header").style.paddingTop = "0";
//   }
// });

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });

setTimeout(
 function() {
    //get the images
    let images = document.querySelectorAll("img"); 
     
    //loop through all images
    for (let i = 0; i < images.length; i++) {
        //add alt text if missing (but title is present)
        if (!images[i].alt) {
            images[i].alt = 'test';
		 images[i].setAttribute('alt', 'Aktywna Szkoła');
        }
    }
}, 1000);





// if (window.innerWidth < 768) {
// const cartButton = document.querySelector(".entry-summary__wrap form.cart");
// if(cartButton !== null){

//     const elSpace = document.querySelector(".product-attributes");
//     const offsetButton = cartButton.offsetTop;
//     document.addEventListener("scroll", () => {
//       if (window.pageYOffset >= offsetButton + 100) {
//         cartButton.classList.add("active");
//         elSpace.style.marginBottom = cartButton.clientHeight + 30 + "px";
//       } else {
//         cartButton.classList.remove("active");
//         elSpace.style.marginBottom = "30px";
//       }
//     });
//   }
// }