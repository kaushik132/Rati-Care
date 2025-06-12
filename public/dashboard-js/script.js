document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".custom-sidebar-link");
  const currentPath = window.location.pathname.split("/").pop();

  navLinks.forEach(link => {
    const linkPath = link.getAttribute("href");

    // Handle grouped pages under 'Your Address'
    const addressPages = ["address.html", "edit-address.html", "add-address.html"];
    if (
      addressPages.includes(currentPath) &&
      linkPath === "address.html"
    ) {
      link.classList.add("active");
    } else if (linkPath === currentPath) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});