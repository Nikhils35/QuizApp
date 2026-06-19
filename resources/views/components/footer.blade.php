  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
   
  .footer-div{
    font-family: 'Inter', sans-serif;
      background: linear-gradient(145deg, #f6f9fc 0%, #eef2f5 100%);
    color: #1a2c3e;
      display: flex;
      flex-direction: column;

  }
    /* main content wrapper to push footer down */
    

    h1 {
      font-size: 2.7rem;
      font-weight: 700;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      margin-bottom: 0.5rem;
    }

    .sub {
      color: #4b5563;
      max-width: 600px;
      margin: 0 auto;
    }

    hr {
      margin: 2rem 0 1rem;
      border: none;
      height: 1px;
      background: linear-gradient(90deg, transparent, #cbd5e1, transparent);
    }

    /* ---------- FOOTER STYLES (premium, modern, responsive) ---------- */
    .quiz-footer {
      background: #0f172a;   /* deep navy base */
      color: #e2e8f0;
      font-family: 'Inter', sans-serif;
      margin-top: 3rem;
      border-top-left-radius: 2rem;
      border-top-right-radius: 2rem;
      box-shadow: 0 -25px 40px -20px rgba(0,0,0,0.2);
    }

    .footer-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 3rem 2rem 2rem;
    }

    /* main footer grid */
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2.5rem;
      margin-bottom: 2.5rem;
    }

    .footer-brand h2 {
      font-size: 1.8rem;
      font-weight: 700;
      background: linear-gradient(125deg, #ffffff, #94a3f8);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      letter-spacing: -0.3px;
      margin-bottom: 0.75rem;
    }

    .brand-tagline {
      color: #9ca3af;
      font-size: 0.9rem;
      line-height: 1.5;
      margin-top: 0.75rem;
      max-width: 260px;
    }

    .footer-links h3, .footer-social h3, .footer-newsletter h3 {
      font-size: 1.1rem;
      font-weight: 600;
      letter-spacing: 0.3px;
      margin-bottom: 1.25rem;
      position: relative;
      display: inline-block;
      color: #f1f5f9;
    }

    .footer-links h3:after, .footer-social h3:after, .footer-newsletter h3:after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 40px;
      height: 2.5px;
      background: #3b82f6;
      border-radius: 4px;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 0.7rem;
    }

    .footer-links a {
      text-decoration: none;
      color: #cbd5e1;
      transition: all 0.2s ease;
      font-size: 0.9rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .footer-links a i {
      font-size: 0.75rem;
      width: 18px;
      color: #3b82f6;
    }

    .footer-links a:hover {
      color: white;
      transform: translateX(4px);
    }

    /* social icons row */
    .social-icons {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      margin-bottom: 1.5rem;
    }

    .social-icons a {
      background: #1e293b;
      width: 38px;
      height: 38px;
      border-radius: 40px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #cbd5e6;
      font-size: 1.2rem;
      transition: 0.2s;
      text-decoration: none;
    }

    .social-icons a:hover {
      background: #3b82f6;
      color: white;
      transform: translateY(-3px);
    }

    /* newsletter form */
    .newsletter-form {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
    }

    .input-group {
      display: flex;
      flex-wrap: nowrap;
      flex-direction: row;
      background: #1e293b;
      border-radius: 60px;
      border: 1px solid #334155;
      transition: 0.2s;
      overflow: hidden;
    }

    .input-group:focus-within {
      border-color: #3b82f6;
      box-shadow: 0 0 0 2px rgba(59,130,246,0.3);
    }

    .input-group input {
      flex: 1;
      background: transparent;
      border: none;
      padding: 0.7rem 0.5rem;
      font-size: 0.85rem;
      color: #f1f5f9;
      outline: none;
      font-family: 'Inter', sans-serif;
    }

    .input-group input::placeholder {
      color: #7c8ba0;
    }

    .newsletter-btn {
      background: #3b82f6;
      border: none;
      padding: 0 0.2rem;
      color: white;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      font-size: 0.8rem;
      letter-spacing: 0.5px;
      border-top-right-radius: 60px;
      border-bottom-right-radius: 60px;
    }

    .newsletter-btn:hover {
      background: #2563eb;
    }

    .newsletter-note {
      font-size: 0.7rem;
      color: #7c8ba0;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    /* footer bottom bar */
    .footer-bottom {
      border-top: 1px solid #1e293b;
      padding-top: 1.8rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 1rem;
      font-size: 0.8rem;
    }

    .copyright {
      color: #7c8ba0;
    }

    .legal-links {
      display: flex;
      gap: 1.5rem;
    }

    .legal-links a {
      text-decoration: none;
      color: #9ca3af;
      transition: color 0.2s;
    }

    .legal-links a:hover {
      color: white;
    }

    /* back to top button (floating elegance) */
    .back-to-top {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      background: #0f172a;
      width: 44px;
      height: 44px;
      border-radius: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.2rem;
      cursor: pointer;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transition: 0.2s;
      opacity: 0;
      visibility: hidden;
      z-index: 99;
      border: 1px solid rgba(59,130,246,0.5);
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .back-to-top:hover {
      background: #2563eb;
      transform: translateY(-5px);
    }

    /* responsiveness */
    @media (max-width: 680px) {
      .footer-grid {
        gap: 2rem;
      }
      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
      .hero-section {
        padding: 1.5rem;
      }
      h1 {
        font-size: 2rem;
      }
      .back-to-top {
        bottom: 1rem;
        right: 1rem;
        width: 38px;
        height: 38px;
      }
    }

    /* simple active link simulation */
    .demo-active-link {
      font-weight: 500;
    }
  </style>

<div class="footer-div">


<!-- ==================== BEST FOOTER FOR QUIZAPP ==================== -->
<footer class="quiz-footer">
  <div class="footer-container">
    <!-- main 4 column grid: brand, quick links, social, newsletter -->
    <div class="footer-grid">
      <!-- Brand Column -->
      <div class="footer-brand">
        <h2>QuizApp</h2>
        <div class="brand-tagline">
          <i class="fas fa-lightbulb" style="color:#3b82f6; margin-right: 6px;"></i> 
          Learn smarter, quiz faster. Join 10k+ daily challengers.
        </div>
        <div style="margin-top: 1rem;">
          <span style="background:#1e293b; padding: 0.3rem 0.8rem; border-radius: 2rem; font-size:0.75rem;">
            <i class="fas fa-star" style="color:#fbbf24;"></i> Rated 4.9/5
          </span>
        </div>
      </div>

      <!-- Quick Links (all pages) -->
      <div class="footer-links">
        <h3>Explore</h3>
        <ul>
          <li><a href="/"><i class="fas fa-chevron-right"></i> Home</a></li>
          <li><a href="/allcatagory"><i class="fas fa-chevron-right"></i> Quiz Library</a></li>
          <li><a href="/my_quizzes"><i class="fas fa-chevron-right"></i> My_quizzes</a></li>
          
          <li><a href="#"><i class="fas fa-chevron-right"></i> Blog & Tips</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Support</a></li>
        </ul>
      </div>

      <!-- Legal & Resources (also pages) -->
      <div class="footer-links">
        <h3>Resources</h3>
        <ul>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Privacy Policy</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Terms of Service</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Cookie Preferences</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Accessibility</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> FAQ</a></li>
        </ul>
      </div>

      <!-- Newsletter & Socials -->
      <div class="footer-newsletter">
        <h3>Stay quizzy</h3>
        <div class="social-icons">
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="Discord"><i class="fab fa-discord"></i></a>
          <a href="#" aria-label="Github"><i class="fab fa-github"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="newsletter-form">
          <div class="input-group">
            <input type="email" placeholder="Your email for weekly quiz" id="newsEmail" aria-label="Email for newsletter">
            <button class="newsletter-btn" id="subscribeBtn">Subscribe</button>
          </div>
          <div class="newsletter-note">
            <i class="fas fa-envelope-open-text"></i> <span>No spam, only smart challenges.</span>
          </div>
        </div>
      </div>
    </div>

    <!-- bottom bar with copyright and extra links -->
    <div class="footer-bottom">
      <div class="copyright">
        © 2026 QuizApp — <span id="currentYear"></span> | Made with <i class="fas fa-heart" style="color:#ef4444; font-size:0.7rem;"></i> for curious minds.
      </div>
      <div class="legal-links">
        <a href="#">Sitemap</a>
        <a href="#">Contact</a>
        <a href="#">API Status</a>
        <a href="#">Careers</a>
      </div>
    </div>
  </div>
</footer>

<!-- Back to top button (nice UX for all pages) -->
<div class="back-to-top" id="backToTopBtn">
  <i class="fas fa-arrow-up"></i>
</div>

<script>
  (function() {
    // Set current year dynamically
    const yearSpan = document.getElementById('currentYear');
    if (yearSpan) {
      yearSpan.textContent = new Date().getFullYear();
    }

    // Back to top logic (smooth scroll & show/hide on scroll)
    const backBtn = document.getElementById('backToTopBtn');
    if (backBtn) {
      window.addEventListener('scroll', function() {
        if (window.scrollY > 400) {
          backBtn.classList.add('visible');
        } else {
          backBtn.classList.remove('visible');
        }
      });
      backBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }

    // Newsletter subscription demo (interactive + toast-like feedback)
    const subscribeBtn = document.getElementById('subscribeBtn');
    const emailInput = document.getElementById('newsEmail');
    
    function showFloatingMessage(msg, isError = false) {
      // create a temporary toast element
      const toast = document.createElement('div');
      toast.innerText = msg;
      toast.style.position = 'fixed';
      toast.style.bottom = '90px';
      toast.style.left = '50%';
      toast.style.transform = 'translateX(-50%)';
      toast.style.backgroundColor = isError ? '#b91c1c' : '#0f172a';
      toast.style.color = 'white';
      toast.style.padding = '0.75rem 1.5rem';
      toast.style.borderRadius = '40px';
      toast.style.fontSize = '0.85rem';
      toast.style.fontWeight = '500';
      toast.style.zIndex = '999';
      toast.style.boxShadow = '0 8px 20px rgba(0,0,0,0.2)';
      toast.style.backdropFilter = 'blur(8px)';
      toast.style.border = `1px solid ${isError ? '#f87171' : '#3b82f6'}`;
      toast.style.fontFamily = "'Inter', sans-serif";
      document.body.appendChild(toast);
      setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity 0.3s';
        setTimeout(() => toast.remove(), 400);
      }, 2800);
    }

    if (subscribeBtn && emailInput) {
      subscribeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const email = emailInput.value.trim();
        const emailPattern = /^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/;
        if (!email) {
          showFloatingMessage('✨ Enter an email to receive quiz updates!', true);
          emailInput.focus();
        } else if (!emailPattern.test(email)) {
          showFloatingMessage('⚠️ Please use a valid email address (e.g., name@example.com)', true);
        } else {
          showFloatingMessage(`🎉 Thanks! ${email} — You're on the leaderboard of knowledge.`, false);
          emailInput.value = '';
          // optional: simulate API call
        }
      });
    }

    // Add "active" demo click prevention for fake navigation (just to show UI feedback on links)
    const allFooterLinks = document.querySelectorAll('.footer-links a, .legal-links a, .social-icons a');
    allFooterLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        // Only for demo, we prevent actual hash navigation if href is "#" or empty
        const href = this.getAttribute('href');
        if (href === '#' || href === '' || href === '#0') {
          e.preventDefault();
          showFloatingMessage(`🔗 Demo: ${this.innerText.trim()} page — coming soon!`, false);
        } else if (href && href.startsWith('#')) {
          // smooth internal anchor simulation? we ignore but allow default.
          // but we want to avoid weird jumps.
          e.preventDefault();
          showFloatingMessage(`✨ Navigate to ${this.innerText.trim()} (demo)`, false);
        } else {
          // for external links like twitter or # we block but for demo we prevent actual redirects
          if (href && (href.includes('twitter') || href.includes('instagram') || href.includes('discord') || href.includes('github') || href.includes('linkedin'))) {
            e.preventDefault();
            showFloatingMessage(`🌐 ${this.innerText.trim()} (social demo) — integration ready`, false);
          }
        }
      });
    });

    // Quick quiz card button demo for better footer interaction context
    const quizBtns = document.querySelectorAll('.btn-soft');
    quizBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        showFloatingMessage('🚀 Quiz feature: upgrade to premium for full access (demo)', false);
      });
    });
  })();
</script>
</div>