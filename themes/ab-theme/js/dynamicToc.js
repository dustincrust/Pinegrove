document.addEventListener('DOMContentLoaded', e => {

    createNavigationList();
})
  

function createNavigationList() {
  const navRoot = document.querySelector('.post-toc-nav--wrapper');
  const contentTitles = document.querySelectorAll('.post-content .poppins-block-smaller-heading, .post-content h2');
  if(contentTitles.length == 0){
    const error = document.createElement('span');
    error.innerText = "There is no proper headings to create table of content, please recheck post content and set headings";
    navRoot.appendChild(error);
    return;
  }
  generateNav(navRoot, contentTitles)


}

function generateNav(root, items) {


    const navList = document.createElement('ul');
    navList.classList.add('post-toc-nav');
  

  items.forEach((item, key) => {
    const title = item.innerText;
    const titleID = createLinkID(title);
    const li = document.createElement('li');
    const link = document.createElement('a');

    item.setAttribute("id", titleID);
    link.href = '#' + titleID;
    link.classList.add('post-toc-nav-item__link')
    if (key == 1) {
      link.classList.add('active')
    }

    link.innerText = title;
    li.classList.add('post-toc-nav-item')
    li.appendChild(link);

    link.addEventListener('click', (e) => {
      e.preventDefault();
      smoothScroll(e.currentTarget.getAttribute('href'))
    })
    navList.appendChild(li)

  });


  root.appendChild(navList);

  const getNavList = document.querySelectorAll('.post-toc-nav--wrapper a');
  const getTitles = document.querySelectorAll('.post-content .poppins-block-smaller-heading, .post-content h2');
  setActiveLabel(getNavList, getTitles)

}

function createLinkID(title) {
  const newTitle = title.replace(/[^a-zA-Z]+/g, '-');
  return newTitle;
}

function smoothScroll(target) {

  const element = document.querySelector(target);
  if (element) {
    const headerOffset = 100;
    const elementPosition = element.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth"
    });

  }
}

function setActiveLabel(navList, idList) {

  window.addEventListener('scroll', (e) => {

    idList.forEach((el, i) => {
      //let getHrefElement = document.querySelector(el.getAttribute("href"));
      if (window.scrollY > 400) {
        if (isInViewport(el)) {
          navList.forEach((navItem, i) => {

            if (el.getAttribute('id') === navItem.getAttribute("href").replace('#', '')) {
              properActiveClass(navList, navItem)
            }
          })
        }
      } else {
        properActiveClass(navList, navList[0])
      }

    })
  })
}
function properActiveClass(list, active) {
  list.forEach((el, i) => {
    if (el === active) {
      el.classList.contains('active') ? null : el.classList.add('active');
    } else {
      el.classList.remove('active')
    }

  });
}
var isInViewport = function (elem) {
  var bounding = elem.getBoundingClientRect();
  if (bounding.top <= 200 && bounding.top > -1) {
    return true
  }
}