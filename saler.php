<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Romwazi Enterprises Limited – Your Everyday Essentials Supplier</title>
  <meta name="description" content="Romwazi Enterprises Limited supplies supermarkets, kiosks, hospitals and institutions across Kenya with quality everyday essentials — tissues, diapers, biscuits, soaps and more — at competitive wholesale prices. Based in Kayole, Nairobi."/>
  <meta property="og:title" content="Romwazi Enterprises Limited – Wholesale Essentials Supplier, Nairobi"/>
  <meta property="og:description" content="Bulk wholesale supplier of tissues, diapers, biscuits, soaps and household essentials across Nairobi and Kenya."/>
  <meta property="og:type" content="website"/>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <span class="dot"></span>Romwazi<span> Enterprises</span>
  </div>
  <ul class="nav-links">
    <li><a href="#products">Products</a></li>
    <li><a href="#why">Why Us</a></li>
    <li><a href="#how">How It Works</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <div style="display:flex;align-items:center;gap:14px">
    <button class="cart-btn" onclick="openModal()" title="Enquiry Cart">
      🛒<span class="cart-count" id="cartCount">0</span>
    </button>
    <button class="nav-cta" onclick="openModal()">Get a Quote</button>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-text">
    <p class="hero-eyebrow">Kayole, Nairobi's Trusted Wholesale Partner</p>
    <h1>Everything Your Shop<br>Needs — <em>In Bulk.</em></h1>
    <p>From tissues and diapers to biscuits and soaps — Romwazi Enterprises supplies supermarkets, kiosks, hospitals and institutions across Kenya with quality everyday essentials at competitive wholesale prices.</p>
    <div class="hero-btns">
      <button class="btn-primary" onclick="document.getElementById('products').scrollIntoView({behavior:'smooth'})">Browse Products</button>
      <button class="btn-outline" onclick="openModal()">Request a Quote</button>
    </div>
  </div>
  <div class="hero-stats">
    <div class="stat-card">
      <div class="stat-num">500+</div>
      <div class="stat-label">Happy Clients</div>
    </div>
    <div class="stat-card">
      <div class="stat-num">11</div>
      <div class="stat-label">Product Lines</div>
    </div>
    <div class="stat-card">
      <div class="stat-num">8-5</div>
      <div class="stat-label">Fast Delivery All Day</div>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker-wrap">
  <div class="ticker-inner" id="ticker"></div>
</div>

<!-- SEARCH -->
<div class="search-section" id="search">
  <div style="text-align:center;margin-bottom:16px;">
    <p class="section-label" style="margin:0">Find Products</p>
  </div>
  <div class="search-wrap">
    <input class="search-input" id="searchInput" placeholder="Search tissues, diapers, biscuits…" oninput="searchProducts(this.value)"/>
    <button class="search-btn">Search</button>
  </div>
  <div class="search-tags">
    <span class="tag active" onclick="filterCategory('all',this)">All</span>
    <span class="tag" onclick="filterCategory('paper',this)">Paper & Wipes</span>
    <span class="tag" onclick="filterCategory('household',this)">Household</span>
    <span class="tag" onclick="filterCategory('food',this)">Food & Confectionery</span>
    <span class="tag" onclick="filterCategory('personal',this)">Personal Care</span>
  </div>
</div>

<!-- PRODUCTS -->
<section id="products">
  <div class="products-header">
    <div>
      <p class="section-label">Our Catalogue</p>
      <h2 class="section-title">Wholesale Products</h2>
      <p class="section-sub">Quality essentials at bulk prices — MOQ applies per category.</p>
    </div>
    <div class="filter-tabs">
      <button class="filter-btn active" onclick="filterCategory('all',this)">All</button>
      <button class="filter-btn" onclick="filterCategory('paper',this)">Paper</button>
      <button class="filter-btn" onclick="filterCategory('household',this)">Household</button>
      <button class="filter-btn" onclick="filterCategory('food',this)">Food</button>
      <button class="filter-btn" onclick="filterCategory('personal',this)">Personal</button>
    </div>
  </div>
  <div class="products-grid" id="productsGrid"></div>
</section>

<!-- WHY US -->
<section class="why-section" id="why">
  <p class="section-label">Why Romwazi Enterprises</p>
  <h2 class="section-title">Built for Businesses Like Yours</h2>
  <p class="section-sub">We're more than a supplier — we're your restocking partner.</p>
  <div class="why-grid">
    <div class="why-card">
      <div class="why-icon">💰</div>
      <h3>Competitive Pricing</h3>
      <p>Factory-direct rates on all product lines. The more you buy, the better the deal.</p>
    </div>
    <div class="why-card">
      <div class="why-icon">🚚</div>
      <h3>Fast Nairobi Delivery</h3>
      <p>Same-day or next-day delivery within Nairobi and major towns across Kenya.</p>
    </div>
    <div class="why-card">
      <div class="why-icon">📦</div>
      <h3>Wide Product Range</h3>
      <p>11 categories covering paper, hygiene, food, household and personal care — one supplier, everything covered.</p>
    </div>
    <div class="why-card">
      <div class="why-icon">🤝</div>
      <h3>Dedicated Account Manager</h3>
      <p>A real person handles your account, answers queries fast, and helps you reorder on time.</p>
    </div>
    <div class="why-card">
      <div class="why-icon">✅</div>
      <h3>Quality Guaranteed</h3>
      <p>All products meet KEBS standards. Unsatisfied? We'll sort it, no questions asked.</p>
    </div>
    <div class="why-card">
      <div class="why-icon">💳</div>
      <h3>Flexible Payment Terms</h3>
      <p>Credit facilities available for verified business accounts. M-Pesa, bank transfer, and cash accepted.</p>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how">
  <p class="section-label">Getting Started</p>
  <h2 class="section-title">Order in 4 Simple Steps</h2>
  <p class="section-sub">Whether you're a kiosk owner or a supermarket chain, we make restocking simple.</p>
  <div class="steps-grid">
    <div class="step">
      <div class="step-num"><span>01</span></div>
      <h3>Browse & Select</h3>
      <p>Explore our catalogue and shortlist the products your business needs.</p>
    </div>
    <div class="step">
      <div class="step-num"><span>02</span></div>
      <h3>Request a Quote</h3>
      <p>Fill out our quick form with quantities. We respond with a tailored price within 2 hours.</p>
    </div>
    <div class="step">
      <div class="step-num"><span>03</span></div>
      <h3>Confirm & Pay</h3>
      <p>Approve the quote, make payment via M-Pesa, bank transfer, or cash on delivery.</p>
    </div>
    <div class="step">
      <div class="step-num"><span>04</span></div>
      <h3>Receive Delivery</h3>
      <p>We deliver to your door — same day or next day within Nairobi.</p>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact-section" id="contact">
  <p class="section-label">Get In Touch</p>
  <h2 class="section-title">Let's Do Business</h2>
  <div class="contact-grid">
    <div class="contact-info">
      <h3>Contact Details</h3>
      <div class="contact-item">
        <div class="contact-icon">📍</div>
        <div>
          <div class="contact-label">Address</div>
          <div class="contact-val">Kayole, Nairobi, Kenya</div>
        </div>
      </div>

      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241.18709635696067!2d36.92004168817953!3d-1.269792866636631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15e717a4ebeb%3A0x2607307548aa771c!2sRomwazi%20Enteprises%20Limited!5e1!3m2!1sen!2sus!4v1782415160368!5m2!1sen!2sus"
          width="100%" height="300" style="border:0;border-radius:12px;"
          allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
      </div>

      <div class="contact-item">
        <div class="contact-icon">📞</div>
        <div>
          <div class="contact-label">Phone / WhatsApp</div>
          <div class="contact-val">
            <a href="https://wa.me/254769477578" target="_blank">+254769477578</a>
          </div>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon">✉️</div>
        <div>
          <div class="contact-label">Email</div>
          <div class="contact-val">
            <a href="mailto:romwaziltd@gmail.com">romwaziltd@gmail.com</a>
          </div>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon">🕐</div>
        <div>
          <div class="contact-label">Business Hours</div>
          <div class="contact-val">Mon – Sat: 7:00 AM – 6:00 PM</div>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <h3 style="font-size:1.1rem;font-weight:700;margin-bottom:20px;">Send an Enquiry</h3>

      <form id="enquiryForm">
        <!-- Web3Forms setup: replace YOUR_ACCESS_KEY_HERE with the key emailed to you after signing up at https://web3forms.com -->
        <input type="hidden" name="access_key" value="324778a4-ed2d-4ec0-b8dd-67816acf767f">
        <input type="hidden" name="subject" value="New Enquiry From Romwazi Website">
        <input type="checkbox" name="botcheck" style="display:none" tabindex="-1" autocomplete="off">

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Full Name</label>
            <input type="text" id="fullName" name="name" class="form-input" placeholder="Jane Kamau" required>
          </div>
          <div class="form-group">
            <label class="form-label">Business Name</label>
            <input type="text" id="businessName" name="business" class="form-input" placeholder="Kamau Stores">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Phone</label>
            <input type="tel" id="phone" name="phone" class="form-input" placeholder="0712345678" required>
          </div>
          <div class="form-group">
            <label class="form-label">Product Category</label>
            <select id="category" name="category" class="form-select">
              <option value="">Select category</option>
              <option value="Tissues & Wipes">Tissues & Wipes</option>
              <option value="Serviettes">Serviettes</option>
              <option value="Kitchen Towels">Kitchen Towels</option>
              <option value="Foils & Clings">Foils & Clings</option>
              <option value="Biscuits">Biscuits</option>
              <option value="Diapers">Diapers</option>
              <option value="Soaps">Soaps</option>
              <option value="Toothpastes">Toothpastes</option>
              <option value="Sweets & Candy">Sweets & Candy</option>
              <option value="Multiple / Mixed Order">Multiple / Mixed Order</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Message / Order Details</label>
          <textarea id="message" name="message" class="form-textarea" placeholder="Tell us what you need and estimated quantities…" required></textarea>
        </div>

        <button type="submit" class="form-submit" id="enquirySubmitBtn">Send Enquiry →</button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <div class="nav-logo"><span class="dot"></span>Romwazi<span> Enterprises</span></div>
      <p>Romwazi Enterprises Limited is Kayole's trusted wholesale supplier of everyday essentials —
        delivering quality products at bulk prices to businesses across Nairobi and Kenya.</p>
    </div>
    <div class="footer-col">
      <h4>Products</h4>
      <ul>
        <li><a href="#products">Tissues & Wipes</a></li>
        <li><a href="#products">Serviettes</a></li>
        <li><a href="#products">Foils & Clings</a></li>
        <li><a href="#products">Kitchen Towels</a></li>
        <li><a href="#products">Diapers</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>More Products</h4>
      <ul>
        <li><a href="#products">Soaps</a></li>
        <li><a href="#products">Toothpastes</a></li>
        <li><a href="#products">Biscuits</a></li>
        <li><a href="#products">Sweets & Candy</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="#why">About Us</a></li>
        <li><a href="#how">Delivery Areas</a></li>
        <li><a href="#why">Payment Terms</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Romwazi Enterprises Limited. All rights reserved.</span>
    <span>Kayole, Nairobi, Kenya</span>
  </div>
</footer>

<!-- QUOTE MODAL -->
<div class="modal-overlay" id="modalOverlay" onclick="if(event.target===this)closeModal()">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <h2>Request a Quote</h2>
    <p>Fill in your details and we'll get back to you within 2 hours with pricing.</p>
    <form class="modal-form" id="quoteForm">
      <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">
      <input type="hidden" name="subject" value="New Quote Request From Romwazi Website">
      <input type="checkbox" name="botcheck" style="display:none" tabindex="-1" autocomplete="off">
      <input class="form-input" name="name" placeholder="Your Name" required/>
      <input class="form-input" name="business" placeholder="Business Name"/>
      <input class="form-input" name="phone" placeholder="Phone / WhatsApp" required/>
      <select class="form-select" name="category">
        <option value="">Select product category</option>
        <option>Tissues & Wipes</option>
        <option>Diapers</option>
        <option>Biscuits & Sweets</option>
        <option>Soaps & Toothpastes</option>
        <option>Foils & Clings</option>
        <option>Mixed Order</option>
      </select>
      <textarea class="form-textarea" name="message" placeholder="Describe what you need…" style="min-height:80px" required></textarea>
      <button type="submit" class="form-submit" id="quoteSubmitBtn">Submit Request →</button>
    </form>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast">✅ <span id="toastMsg"></span></div>

<!-- PRODUCT DETAIL MODAL -->
<div class="pd-overlay" id="pdOverlay" onclick="if(event.target===this)closePD()">
  <div class="pd-modal">
    <button class="pd-close" onclick="closePD()">✕</button>
    <div class="pd-image-side" id="pdImageSide"></div>
    <div class="pd-info-side" id="pdInfoSide"></div>
  </div>
</div>

<script>
  // ── Business WhatsApp number (used across the site) ──
  const BUSINESS_WHATSAPP = "254769477578";

  // ── Rich Products Data ──
  const products = [
    {
      name: "Facial Tissues",
      cat: "paper", icon: "🧻", bg: "cat-paper",
      desc: "Soft 2-ply facial tissues in box and pocket packs. Gentle on skin, strong enough for everyday use. Ideal for homes, offices, hotels and hospitals.",
      moq: "50 Cartons",
      img: "tiara.jpg",
      specs: { "Ply": "2-ply", "Pack Size": "100–200 sheets", "Format": "Box & Pocket", "Standard": "KEBS Certified" },
      variants: ["White Box 200s", "Pocket Pack 10s", "Flowpack 150s", "Coloured Box"],
      highlights: ["Hypoallergenic & soft", "Bulk carton pricing", "Multiple brands available", "Custom branding available"]
    },
    {
      name: "Wet Wipes",
      cat: "paper", icon: "🫧", bg: "cat-paper",
      desc: "Baby and adult wet wipes in unscented and scented varieties. Pre-moistened for gentle cleansing. Perfect for retail, healthcare and hospitality.",
      moq: "100 Packs",
      img: "IMG_20260526_172631.jpg",
      specs: { "Variants": "Baby & Adult", "Scent": "Scented / Plain", "Pack Size": "20–80 wipes", "Type": "Pre-moistened" },
      variants: ["Baby Wipes 80s", "Adult Wipes 40s", "Antibacterial 30s", "Travel Pack 20s"],
      highlights: ["Alcohol-free options", "Dermatologist tested", "Resealable packs", "Bulk wholesale rates"]
    },
    {
      name: "Serviettes",
      cat: "paper", icon: "🗒️", bg: "cat-paper",
      desc: "White and coloured dinner serviettes in bulk restaurant packs. Ideal for restaurants, hotels, caterers and supermarkets. Available in single and double ply.",
      moq: "40 Cartons",
      img: "https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?w=600&q=80",
      specs: { "Ply": "1-ply & 2-ply", "Colour": "White & Coloured", "Fold": "1/4 & 1/8", "Count": "100–500 per pack" },
      variants: ["White 1-ply 500s", "White 2-ply 200s", "Coloured 100s", "Cocktail Size"],
      highlights: ["Restaurant grade", "Absorbent material", "Colour-matched options", "Catering bulk packs"]
    },
    {
      name: "Kitchen Towels",
      cat: "paper", icon: "🧹", bg: "cat-paper",
      desc: "Absorbent 2-ply kitchen rolls in double length and standard sizes. Strong enough for heavy-duty kitchen cleaning — great for homes and commercial kitchens.",
      moq: "30 Cartons",
      img: "https://images.unsplash.com/photo-1589985270826-4b7bb135bc9d?w=600&q=80",
      specs: { "Ply": "2-ply", "Length": "Standard & Double", "Sheets": "60–120 per roll", "Rolls/Pack": "2 or 4 rolls" },
      variants: ["Standard 2-Roll", "Double Length 2-Roll", "Value 4-Roll", "Industrial Roll"],
      highlights: ["Extra absorbent", "Tear-resistant", "Perforated sheets", "Food safe"]
    },
    {
      name: "Aluminium Foil",
      cat: "household", icon: "🫙", bg: "cat-household",
      desc: "Food-grade aluminium foil rolls for catering, cooking and retail. Locks in freshness and flavour. Perfect for bakeries, restaurants and supermarkets.",
      moq: "20 Cartons",
      img: "https://images.unsplash.com/photo-1610529793714-42e2e4b1e9d1?w=600&q=80",
      specs: { "Grade": "Food Safe", "Width": "30cm & 45cm", "Length": "10m – 100m", "Thickness": "Standard & Heavy" },
      variants: ["30cm × 10m Retail", "45cm × 30m Catering", "Heavy Duty 50m", "Industrial 100m"],
      highlights: ["FDA food-grade", "Grease & moisture resistant", "Retail & catering sizes", "Keeps food fresh longer"]
    },
    {
      name: "Cling Film",
      cat: "household", icon: "📦", bg: "cat-household",
      desc: "Clear stretch cling wraps for food preservation and packaging. Clings tightly to bowls, plates and trays. Used by supermarkets, delis and home kitchens.",
      moq: "20 Cartons",
      img: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80",
      specs: { "Width": "30cm & 45cm", "Length": "100m – 300m", "Cling": "Self-adhesive", "Type": "PVC & PE" },
      variants: ["30cm × 100m Retail", "45cm × 300m Catering", "Cut-Box Dispenser", "Heavy Duty Roll"],
      highlights: ["BPA-free options", "Air-tight seal", "Microwave safe variants", "Easy-cut dispenser"]
    },
    {
      name: "Biscuits",
      cat: "food", icon: "🍪", bg: "cat-food",
      desc: "Assorted cream-filled and plain biscuits in loose, boxed and branded packs. Popular with kiosks, supermarkets and school canteens across Kenya.",
      moq: "10 Cartons",
      img: "IMG_20260526_172612.jpg",
      specs: { "Type": "Cream & Plain", "Formats": "Loose, Boxed, Branded", "Weight": "50g – 500g", "Shelf Life": "6–12 months" },
      variants: ["Cream Biscuits 200g", "Digestive 250g", "Marie Plain 200g", "Assorted Mixed Box"],
      highlights: ["Multiple brands", "Long shelf life", "Great kiosk seller", "Kids & family friendly"]
    },
    {
      name: "Sweets & Candy",
      cat: "food", icon: "🍬", bg: "cat-food",
      desc: "Hard candy, lollipops, chews and mints in mixed or single flavour bulk bags. Best sellers in kiosks, supermarkets and tuck shops across East Africa.",
      moq: "15 Cartons",
      img: "https://images.unsplash.com/photo-1582058091505-f87a2e55a40f?w=600&q=80",
      specs: { "Types": "Hard, Chew, Lollipop", "Flavours": "Mixed & Single", "Pack": "Bulk bags & jars", "Weight": "1kg – 5kg bags" },
      variants: ["Mixed Fruit 1kg", "Mint Drops 1kg", "Lollipops 50pcs", "Chewing Gum Bulk"],
      highlights: ["Year-round demand", "High margin product", "Colourful displays", "Multiple flavours"]
    },
    {
      name: "Diapers",
      cat: "personal", icon: "👶", bg: "cat-personal",
      desc: "Baby diapers in sizes S/M/L/XL and adult diapers for healthcare use. Leading brands available. High demand in supermarkets, pharmacies and clinics.",
      moq: "20 Cartons",
      img: "https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=600&q=80",
      specs: { "Sizes": "S / M / L / XL", "Type": "Baby & Adult", "Absorbency": "Standard & Overnight", "Brands": "Multiple" },
      variants: ["Baby S (3–6 kg)", "Baby M (6–11 kg)", "Baby L (9–14 kg)", "Baby XL (12+ kg)", "Adult Large"],
      highlights: ["Leak-proof design", "Soft inner layer", "Overnight absorbency", "Leading brand names"]
    },
    {
      name: "Bar & Liquid Soap",
      cat: "personal", icon: "🧼", bg: "cat-personal",
      desc: "Bathing, laundry and antibacterial soaps in multiple sizes. Available in bar and liquid forms. Trusted brands for retail, hotels and household distribution.",
      moq: "30 Cartons",
      img: "https://images.unsplash.com/photo-1600857062241-98e5dba7f025?w=600&q=80",
      specs: { "Type": "Bar & Liquid", "Use": "Bathing / Laundry / Kitchen", "Sizes": "100g – 1 litre", "Variants": "Plain & Antibacterial" },
      variants: ["Bath Bar 100g", "Laundry Bar 800g", "Liquid Hand Soap 500ml", "Antibacterial Bar 125g"],
      highlights: ["Antibacterial formula", "Long-lasting lather", "Hotel & household grade", "Bulk laundry options"]
    },
    {
      name: "Toothpaste",
      cat: "personal", icon: "🪥", bg: "cat-personal",
      desc: "Fluoride toothpastes in 15ml, 35ml, 70ml and 140ml tubes from various brands. Whitening, sensitive and herbal formulas available. High-demand retail product.",
      moq: "40 Cartons",
      img: "https://images.unsplash.com/photo-1559591937-abc1f075047e?w=600&q=80",
      specs: { "Sizes": "15ml / 35ml / 70ml", "Formula": "Fluoride, Whitening, Herbal", "Age": "Kids & Adult", "Brands": "Multiple" },
      variants: ["Regular 15ml", "Whitening 140ml", "Sensitive 40ml", "Kids Gel 70ml", "Herbal 140ml"],
      highlights: ["KEBS approved", "Multiple formulas", "Family & kids packs", "Fast-moving SKU"]
    }
  ];

  let cartCount = 0;
  let activeCategory = 'all';

  // ── Render product grid cards ──
  function renderProducts(list) {
    const grid = document.getElementById('productsGrid');
    grid.innerHTML = '';
    if (!list.length) {
      grid.innerHTML = '<p style="color:var(--muted);padding:20px 0">No products found.</p>';
      return;
    }
    list.forEach(p => {
      const catLabel = { paper:'Paper & Wipes', household:'Household', food:'Food', personal:'Personal Care' }[p.cat] || p.cat;
      const card = document.createElement('div');
      card.className = 'product-card';
      card.dataset.cat = p.cat;
      card.setAttribute('role','button');
      card.setAttribute('tabindex','0');
      card.setAttribute('aria-label', `View details for ${p.name}`);
      card.onclick = () => openPD(p);
      card.onkeydown = e => { if(e.key==='Enter'||e.key===' ') openPD(p); };
      card.innerHTML = `
        <div class="product-icon-wrap ${p.bg}" style="position:relative;overflow:hidden;">
          ${p.img
            ? `<img src="${p.img}" alt="${p.name}" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:.85;" onerror="this.style.display='none'">`
            : ''}
          <span style="position:relative;z-index:1;font-size:2.8rem">${p.icon}</span>
          <div style="position:absolute;bottom:8px;right:10px;background:rgba(13,27,42,.55);color:#fff;font-size:.68rem;font-weight:600;padding:3px 9px;border-radius:12px;z-index:1">View Details →</div>
        </div>
        <div class="product-body">
          <div class="product-cat">${catLabel}</div>
          <div class="product-name">${p.name}</div>
          <div class="product-desc">${p.desc.substring(0,80)}…</div>
          <div class="product-footer">
            <div class="product-moq">MOQ: <span>${p.moq}</span></div>
            <button class="add-btn" onclick="event.stopPropagation();addToEnquiry('${p.name}')">+ Enquire</button>
          </div>
        </div>`;
      grid.appendChild(card);
    });
  }

  renderProducts(products);

  // ── Product Detail Modal ──
  function openPD(p) {
    const catLabel = { paper:'Paper & Wipes', household:'Household', food:'Food', personal:'Personal Care' }[p.cat] || p.cat;

    document.getElementById('pdImageSide').innerHTML = `
      <span class="pd-cat-badge">${catLabel}</span>
      ${p.img
        ? `<img src="${p.img}" alt="${p.name}" onerror="this.parentElement.innerHTML='<div class=pd-img-placeholder>${p.icon}</div>'">`
        : `<div class="pd-img-placeholder">${p.icon}</div>`}
    `;

    const specsHtml = Object.entries(p.specs).map(([k,v]) => `
      <div class="pd-spec"><div class="pd-spec-key">${k}</div><div class="pd-spec-val">${v}</div></div>
    `).join('');

    const variantsHtml = p.variants.map((v,i) => `
      <span class="pd-pill${i===0?' active':''}" onclick="this.parentElement.querySelectorAll('.pd-pill').forEach(x=>x.classList.remove('active'));this.classList.add('active')">${v}</span>
    `).join('');

    const highlightsHtml = p.highlights.map(h => `<div style="font-size:.82rem;color:var(--muted);padding:4px 0;display:flex;gap:8px;align-items:center"><span style="color:var(--teal);font-weight:700">✓</span>${h}</div>`).join('');

    document.getElementById('pdInfoSide').innerHTML = `
      <div class="pd-cat">${catLabel}</div>
      <div class="pd-name">${p.name}</div>
      <div class="pd-desc">${p.desc}</div>

      <div class="pd-specs">
        <div class="pd-specs-title">Product Specs</div>
        <div class="pd-spec-grid">${specsHtml}</div>
      </div>

      <div class="pd-variants">
        <div class="pd-variants-title">Available Variants</div>
        <div class="pd-variant-pills">${variantsHtml}</div>
      </div>

      <div style="margin-bottom:18px">${highlightsHtml}</div>

      <div class="pd-moq-bar">
        <div class="pd-moq-label">📦 Minimum Order Quantity</div>
        <div class="pd-moq-val">${p.moq}</div>
      </div>

      <div class="pd-actions">
        <button class="pd-enquire" onclick="addToEnquiry('${p.name}');closePD()">+ Add to Enquiry</button>
        <button class="pd-whatsapp" onclick="window.open('https://wa.me/${BUSINESS_WHATSAPP}?text=Hi%2C%20I%27m%20interested%20in%20wholesale%20${encodeURIComponent(p.name)}','_blank')">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          WhatsApp
        </button>
      </div>
    `;

    document.getElementById('pdOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closePD() {
    document.getElementById('pdOverlay').classList.remove('open');
    document.body.style.overflow = '';
  }

  document.addEventListener('keydown', e => { if(e.key === 'Escape') { closePD(); closeModal(); } });

  // ── Filter ──
  function filterCategory(cat, el) {
    activeCategory = cat;
    document.querySelectorAll('.filter-btn, .tag').forEach(b => b.classList.remove('active'));
    document.querySelectorAll(`[onclick*="filterCategory('${cat}'"]`).forEach(b => b.classList.add('active'));
    const filtered = cat === 'all' ? products : products.filter(p => p.cat === cat);
    renderProducts(filtered);
  }

  // ── Search ──
  function searchProducts(q) {
    const filtered = products.filter(p =>
      p.name.toLowerCase().includes(q.toLowerCase()) ||
      p.desc.toLowerCase().includes(q.toLowerCase())
    );
    renderProducts(filtered);
  }

  // ── Enquiry cart badge ──
  function addToEnquiry(name) {
    cartCount++;
    document.getElementById('cartCount').textContent = cartCount;
    showToast(`${name} added to your enquiry list`);
  }

  // ── Ticker ──
  const items = ["Tissues","Wet Wipes","Serviettes","Kitchen Towels","Aluminium Foil","Cling Film","Biscuits","Sweets & Candy","Diapers","Soaps","Toothpastes"];
  const ticker = document.getElementById('ticker');
  [...items,...items].forEach(i => {
    const el = document.createElement('span');
    el.className = 'ticker-item';
    el.textContent = i;
    ticker.appendChild(el);
  });

  // ── Quote Modal open/close ──
  function openModal() { document.getElementById('modalOverlay').classList.add('open'); }
  function closeModal() { document.getElementById('modalOverlay').classList.remove('open'); }

  // ── Toast ──
  function showToast(msg) {
    const t = document.getElementById('toast');
    document.getElementById('toastMsg').textContent = msg;
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 3000);
  }

  // ── Web3Forms submission helper (used by both forms) ──
  async function sendToWeb3Forms(form, btn, successMsg, onSuccess) {
    const key = form.querySelector('[name="access_key"]').value;
    if (!key || key === "YOUR_ACCESS_KEY_HERE") {
      showToast("Form not yet connected — add your Web3Forms access key.");
      return;
    }
    const originalText = btn.textContent;
    btn.disabled = true;
    btn.textContent = "Sending…";
    try {
      const res = await fetch("https://api.web3forms.com/submit", {
        method: "POST",
        headers: { "Content-Type": "application/json", Accept: "application/json" },
        body: JSON.stringify(Object.fromEntries(new FormData(form)))
      });
      const data = await res.json();
      if (data.success) {
        showToast(successMsg);
        form.reset();
        if (onSuccess) onSuccess();
      } else {
        showToast("Something went wrong. Please try WhatsApp or email instead.");
      }
    } catch (err) {
      showToast("Network error — please try WhatsApp or email instead.");
    } finally {
      btn.disabled = false;
      btn.textContent = originalText;
    }
  }

  document.getElementById('enquiryForm').addEventListener('submit', function(e) {
    e.preventDefault();
    sendToWeb3Forms(this, document.getElementById('enquirySubmitBtn'), "Enquiry sent! We'll contact you within 2 hours.");
  });

  document.getElementById('quoteForm').addEventListener('submit', function(e) {
    e.preventDefault();
    sendToWeb3Forms(this, document.getElementById('quoteSubmitBtn'), "Quote request sent! We'll contact you within 2 hours.", closeModal);
  });

  // ── Smooth scroll ──
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if(target){ e.preventDefault(); target.scrollIntoView({behavior:'smooth'}); }
    });
  });
</script>
</body>
</html>