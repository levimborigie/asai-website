const navToggle = document.querySelector(".nav-toggle");
const siteNav = document.querySelector(".site-nav");
const navLinks = [...document.querySelectorAll(".site-nav a")];

navToggle.addEventListener("click", () => {
  const isOpen = siteNav.classList.toggle("open");
  navToggle.setAttribute("aria-expanded", String(isOpen));
});

navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    siteNav.classList.remove("open");
    navToggle.setAttribute("aria-expanded", "false");
  });
});

const sections = [...document.querySelectorAll("main section[id]")];
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      navLinks.forEach((link) => {
        link.classList.toggle("active", link.getAttribute("href") === `#${entry.target.id}`);
      });
    });
  },
  { rootMargin: "-45% 0px -45% 0px", threshold: 0 }
);

sections.forEach((section) => observer.observe(section));

async function submitToBackend(form, noteElement, defaultSuccess) {
  const button = form.querySelector("button[type='submit']");
  const originalText = button.textContent;

  noteElement.textContent = "Saving...";
  noteElement.classList.remove("error");
  button.disabled = true;
  button.textContent = "Saving...";

  try {
    const response = await fetch(form.action, {
      method: "POST",
      body: new FormData(form),
      headers: {
        Accept: "application/json"
      }
    });

    const result = await response.json();

    if (!response.ok || !result.success) {
      throw new Error(result.message || "The form could not be saved.");
    }

    noteElement.textContent = result.message || defaultSuccess;
    form.reset();
  } catch (error) {
    noteElement.textContent = `${error.message} Make sure you opened the site through XAMPP, for example http://localhost/asai-website/.`;
    noteElement.classList.add("error");
  } finally {
    button.disabled = false;
    button.textContent = originalText;
  }
}

document.getElementById("registrationForm").addEventListener("submit", (event) => {
  event.preventDefault();
  submitToBackend(
    event.currentTarget,
    document.getElementById("registrationNote"),
    "Registration saved successfully."
  );
});

document.getElementById("eventForm").addEventListener("submit", (event) => {
  event.preventDefault();
  submitToBackend(
    event.currentTarget,
    document.getElementById("eventNote"),
    "Event posting saved successfully."
  );
});

document.getElementById("contactForm").addEventListener("submit", (event) => {
  event.preventDefault();
  submitToBackend(
    event.currentTarget,
    document.getElementById("formNote"),
    "Message saved successfully."
  );
});
