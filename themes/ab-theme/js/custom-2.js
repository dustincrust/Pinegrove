window.addEventListener("DOMContentLoaded", () => {

  const isContactPage = document.querySelector('body').classList.contains('page-id-43');

  if (isContactPage) {


    const wpForms = document.querySelectorAll('.wpforms-container .wpforms-field');

    if (wpForms) {

      wpForms.forEach(field => {
        console.log(field)
        if (field.classList.contains('wpforms-field-select')) {
          field.querySelector('select').addEventListener('change', (e) => {

            e.currentTarget.classList.contains('wpforms-valid') ? e.currentTarget.classList.add('wpforms-valid') : null;

          })
        }

      });
    }
  }
  if (document.querySelector('.home-testimonials-swiper')) {
    const swiper = new Swiper('.home-testimonials-swiper', {
      // Optional parameters
      autoplay: {
        delay: 7000,
      },
      // delay: 8000,
      speed: 900,
      loop: true,
      pauseOnMouseEnter: true,
      centeredSlides: true,
      slidesPerView: 1.5, // Total width for 1 slide + 0.006 for left and right extra visibility
      centeredSlides: true, // Center the current active slide
      spaceBetween: 24, // No additional space between slides
      initialSlide: 2,
      // If we need pagination
      autoHeight: false,

      // Navigation arrows
      navigation: {
        nextEl: '.home-testimonials-swiper-button-next',
        prevEl: '.home-testimonials-swiper-button-prev',
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          autoHeight: true,
        },
        // when window width is >= 480px
        768: {
          slidesPerView: 1,
          autoHeight: false,
        },
        // when window width is >= 640px
        991: {
          slidesPerView: 1.2,
          spaceBetween: 24,

        },
        1199: {
          slidesPerView: 1.5,
          spaceBetween: 24
        }
      }
      // And if we need scrollbar

    });
    applyGradeWidth();
  }


})


// Function to calculate the width based on the grade
function calculateWidth(grade) {
  return (grade / 5) * 100;
}

// Function to set the inline max-width for elements with 'data-grade'
function applyGradeWidth() {
  const gradeElements = document.querySelectorAll('[data-grade]'); // Select all elements with data-grade attribute
  if (gradeElements) {
    gradeElements.forEach((element) => {
      const grade = parseFloat(element.getAttribute('data-grade')); // Get the grade value
      const width = calculateWidth(grade); // Calculate the width in percentage
      element.classList.add('show');
      element.style.width = `${width}%`; // Set the inline max-width style
    });
  }

}