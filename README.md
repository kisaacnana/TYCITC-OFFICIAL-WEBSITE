# 🌐 TYCITC Official Website

### The Young Christian in the City — Official Website

A responsive church/community website created by the TYCITC Media Team to provide a modern digital home for the organization, its community, content, and online communication.

**Live website:** https://www.tycitc.org

---

## ✨ Project Overview

The project is a multi-page web experience built primarily with **HTML, CSS, and JavaScript**, with a PHP form handler for contact submissions.

The website includes dedicated pages for:

- 🏠 Home
- ℹ️ About
- 📝 Blog and article pages
- 📞 Contact
- ❌ Custom 404 page

The repository also includes the site's visual assets and supporting frontend files.

---

## 🎯 Goals

The website was designed to:

- Establish a professional online presence for TYCITC
- Make organizational information accessible to visitors
- Provide a platform for articles and updates
- Give visitors a way to contact the organization
- Deliver a responsive experience across modern devices

---

## 🛠️ Technology Stack

| Technology | Purpose |
|---|---|
| **HTML5** | Page structure and semantic content |
| **CSS3** | Layout, styling and responsive design |
| **JavaScript** | Client-side interactions |
| **PHP** | Contact-form processing |
| **GitHub** | Source control and project hosting |

---

## 📁 Project Structure

```text
TYCITC-OFFICIAL-WEBSITE/
├── images/              # Website images and visual assets
├── css/                 # Stylesheets
├── js/                  # JavaScript files
├── index.html           # Homepage
├── about.html           # About page
├── blog.html            # Blog page
├── blog2.html           # Article page
├── blog3.html           # Article page
├── contact.html         # Contact page
├── 404.html             # Custom error page
├── form-handler.php     # Contact form handler
├── README.md
└── LICENSE
```

---

## 🚀 Running Locally

Because this is a static frontend with a PHP contact handler, you can preview the frontend with a local web server.

### Option 1 — VS Code Live Server

Open the project in VS Code and launch `index.html` using the Live Server extension.

### Option 2 — Python HTTP server

```bash
python -m http.server 8000
```

Then open:

```text
http://localhost:8000
```

> The Python server is suitable for the static frontend. The PHP contact form requires a PHP-capable server/environment.

---

## 📬 Contact Form

The repository contains `form-handler.php` for processing contact submissions.

Before deploying or modifying the form handler, validate and sanitize all user input and configure email delivery through a reliable mail service or authenticated SMTP provider. Avoid committing credentials or mail-service secrets to the repository.

> **Security note:** The original form handler should be treated as legacy code and reviewed before production use. It currently reads raw POST values and contains a hard-coded recipient address. fileciteturn21file0L2-L2

---

## 📱 Responsive Design

The site was designed as a responsive web experience so visitors can access its content across desktop and mobile devices.

---

## 🌍 Social & Community Links

- X/Twitter: https://x.com/fgciwg
- YouTube: https://www.youtube.com/@fgciwg
- Instagram: https://www.instagram.com/fgci.wg
- Facebook: https://web.facebook.com/fgci.wg

---

## 🔧 Recommended Future Improvements

- Refactor repeated HTML into reusable components or a templating system
- Modernize the CSS architecture and improve accessibility
- Add semantic metadata, Open Graph tags and structured data
- Improve image optimization and lazy loading
- Add automated HTML/CSS/JavaScript quality checks
- Replace the legacy PHP mail handler with a validated server-side implementation
- Add form validation, CSRF protection and spam prevention
- Add a proper CMS/API for managing blog content
- Add automated deployment with GitHub Actions
- Add analytics and privacy-conscious performance monitoring
- Improve SEO and Core Web Vitals

---

## 👤 Project Context

This project represents work done by the **TYCITC Media Team** and demonstrates practical experience in frontend development, responsive design, content presentation, and digital communication for a real organization.

---

## 📄 License

See the [`LICENSE`](LICENSE) file for license information.

---

### 🔗 Live Website

**https://www.tycitc.org**