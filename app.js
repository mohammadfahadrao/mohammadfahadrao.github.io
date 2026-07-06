// Portfolio SPA — Muhammad Fahad
const DATA = {
  name: "Muhammad Fahad",
  role: "Full-Stack Software Engineer",
  location: "Lahore, Pakistan",
  email: "mohammadfahad.work@gmail.com",
  linkedin: "https://www.linkedin.com/in/mohammadfahad24",
  summary:
    "Full-stack Software Engineer with 5+ years of professional experience delivering scalable, high-performance applications across multiple domains. Specialized in Laravel, PHP, and WordPress with strong expertise in Node.js (TypeScript), Ruby on Rails, and React.js. I build SaaS platforms, custom integrations, microservices, CI/CD pipelines, and complex APIs — leading development cycles end-to-end.",
  stats: [
    { num: "5+", label: "Years Experience" },
    { num: "7000+", label: "Sites Deployed" },
    { num: "12", label: "WHM Servers" },
    { num: "7+", label: "Projects Delivered" },
  ],
  info: [
    ["Location", "Lahore, Pakistan"],
    ["Experience", "5+ years"],
    ["Education", "BS Computer Science, BZU"],
    ["Focus", "SaaS · APIs · Microservices"],
    ["Available", "Open to opportunities"],
  ],
  experience: [
    {
      role: "Software Engineer",
      company: "Utilasoft",
      date: "Jul 2024 – Present",
      points: [
        "Developed a Laravel-based SaaS platform enabling seamless communication with on-demand CAM professionals.",
        "Built and deployed custom WebSocket servers across multiple company websites for real-time interactions.",
        "Engineered administrative dashboards for monitoring resource usage across large-scale customer sites.",
        "Stack: Laravel, WordPress, WHM, Zoho CRM, React.js.",
      ],
    },
    {
      role: "Sr. Software Engineer",
      company: "Devsinc",
      date: "Jul 2022 – Jul 2024",
      points: [
        "Led development of a Laravel-powered eCommerce platform with a scalable architecture.",
        "Built a custom WordPress plugin deployed to 7000+ websites.",
        "Integrated systems with Zoho CRM, automated resource monitoring for 12 WHM servers.",
        "Engineered an SEO crawler using PHP; built a task-management board with Laravel and Alpine.js.",
      ],
    },
    {
      role: "Software Engineer",
      company: "Artex Solutions",
      date: "Jun 2019 – Jul 2022",
      points: [
        "Developed testingcolorvisions.com with CodeIgniter and JavaScript for public color-vision awareness.",
        "Built private and public Shopify apps in Laravel using Shopify API and Script Tags.",
        "Designed a CRM for Bylt2Fit and implemented licensing systems for TCV.",
      ],
    },
    {
      role: "Developer",
      company: "Freelance",
      date: "Oct 2017 – Nov 2020",
      points: [
        "Led bi-weekly architecture discussions, shipping 25+ new product features in PHP.",
        "Fostered collaboration between users, dev, and QA — contributing to a 95% testing success rate.",
        "Ran code review sessions that lifted coding efficiency by ~25%.",
      ],
    },
  ],
  projects: [
    {
      name: "HomeInspections.com",
      tag: "SaaS Platform",
      url: "https://homeinspections.com",
      desc: "End-to-end SaaS platform for home inspection professionals — scheduling, digital inspection reports, client management, and payment workflows. Built with a scalable Laravel backend and integrated CRM automation.",
      stack: ["Laravel", "PHP", "MySQL", "JavaScript", "Zoho CRM"],
    },
    {
      name: "StickyOS",
      tag: "Web Platform",
      url: "https://stickyos.com/",
      desc: "A modern operational platform delivering a unified dashboard, custom integrations, and real-time collaboration features. I contributed to backend architecture, API design, and dashboard performance optimizations.",
      stack: ["Laravel", "Node.js", "TypeScript", "React.js", "WebSockets"],
    },
    {
      name: "Kaloop",
      tag: "Web App",
      url: "https://kaloop.com/",
      desc: "Full-stack web product with a clean customer-facing experience and administrative tooling. Delivered scalable backend APIs, secure authentication, and integrations with third-party services.",
      stack: ["Laravel", "MySQL", "React.js", "Tailwind", "REST APIs"],
    },
    {
      name: "Triangle Wallet",
      tag: "Mobile Wallet",
      url: "https://trianglewallet.com/",
      desc: "MERN-based digital wallet with user authentication, transaction management, and secure payment flows. Focused on responsive UX and reliable transaction handling.",
      stack: ["MongoDB", "Express", "React", "Node.js"],
    },
  ],
  skills: {
    "Backend": ["PHP", "Laravel", "Ruby on Rails", "Node.js", "TypeScript", "WordPress", "REST APIs", "Microservices", "WebSockets", "Sidekiq"],
    "Frontend": ["HTML", "CSS", "JavaScript", "React.js", "Vue.js", "Tailwind", "Bootstrap", "MUI"],
    "Databases": ["MySQL", "PostgreSQL", "MongoDB", "MS SQL", "DynamoDB", "InfluxDB", "Redis"],
    "DevOps & Cloud": ["AWS", "Azure", "GCP", "Heroku", "Netlify", "Docker", "GitHub Actions", "WHM", "SNS/SQS"],
    "Integrations": ["Shopify API", "Zoho CRM", "Payment Gateways", "Third-party APIs"],
  },
  links: [
    "https://homeinspections.com",
    "https://stickyos.com/",
    "https://kaloop.com/",
    "https://trianglewallet.com/",
  ],
};

const app = document.getElementById("app");

const heroHTML = `
<section id="home" class="hero">
  <div class="reveal">
    <div class="eyebrow">// ${DATA.role}</div>
    <h1>Hi, I'm <span class="grad">Muhammad Fahad</span><br/>I build scalable web platforms.</h1>
    <p class="hero-role">${DATA.summary}</p>
    <div class="hero-meta">
      <span>📍 ${DATA.location}</span>
      <span>✉️ ${DATA.email}</span>
      <span>🔗 linkedin.com/in/mohammadfahad24</span>
    </div>
    <div class="hero-cta">
      <a href="#projects" class="btn btn-primary" data-link>View Projects →</a>
      <a href="mailto:${DATA.email}" class="btn btn-ghost">Get in touch</a>
    </div>
  </div>
  <div class="stats reveal">
    ${DATA.stats.map(s => `
      <div class="stat">
        <div class="stat-num">${s.num}</div>
        <div class="stat-label">${s.label}</div>
      </div>`).join("")}
  </div>
</section>`;

const aboutHTML = `
<section id="about" class="about">
  <div class="eyebrow reveal">// about</div>
  <h2 class="title reveal">Engineer. Builder. Problem solver.</h2>
  <div class="about-grid">
    <div class="reveal">
      <p>I'm a Full-Stack Software Engineer based in Lahore with a Bachelor's in Computer Science from Bahauddin Zakariya University. Over the last 5+ years I've shipped SaaS platforms, custom eCommerce integrations, WordPress plugins deployed on 7000+ sites, and server-monitoring tools running across 12 WHM servers.</p>
      <p>I specialise in Laravel/PHP and Ruby on Rails, and I'm equally comfortable in Node.js/TypeScript and React.js. I care about clean architecture, real-time systems (WebSockets, Sidekiq), and integrations that just work — Shopify, Zoho CRM, payment gateways, you name it.</p>
      <p>Currently at Utilasoft building a Laravel SaaS platform and real-time WebSocket services.</p>
    </div>
    <div class="info-card reveal">
      ${DATA.info.map(([k,v]) => `<div class="info-row"><span>${k}</span><span>${v}</span></div>`).join("")}
    </div>
  </div>
</section>`;

const expHTML = `
<section id="experience">
  <div class="eyebrow reveal">// experience</div>
  <h2 class="title reveal">Where I've worked</h2>
  <div class="timeline">
    ${DATA.experience.map(e => `
      <div class="exp reveal">
        <div class="exp-head">
          <div>
            <div class="exp-role">${e.role}</div>
            <div class="exp-company">${e.company}</div>
          </div>
          <div class="exp-date">${e.date}</div>
        </div>
        <ul>${e.points.map(p => `<li>${p}</li>`).join("")}</ul>
      </div>`).join("")}
  </div>
</section>`;

const projectsHTML = `
<section id="projects">
  <div class="eyebrow reveal">// projects</div>
  <h2 class="title reveal">Selected work</h2>
  <div class="projects">
    ${DATA.projects.map(p => `
      <a class="project reveal" href="${p.url}" target="_blank" rel="noopener">
        <div class="project-title">${p.name}<span class="project-tag">${p.tag}</span></div>
        <p class="project-desc">${p.desc}</p>
        <div class="project-stack">${p.stack.map(s => `<span class="chip">${s}</span>`).join("")}</div>
        <div class="project-link">${p.url.replace(/^https?:\/\//,'').replace(/\/$/,'')} →</div>
      </a>`).join("")}
  </div>
  <div class="reveal" style="margin-top:40px">
    <h3 style="font-family:'JetBrains Mono',monospace;font-size:13px;color:var(--accent-2);text-transform:uppercase;letter-spacing:.1em;margin-bottom:12px">// live links</h3>
    <div class="links-grid">
      ${DATA.links.map(l => `<a class="link-card" href="${l}" target="_blank" rel="noopener">${l.replace(/^https?:\/\//,'').replace(/\/$/,'')}</a>`).join("")}
    </div>
  </div>
</section>`;

const skillsHTML = `
<section id="skills">
  <div class="eyebrow reveal">// skills</div>
  <h2 class="title reveal">Tools of the trade</h2>
  ${Object.entries(DATA.skills).map(([group, list]) => `
    <div class="skill-group reveal">
      <h3>${group}</h3>
      <div class="skill-chips">${list.map(s => `<span class="skill">${s}</span>`).join("")}</div>
    </div>`).join("")}
</section>`;

const contactHTML = `
<section id="contact" class="contact">
  <div class="eyebrow reveal">// contact</div>
  <h2 class="title reveal">Let's build something.</h2>
  <p class="contact-desc reveal">Have a project in mind, a role to fill, or just want to talk shop? My inbox is open.</p>
  <div class="contact-links reveal">
    <a class="btn btn-primary" href="mailto:${DATA.email}">✉️ ${DATA.email}</a>
    <a class="btn btn-ghost" href="${DATA.linkedin}" target="_blank" rel="noopener">LinkedIn ↗</a>
  </div>
</section>`;

app.innerHTML = heroHTML + aboutHTML + expHTML + projectsHTML + skillsHTML + contactHTML;

// Year
document.getElementById("year").textContent = new Date().getFullYear();

// Mobile menu
const menuBtn = document.querySelector(".menu-btn");
const navMenu = document.querySelector(".nav nav");
menuBtn.addEventListener("click", () => navMenu.classList.toggle("open"));
document.querySelectorAll("[data-link]").forEach(a =>
  a.addEventListener("click", () => navMenu.classList.remove("open"))
);

// Reveal on scroll
const io = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add("in"); io.unobserve(e.target); } });
}, { threshold: 0.12 });
document.querySelectorAll(".reveal").forEach(el => io.observe(el));

// Active nav on scroll
const sections = ["home","about","experience","projects","skills","contact"];
const navLinks = document.querySelectorAll(".nav nav a");
const spy = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      navLinks.forEach(l => l.classList.toggle("active", l.getAttribute("href") === "#" + e.target.id));
    }
  });
}, { rootMargin: "-40% 0px -55% 0px" });
sections.forEach(id => { const el = document.getElementById(id); if (el) spy.observe(el); });