try {
  const buttonProducten = document.querySelector(".button-producten");
  const desktopDropDown = document.querySelector(".desktop-dropdown");
  const LinksHeader = document.querySelectorAll("header a.remove-link");
  const desktopDropDownOverlay = document.querySelector(
    ".desktop-dropdown-overlay"
  );

  const addDropdown = () => {
    buttonProducten.classList.add("active");
    desktopDropDown.classList.add("open");
    desktopDropDownOverlay.classList.add("open");
  };
  const removeDropdown = () => {
    buttonProducten.classList.remove("active");
    desktopDropDown.classList.remove("open");
    desktopDropDownOverlay.classList.remove("open");
  };

  buttonProducten.addEventListener("mouseenter", () => {
    addDropdown();
  });

  desktopDropDownOverlay.addEventListener("mouseenter", () => {
    removeDropdown();
  });

  for (let i = 0; i < LinksHeader.length; i++) {
    LinksHeader[i].addEventListener("mouseenter", () => {
      removeDropdown();
    });
  }
} catch (error) {}

// try {
//   const observer = new IntersectionObserver((entries) => {
//     entries.forEach((entry) => {
//       if (entry.isIntersecting) {
//         entry.target.classList.add("show");
//       }
//     });
//   });

//   const hiddenElements = document.querySelectorAll(".section-image-fade-in");
//   hiddenElements.forEach((el) => observer.observe(el));
// } catch (error) {}

try {
  const resetButtonFilter = document.querySelector(".wpc-filter-chip-name");

  resetButtonFilter.innerHTML = "Reset alles";
} catch (error) {}

try {
  const buttonHamburger = document.querySelector(".hamburger-button");
  const mobileNavbar = document.querySelector(".mobile-navbar");

  buttonHamburger.addEventListener("click", () => {
    if (!mobileNavbar.classList.contains("open")) {
      buttonHamburger.innerHTML = "Sluiten";
    } else {
      buttonHamburger.innerHTML = "Menu";
    }

    mobileNavbar.classList.toggle("open");
  });
} catch (error) {}

try {
  function inittab(tabWrapper, activeTab = 1) {
    const tabBtns = tabWrapper.querySelectorAll(".tab-btn");
    const underline = tabWrapper.querySelector(".underline");
    const tabContents = tabWrapper.querySelectorAll(".tab-content");

    activeTab = activeTab - 1;
    tabBtns[activeTab].classList.add("active");
    underline.style.width = `${tabBtns[activeTab].offsetWidth}px`;
    underline.style.left = `${tabBtns[activeTab].offsetLeft}px`;
    tabContents.forEach((content) => {
      content.style.transform = `translateX(-${activeTab * 100}%)`;
    });

    tabBtns.forEach((btn, index) => {
      btn.addEventListener("click", () => {
        tabBtns.forEach((btn) => btn.classList.remove("active"));
        btn.classList.add("active");
        underline.style.width = `${btn.offsetWidth}px`;
        underline.style.left = `${btn.offsetLeft}px`;
        tabContents.forEach((content) => {
          content.style.transform = `translateX(-${index * 100}%)`;
        });
      });

      //same effect as on click when button in focus
      btn.addEventListener("focus", () => {
        tabBtns.forEach((btn) => btn.classList.remove("active"));
        btn.classList.add("active");
        underline.style.width = `${btn.offsetWidth}px`;
        underline.style.left = `${btn.offsetLeft}px`;
        tabContents.forEach((content) => {
          content.style.transform = `translateX(-${index * 100}%)`;
        });
      });
    });
  }

  const tabWrappers = document.querySelectorAll(".tab-wrapper");
  tabWrappers.forEach((tabWrapper, index) => inittab(tabWrapper));
} catch (error) {}

try {
  window.addEventListener("scroll", () => {
    const scrollpos = window.scrollY;
    const logo = document.querySelector(".logo-svg");
    const header = document.querySelector(".header-white");
    const desktopDropDown = document.querySelector(".desktop-dropdown");

    if (scrollpos > 50) {
      if (!header.classList.contains("active")) {
        logo.classList.add("active");
        header.classList.add("active");
        desktopDropDown.style.top = "80px";
      }
    } else if (scrollpos < 25) {
      logo.classList.remove("active");
      header.classList.remove("active");
      desktopDropDown.style.top = "110px";
    }
  });
  window.addEventListener("load", () => {
    const scrollpos = window.scrollY;
    const logo = document.querySelector(".logo-svg");
    const header = document.querySelector(".header-white");
    const desktopDropDown = document.querySelector(".desktop-dropdown");

    if (scrollpos > 50) {
      if (!header.classList.contains("active")) {
        logo.classList.add("active");
        header.classList.add("active");
        desktopDropDown.style.top = "80px";
      }
    } else if (scrollpos < 20) {
      logo.classList.remove("active");
      header.classList.remove("active");
      desktopDropDown.style.top = "110px";
    }
  });
} catch (error) {}

try {
  window.addEventListener("load", function () {
    var cardContainer = document.querySelector(".card-container");
    var cardsPerRow = 3;
    var cardCount = cardContainer.children.length;
    var rowCount = Math.ceil(cardCount / cardsPerRow);

    // Loop through each row of cards and add or remove the no-border class
    for (var i = 0; i < rowCount; i++) {
      var startIndex = i * cardsPerRow;
      var endIndex = startIndex + cardsPerRow;
      var rowCards = Array.from(cardContainer.children).slice(
        startIndex,
        endIndex
      );

      if (i === rowCount - 1) {
        rowCards.forEach(function (card) {
          card.classList.remove("border-b-[1px]");
          card.classList.remove("mb-4");
          card.classList.remove("pb-4");
        });
      }
    }
  });
} catch (error) {}

try {
  /**********************/
  /**** accordion ***/
  /**********************/
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) {}

try {
  // make a function that open a filter when button is clicked
  // and make a close button that closes the filter
  const filterButton = document.querySelector(".filter-mobile-open");
  const filterContainer = document.querySelector(".filter-mobile");
  const filterCloseButton = document.querySelector(".filter-mobile-close");

  filterButton.addEventListener("click", () => {
    filterContainer.classList.add("active");
  });

  filterCloseButton.addEventListener("click", () => {
    filterContainer.classList.remove("active");
  });
} catch (error) {}

try {
  // // Get all the elements with the class 'hover-element'
  // const hoverElements = document.querySelectorAll(".hover-element");

  // // Loop through each element and add event listeners for mouseover and mouseout
  // hoverElements.forEach((element) => {
  //   const targetId = element.getAttribute("data-target");
  //   const targetElement = document.querySelector(targetId);

  //   element.addEventListener("mouseover", () => {
  //     // Add the active class when hovering over the element
  //     element.classList.add("active");
  //     // Show the target element
  //     targetElement.classList.remove("remove");
  //   });

  // element.addEventListener("mouseout", () => {
  //   // Remove the active class when no longer hovering over the element
  //   element.classList.remove("active");
  //   // Hide the target element
  //   targetElement.classList.add("remove");
  // });

  const hoverElements = document.querySelectorAll(".hover-element");
  const targetIdClass = document.querySelectorAll(".all-cat");

  hoverElements.forEach((element) => {
    const targetId = element.getAttribute("data-target");
    const targetElement = document.querySelector(targetId);

    element.addEventListener("mouseover", () => {
      // Remove active class from all hoverElements
      for (let i = 0; i < targetIdClass.length; i++) {
        targetIdClass[i].classList.add("remove");
      }
      hoverElements.forEach((el) => {
        el.classList.remove("active");
      });
      // Add active class to current hoverElement
      element.classList.add("active");
      // Show targetElement
      targetElement.classList.remove("remove");
    });

    // element.addEventListener("mouseout", () => {
    //   // Hide targetElement
    //   targetElement.classList.add("remove");
    // });
  });
  // });
} catch (e) {}
