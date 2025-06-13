(() => {
  const openNav = document.querySelector(".open-menu"),
        closeNav = document.querySelector(".close-menu"),
        navMenu = document.querySelector(".nav-link-container"),
        background = document.querySelector(".background");

  function openMenu() {
    navMenu.classList.add("open");
    background.classList.add("active");
  }

  function closeMenu() {
    navMenu.classList.remove("open");
    background.classList.remove("active");
  }

  openNav.addEventListener("click", openMenu);
  closeNav.addEventListener("click", closeMenu);
  background.addEventListener("click", closeMenu);

  document.querySelectorAll(".nav-links a").forEach(link => {
    link.addEventListener("click", () => {
      if (window.innerWidth <= 992) {
        closeMenu();
      }
    });
  });

  // Desktop mega tab logic
  const tabs = document.querySelectorAll(".titles li");
  const contents = document.querySelectorAll(".mega-content");

  tabs.forEach(tab => {
    tab.addEventListener("mouseenter", function () {
      tabs.forEach(el => el.classList.remove("active"));
      contents.forEach(el => el.classList.remove("active"));
      this.classList.add("active");
      const target = this.getAttribute("data-id");
      document.getElementById(target)?.classList.add("active");
    });
  });

  // Set first tab and content active by default
  if (tabs.length && contents.length) {
    tabs[0].classList.add("active");
    const defaultId = tabs[0].getAttribute("data-id");
    document.getElementById(defaultId)?.classList.add("active");
  }

  // Mobile accordion logic
  document.querySelectorAll(".mobile-dropdown .dropdown-title").forEach(title => {
    title.addEventListener("click", function () {
      const parent = this.parentElement;
      const allDropdowns = document.querySelectorAll(".mobile-dropdown");

      allDropdowns.forEach(drop => {
        if (drop !== parent) {
          drop.classList.remove("open");
        }
      });

      parent.classList.toggle("open");
    });
  });

  // Desktop mega menu hover behavior – only one open at a time
  const hoverDelay = 100;
  let megaTimeout;
  const megaItems = document.querySelectorAll('.has-mega');

  megaItems.forEach(item => {
    const megaMenu = item.querySelector('.mega-menu');

item.addEventListener('mouseenter', () => {
  clearTimeout(megaTimeout);

  // Close other mega menus
  megaItems.forEach(other => {
    if (other !== item) {
      const otherMenu = other.querySelector('.mega-menu');
      if (otherMenu) {
        otherMenu.style.display = 'none';
        otherMenu.style.opacity = '0';
        otherMenu.style.visibility = 'hidden';
      }
    }
  });

  // Show current menu
  if (megaMenu) {
    megaMenu.style.display = 'flex';
    megaMenu.style.opacity = '1';
    megaMenu.style.visibility = 'visible';

    // Always set the first tab and its content active
    const tabs = megaMenu.querySelectorAll(".titles li");
    const contents = megaMenu.querySelectorAll(".mega-content");

    if (tabs.length && contents.length) {
      tabs.forEach(el => el.classList.remove("active"));
      contents.forEach(el => el.classList.remove("active"));

      tabs[0].classList.add("active");
      const target = tabs[0].getAttribute("data-id");
      megaMenu.querySelector(`#${target}`)?.classList.add("active");
    }
  }
});

    item.addEventListener('mouseleave', () => {
      megaTimeout = setTimeout(() => {
        if (megaMenu) {
          megaMenu.style.display = 'none';
          megaMenu.style.opacity = '0';
          megaMenu.style.visibility = 'hidden';
        }
      }, hoverDelay);
    });

    if (megaMenu) {
      megaMenu.addEventListener('mouseenter', () => {
        clearTimeout(megaTimeout);
      });

      megaMenu.addEventListener('mouseleave', () => {
        megaTimeout = setTimeout(() => {
          megaMenu.style.display = 'none';
          megaMenu.style.opacity = '0';
          megaMenu.style.visibility = 'hidden';
        }, hoverDelay);
      });
    }
  });
})();

// ========================Banner Slider===============================

 const swiper = new Swiper('.banner-slider', {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,      
    speed: 600,  
       autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },          
  pagination: {
  el: '.swiper-pagination',
  clickable: true,
  renderBullet: function (index, className) {
    if (index < 3) { // only allow 3 bullets
      return '<span class="' + className + '"></span>';
    }
    return ''; // don't render more than 3 bullets
  }
},
    breakpoints: {
      0: {
        slidesPerView: 1.4,
        spaceBetween: 10,
      },
      576: {
        slidesPerView: 1.5,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });

  // ================================Tabs====================================
  function openCategory(button, tabId, group) {
    const tabContents = group.querySelectorAll('.category-tabcontent');
    const tabLinks = group.querySelectorAll('.category-tablinks');

    tabContents.forEach(content => content.style.display = 'none');
    tabLinks.forEach(link => link.classList.remove('active'));

    group.querySelector(`#${tabId}`).style.display = 'block';
    button.classList.add('active');
  }

  // Initialize each tab group
  document.querySelectorAll('.tab-group').forEach(group => {
    const tabButtons = group.querySelectorAll('.category-tablinks');

    tabButtons.forEach(button => {
      const targetId = button.getAttribute('data-target');
      button.addEventListener('click', () => openCategory(button, targetId, group));
    });

    // Open first tab by default
    if (tabButtons.length > 0) {
      const firstButton = tabButtons[0];
      const targetId = firstButton.getAttribute('data-target');
      openCategory(firstButton, targetId, group);
    }
  });
// ========================Banner Slider===============================

const categorySwiper = new Swiper('.category-tab-slider', {
  loop: true,
  spaceBetween: 20,
  grabCursor: true,
  speed: 600,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    0: { slidesPerView: 1.5, spaceBetween: 10 },
    576: { slidesPerView: 1.5, spaceBetween: 10 },
    768: { slidesPerView: 2, spaceBetween: 10 },
    992: { slidesPerView: 3.5 },
    1200: { slidesPerView: 3.5 },
  },
});
// ========================Testimonial Slider===============================

const testimonialSwiper = new Swiper('.testimonial-slider', {
  loop: true,
  spaceBetween: 10,
  grabCursor: true,
  speed: 600,
  autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  breakpoints: {
    0: { slidesPerView: 1.3, spaceBetween: 0 },
    576: { slidesPerView: 1.4, spaceBetween: 0},
    768: { slidesPerView: 1.5, spaceBetween: 10 },
    992: { slidesPerView: 4 },
    1400: { slidesPerView: 4 },
  },
});

// ========================Special Offer Slider===============================

const offerSwiper = new Swiper('.special-offer-slider', {
  loop: true,
  spaceBetween: 15,
  grabCursor: true,
  speed: 600,
      autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    }, 
      pagination: {
  el: '.swiper-pagination',
  clickable: true,
  renderBullet: function (index, className) {
    if (index < 3) { // only allow 3 bullets
      return '<span class="' + className + '"></span>';
    }
    return ''; // don't render more than 3 bullets
  }
},
  breakpoints: {
    0: { slidesPerView: 1.5, spaceBetween: 10 },
    576: { slidesPerView: 1.5, spaceBetween: 10 },
    768: { slidesPerView: 2, spaceBetween: 10 },
    992: { slidesPerView: 2.5 },
    1200: { slidesPerView: 2.5 },
  },
});

// =========================Copied Text Show==============================================
  function copyToClipboard() {
    const text = document.getElementById("copyText").textContent;
    navigator.clipboard.writeText(text).then(() => {
      const popup = document.getElementById("copyPopup");
      popup.classList.add("show");

      setTimeout(() => {
        popup.classList.remove("show");
      }, 2000); // Hide after 2 seconds
    });
  }

  // ==================================Quantity=================================================
    function changeQuantity(delta) {
    const input = document.getElementById('quantity');
    let value = parseInt(input.value) || 1;
    value = Math.max(1, value + delta); // prevent going below 1
    input.value = value;
  }

  // ===============================Thumbnail Image with maginifier=======================================================
  const mainImage = document.getElementById("mainImage");
  const magnifier = document.getElementById("magnifier");
  const thumbnails = document.querySelectorAll("#thumbnails img");
  const thumbnailContainer = document.getElementById("thumbnails");

  // Function to set magnifier background after image is fully loaded
  function setMagnifierBackground(url) {
    const img = new Image();
    img.src = url;
    img.onload = () => {
      magnifier.style.backgroundImage = `url('${url}')`;
    };
  }

  // Set default image on page load
  window.addEventListener("DOMContentLoaded", () => {
    const initialZoom = mainImage.getAttribute("data-zoom") || mainImage.src;
    setMagnifierBackground(initialZoom);
  });

  // Update main image and magnifier
  function updateMainImage(index) {
    thumbnails.forEach((thumb, i) => {
      thumb.classList.toggle("active", i === index);
    });

    const fullSrc = thumbnails[index].dataset.full;
    const zoomSrc = thumbnails[index].dataset.zoom || fullSrc;

    mainImage.src = fullSrc;
    setMagnifierBackground(zoomSrc);
  }

  // Event listeners for thumbnails
  thumbnails.forEach((thumb, i) => {
    thumb.addEventListener("mouseover", () => {
      updateMainImage(i);
    });
    thumb.addEventListener("touchstart", () => {
      updateMainImage(i);
    });
  });

  // Magnifier effect
  document.getElementById("mainImageContainer").addEventListener("mousemove", function (e) {
    const rect = mainImage.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const xPercent = (x / rect.width) * 100;
    const yPercent = (y / rect.height) * 100;

    magnifier.style.left = `${x - magnifier.offsetWidth / 2}px`;
    magnifier.style.top = `${y - magnifier.offsetHeight / 2}px`;
    magnifier.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
  });

  mainImage.addEventListener("mouseenter", () => {
    magnifier.style.display = "block";
  });

  mainImage.addEventListener("mouseleave", () => {
    magnifier.style.display = "none";
  });

  // Manual scroll for thumbnail carousel
  const scrollAmount = 120;
  document.getElementById("prev").onclick = () => {
    thumbnailContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  };
  document.getElementById("next").onclick = () => {
    thumbnailContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  };
// ============================Cart Open===========================================

