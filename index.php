<?php
  // Basic site settings
  $site_title = "Money Smarts for Kids";
  $tagline = "A kid‑friendly course about money";
  $year = date('Y');
?>
<!doctype html>
<html lang="en" class="no-js" data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($site_title); ?></title>
  <meta name="description" content="A simple, kid‑friendly personal finance website covering budgeting, saving, credit, investing, paychecks, taxes, and paying for college.">
  <meta name="theme-color" content="#4f46e5">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #ffffff;
      --text: #0f172a; /* slate-900 */
      --muted: #475569; /* slate-600 */
      --brand: #4f46e5; /* indigo-600 */
      --brand-2: #06b6d4; /* cyan-500 */
      --card: #f8fafc; /* slate-50 */
      --ring: rgba(79,70,229,.35);
      --accent: #22c55e; /* green-500 */
      --warning: #f59e0b; /* amber-500 */
      --danger: #ef4444; /* red-500 */
      --link: #2563eb; /* blue-600 */
      --shadow: 0 10px 20px rgba(2,6,23,.08), 0 2px 6px rgba(2,6,23,.06);
      --radius: 18px;
    }
    [data-theme="dark"] {
      --bg: #0b1220; /* near slate-950 */
      --text: #e5e7eb; /* slate-200 */
      --muted: #94a3b8; /* slate-400 */
      --brand: #818cf8; /* indigo-400 */
      --brand-2: #22d3ee; /* cyan-400 */
      --card: #0f172a; /* slate-900 */
      --ring: rgba(129,140,248,.35);
      --link: #93c5fd; /* blue-300 */
      --shadow: 0 10px 24px rgba(148,163,184,.12), 0 2px 8px rgba(148,163,184,.08);
    }

    /* Base */
    html { scroll-behavior: smooth; }
    body {
      margin: 0;
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
      color: var(--text);
      background: linear-gradient(180deg, rgba(79,70,229,.06), rgba(6,182,212,.06)) fixed, var(--bg);
      line-height: 1.6;
    }
    .brand-font { font-family: "Baloo 2", system-ui, cursive; }

    /* Utility */
    .container { width: min(1100px, 92%); margin-inline: auto; }
    .grid { display: grid; gap: 1.25rem; }
    .grid-2 { grid-template-columns: repeat(2, minmax(0,1fr)); }
    .grid-3 { grid-template-columns: repeat(3, minmax(0,1fr)); }
    @media (max-width: 900px){ .grid-3{ grid-template-columns: 1fr 1fr; } }
    @media (max-width: 700px){ .grid-2, .grid-3{ grid-template-columns: 1fr; } }

    .card {
      background: var(--card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 1.25rem 1.25rem 1rem;
      border: 1px solid rgba(2,6,23,.06);
    }
    .card h3 { margin: 0 0 .5rem; }
    .badge { display:inline-flex; align-items:center; gap:.5rem; font-weight:700; font-size:.95rem; }
    .badge .dot { width:.65rem; height:.65rem; border-radius:999px; background: var(--brand); box-shadow:0 0 0 3px var(--ring); }

    /* Header / Nav */
    .skip { position: absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden; }
    .skip:focus{ position:static; width:auto; height:auto; padding:.5rem 1rem; background:#fff; border-radius:8px; box-shadow:var(--shadow); }

    .nav {
      position: sticky; top: 0; z-index: 30;
      background: linear-gradient(90deg, var(--brand), var(--brand-2));
      color: #fff;
      box-shadow: 0 8px 20px rgba(79,70,229,.25);
    }
    .nav-inner { display:flex; align-items:center; justify-content:space-between; padding:.6rem 0; }
    .brand { display:flex; align-items:center; gap:.7rem; text-decoration:none; color:inherit; }
    .brand .logo { width:38px; height:38px; border-radius:12px; background:#fff; display:grid; place-items:center; font-size:1.35rem; color:#111; box-shadow:inset 0 -2px 6px rgba(0,0,0,.08); }
    .brand .name { font-weight:800; letter-spacing:.2px; }
    .tagline { opacity:.9; font-size:.9rem; }
    .nav a.link { color:#fff; text-decoration:none; font-weight:600; opacity:.95; }
    .links { display:flex; gap:1rem; align-items:center; }
    .links button.link { padding:.45rem .7rem; border-radius:10px; border:0; background:transparent; color:#fff; font-weight:700; cursor:pointer; }
    .links button.link[aria-selected="true"] { background: rgba(255,255,255,.18); }
    .links button.link:hover { background: rgba(255,255,255,.14); }
    .actions { display:flex; gap:.5rem; align-items:center; }
    .btn {
      border: 0; cursor: pointer; font-weight:700; border-radius: 12px; padding:.55rem .85rem; transition: .15s transform ease;
    }
    .btn:active { transform: translateY(1px); }
    .btn-ghost { background: rgba(255,255,255,.14); color:#fff; }
    .btn-ghost:hover{ background: rgba(255,255,255,.22); }
    .btn-solid { background: #fff; color:#111; box-shadow: 0 6px 14px rgba(255,255,255,.25); }

    /* Hero */
    .hero { padding: 2.25rem 0 1.25rem; }
    .hero .headline { font-size: clamp(1.8rem, 2.6vw + 1rem, 3rem); margin: .25rem 0; }
    .hero .sub { color: var(--muted); max-width: 65ch; }
    .hero .cta { margin-top: 1rem; display:flex; gap:.75rem; flex-wrap: wrap; }

    /* Tabs */
    .tabs { margin-top: .75rem; }
    .tablist { display:flex; gap:.5rem; flex-wrap: wrap; }
    .tablist .tab {
      appearance:none; border:1px solid rgba(2,6,23,.12); background: var(--card);
      border-radius: 12px; padding:.55rem .85rem; font-weight:700; cursor:pointer; box-shadow: var(--shadow);
    }
    .tab[aria-selected="true"] { outline: 3px solid var(--ring); border-color: transparent; }
    .tabpanel { display:none; margin-top:1rem; }
    .tabpanel[data-active="true"] { display:block; }

    /* Section */
    section { scroll-margin-top: 90px; padding: 1.25rem 0 1.5rem; }
    section .title { display:flex; align-items:center; gap:.6rem; font-size:1.25rem; margin:0 0 .75rem; }
    .title .emoji { font-size:1.4rem; }
    .bullets { margin:.5rem 0 0 0; padding-left: 1.15rem; }
    .bullets li { margin:.35rem 0; }
    details.accordion { margin-top:.6rem; background: rgba(2,6,23,.03); padding:.75rem .9rem; border-radius:12px; border: 1px dashed rgba(2,6,23,.12); }
    details summary { cursor:pointer; font-weight:700; color: var(--muted); }

    /* Footer */
    footer { margin: 2rem 0 3rem; color: var(--muted); font-size:.95rem; }

    /* Back to top */
    .to-top { position: fixed; right: 1rem; bottom: 1rem; z-index: 40; }

    /* Print */
    @media print {
      .nav, .to-top, .btn, .actions, .cta, .tablist { display:none !important; }
      body { background: #fff; }
      section { break-inside: avoid; }
    }
  </style>
</head>
<body>
  <a class="skip" href="#content">Skip to content</a>
  <!-- Nav -->
  <nav class="nav">
    <div class="container nav-inner">
      <a class="brand" href="#top" aria-label="Home">
        <span class="logo" aria-hidden="true">💰</span>
        <span class="name brand-font"><?php echo htmlspecialchars($site_title); ?></span>
      </a>
      <div class="links" role="tablist" aria-label="Primary Tabs" id="primaryTabs">
        <button class="link" role="tab" id="tab-units" aria-controls="panel-units" aria-selected="true" tabindex="0">Units</button>
        <button class="link" role="tab" id="tab-founders" aria-controls="panel-founders" aria-selected="false" tabindex="-1">Founders</button>
        <button class="link" role="tab" id="tab-material" aria-controls="panel-material" aria-selected="false" tabindex="-1">Material</button>
        <button class="link" role="tab" id="tab-goal" aria-controls="panel-goal" aria-selected="false" tabindex="-1">Goal</button>
      </div>
      <div class="actions">
        <button class="btn btn-ghost" id="toggleTheme" aria-pressed="false" aria-label="Toggle dark mode">🌙</button>
        <button class="btn btn-solid" onclick="window.print()">🖨️ Print</button>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero container" id="top">
    <span class="badge"><span class="dot" aria-hidden="true"></span> Kid‑Friendly Money Course</span>
    <h1 class="headline brand-font"><?php echo htmlspecialchars($site_title); ?></h1>
    <p class="sub"><?php echo htmlspecialchars($tagline); ?> — designed with simple language, fun examples, and practical tips.</p>
    <div class="cta">
      <a href="#content" class="btn btn-solid">Start Learning</a>
      <button class="btn btn-ghost" data-focus-tab="tab-goal">Project Goal</button>
    </div>
  </header>

  <main id="content" class="container">

    <!-- Tabs -->
    <div class="tabs">
      <!-- Panels -->
      <section id="panel-units" class="tabpanel" role="tabpanel" aria-labelledby="tab-units" data-active="true">
        <h2 class="title"><span class="emoji">📚</span> Course Units</h2>
        <!-- Unit: Budgeting & Saving -->
        <div class="card">
          <h3>🏦 Budgeting & Saving</h3>
          <div class="grid grid-2">
            <div>
              <h4>Money Plan (Budget)</h4>
              <ul class="bullets">
                <li>Decide where your money goes <strong>before</strong> you spend it.</li>
                <li>Try the <strong>3 Jars</strong>: Spend, Save, Share.</li>
                <li>Separate <strong>needs</strong> and <strong>wants</strong>.</li>
                <li>Set a <strong>goal</strong> (e.g., save $50 for a bike helmet).</li>
              </ul>
            </div>
            <div>
              <h4>Smart Saving</h4>
              <ul class="bullets">
                <li>Build a tiny <strong>emergency fund</strong> for surprises.</li>
                <li>Wait one week before buying a want.</li>
                <li>Track coins with a simple list or sticker chart.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Interest, Credit, Debt, Housing, Cars -->
        <div class="card">
          <h3>💳 Interest, Credit, Debt, Housing & Cars</h3>
          <div class="grid grid-3">
            <div>
              <h4>Interest</h4>
              <ul class="bullets">
                <li><strong>Good</strong>: Bank pays you for saving.</li>
                <li><strong>Bad</strong>: Owe extra when you borrow.</li>
                <li><strong>Compound</strong>: Interest earns interest.</li>
              </ul>
            </div>
            <div>
              <h4>Credit & Debt</h4>
              <ul class="bullets">
                <li><strong>Credit score</strong> = money report card.</li>
                <li>Keep balances low; pay on time.</li>
              </ul>
            </div>
            <div>
              <h4>Housing & Cars</h4>
              <ul class="bullets">
                <li>Rent vs Buy basics.</li>
                <li>Mortgage = long house loan.</li>
                <li>Cars: buy vs lease; don’t forget gas & repairs.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Investing & Retirement -->
        <div class="card">
          <h3>🌱 Investing & Retirement</h3>
          <div class="grid grid-2">
            <div>
              <h4>Investing Basics</h4>
              <ul class="bullets">
                <li>Stocks = tiny slices of companies.</li>
                <li>Bonds = lending money for interest.</li>
                <li>Diversify: don’t put all eggs in one basket.</li>
              </ul>
            </div>
            <div>
              <h4>Retirement</h4>
              <ul class="bullets">
                <li>401(k) & IRA are for future‑you.</li>
                <li>Starting early makes a big difference.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Paychecks & Benefits -->
        <div class="card">
          <h3>🧾 Paychecks & Benefits</h3>
          <div class="grid grid-2">
            <div>
              <h4>Paychecks</h4>
              <ul class="bullets">
                <li>Gross = whole pizza; Net = slices after taxes.</li>
                <li>Pay stubs show hours, rate, deductions.</li>
              </ul>
            </div>
            <div>
              <h4>Benefits</h4>
              <ul class="bullets">
                <li>Health insurance, retirement match, PTO.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Taxes & College -->
        <div class="grid grid-2">
          <div class="card">
            <h3>🏛️ Taxes</h3>
            <ul class="bullets">
              <li>Taxes pay for schools, parks, and roads.</li>
              <li>Sales tax (on candy), income tax (on paychecks).</li>
            </ul>
          </div>
          <div class="card">
            <h3>🎓 Paying for College</h3>
            <ul class="bullets">
              <li>Scholarships/grants = free money.</li>
              <li>Work‑study = part‑time job at school.</li>
              <li>Loans = borrow now, repay later.</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="panel-founders" class="tabpanel" role="tabpanel" aria-labelledby="tab-founders">
        <h2 class="title"><span class="emoji">🧑‍🤝‍🧑</span> Founders</h2>
        <div class="grid grid-2">
          <div class="card">
            <h3>Our Story</h3>
            <p>We started <strong><?php echo htmlspecialchars($site_title); ?></strong> to make money lessons <em>simple</em>, <em>friendly</em>, and <em>actionable</em> for kids and families. We believe small habits create big results.</p>
            <ul class="bullets">
              <li>Kid‑tested activities and examples</li>
              <li>Plain‑language explanations</li>
              <li>Family‑first approach</li>
            </ul>
          </div>
          <div class="card">
            <h3>Meet the Team</h3>
            <ul class="bullets">
              <li><strong>Founder A</strong> — Educator & curriculum designer</li>
              <li><strong>Founder B</strong> — Parent & financial coach</li>
              <li><strong>Advisor</strong> — Youth programs and mentoring</li>
            </ul>
            <details class="accordion"><summary>Want to be a volunteer?</summary>
              <p>Reach out to join pilots, review content, or help local workshops.</p>
            </details>
          </div>
        </div>
      </section>

      <section id="panel-material" class="tabpanel" role="tabpanel" aria-labelledby="tab-material">
        <h2 class="title"><span class="emoji">📦</span> Material</h2>
        <div class="grid grid-3">
          <div class="card">
            <h3>Lesson Handouts</h3>
            <ul class="bullets">
              <li>3‑Jar Budget worksheet (Spend/Save/Share)</li>
              <li>Wants vs Needs sorting game</li>
              <li>Interest: Good vs Bad mini‑poster</li>
            </ul>
          </div>
          <div class="card">
            <h3>Activities</h3>
            <ul class="bullets">
              <li>Sticker‑chart savings tracker</li>
              <li>Timeline: $5/week for 10 weeks</li>
              <li>Classroom coin‑count challenge</li>
            </ul>
          </div>
          <div class="card">
            <h3>Family Guides</h3>
            <ul class="bullets">
              <li>Talking about money at home</li>
              <li>Setting simple savings matches</li>
              <li>Comparing colleges by net cost</li>
            </ul>
          </div>
        </div>
        <details class="accordion"><summary>Print All</summary>
          <p>Use the <strong>🖨️ Print</strong> button in the top‑right to print this page cleanly.</p>
        </details>
      </section>

      <section id="panel-goal" class="tabpanel" role="tabpanel" aria-labelledby="tab-goal">
        <h2 class="title"><span class="emoji">🎯</span> Project Goal</h2>
        <div class="card">
          <h3>Why We Exist</h3>
          <p>Our goal is to help kids build <strong>healthy money habits</strong> early: budgeting, saving, smart borrowing, and long‑term investing — all explained in kid‑friendly language with hands‑on practice.</p>
          <ul class="bullets">
            <li>Make finance <strong>approachable</strong> and <strong>fun</strong></li>
            <li>Promote <strong>family conversations</strong> about money</li>
            <li>Encourage <strong>action</strong> through simple activities</li>
          </ul>
        </div>
        <div class="card">
          <h3>How We Measure Success</h3>
          <ul class="bullets">
            <li>Kids can explain wants vs needs</li>
            <li>Families create a 3‑Jar system at home</li>
            <li>Students track a savings goal for 4+ weeks</li>
          </ul>
        </div>
      </section>
    </div>

    <!-- Helpful footer callout -->
    <footer class="container">
      <div class="card" role="note" aria-label="Note">
        <strong class="brand-font">Learning together:</strong>
        <span style="display:block; color:var(--muted); margin-top:.3rem">Talk about money as a family. Let kids help make small choices and celebrate saving wins!</span>
      </div>
      <p style="text-align:center; margin-top:1rem">© <?php echo $year; ?> • <?php echo htmlspecialchars($site_title); ?> • Made with ❤️ and good money habits</p>
    </footer>
  </main>

  <!-- Back to top -->
  <button class="btn btn-solid to-top" onclick="window.scrollTo({top:0, behavior:'smooth'})" aria-label="Back to top">⬆️</button>

  <script>
    (function(){
      const root = document.documentElement;
      const btn = document.getElementById('toggleTheme');
      const saved = localStorage.getItem('theme');
      if(saved){ root.setAttribute('data-theme', saved); if(saved==='dark'){ btn.textContent='☀️'; btn.setAttribute('aria-pressed','true'); } }
      btn.addEventListener('click', () => {
        const cur = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        root.setAttribute('data-theme', cur);
        localStorage.setItem('theme', cur);
        btn.textContent = cur==='dark' ? '☀️' : '🌙';
        btn.setAttribute('aria-pressed', String(cur==='dark'));
      });
    })();

    // Accessible Tabs: roving tabindex + click/keyboard support
    (function(){
      const tablist = document.getElementById('primaryTabs');
      if(!tablist) return;
      const tabs = Array.from(tablist.querySelectorAll('[role="tab"]'));
      const panels = tabs.map(t => document.getElementById(t.getAttribute('aria-controls')));

      function activateTab(tab){
        tabs.forEach(t => { t.setAttribute('aria-selected','false'); t.tabIndex = -1; });
        panels.forEach(p => p && p.setAttribute('data-active','false'));
        tab.setAttribute('aria-selected','true');
        tab.tabIndex = 0;
        const panel = document.getElementById(tab.getAttribute('aria-controls'));
        if(panel){ panel.setAttribute('data-active','true'); }
        tab.focus();
      }

      // Click
      tabs.forEach(tab => tab.addEventListener('click', () => activateTab(tab)));

      // Keyboard
      tablist.addEventListener('keydown', (e) => {
        const idx = tabs.findIndex(t => t.getAttribute('aria-selected')==='true');
        if(['ArrowRight','ArrowLeft','Home','End'].includes(e.key)) e.preventDefault();
        if(e.key==='ArrowRight') activateTab(tabs[(idx+1)%tabs.length]);
        if(e.key==='ArrowLeft') activateTab(tabs[(idx-1+tabs.length)%tabs.length]);
        if(e.key==='Home') activateTab(tabs[0]);
        if(e.key==='End') activateTab(tabs[tabs.length-1]);
      });

      // CTA helper to jump to a tab
      document.querySelectorAll('[data-focus-tab]').forEach(btn => {
        btn.addEventListener('click', () => {
          const id = btn.getAttribute('data-focus-tab');
          const t = document.getElementById(id);
          if(t) activateTab(t);
          document.getElementById('content').scrollIntoView({behavior:'smooth'});
        });
      });
    })();
  </script>
</body>
</html>
<?php
  // Basic site settings
  $site_title = "Money Smarts for Kids";
  $tagline = "A kid‑friendly course about money";
  $year = date('Y');
?>
<!doctype html>
<html lang="en" class="no-js" data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($site_title); ?></title>
  <meta name="description" content="A simple, kid‑friendly personal finance website covering budgeting, saving, credit, investing, paychecks, taxes, and paying for college.">
  <meta name="theme-color" content="#4f46e5">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #ffffff;
      --text: #0f172a; /* slate-900 */
      --muted: #475569; /* slate-600 */
      --brand: #4f46e5; /* indigo-600 */
      --brand-2: #06b6d4; /* cyan-500 */
      --card: #f8fafc; /* slate-50 */
      --ring: rgba(79,70,229,.35);
      --accent: #22c55e; /* green-500 */
      --warning: #f59e0b; /* amber-500 */
      --danger: #ef4444; /* red-500 */
      --link: #2563eb; /* blue-600 */
      --shadow: 0 10px 20px rgba(2,6,23,.08), 0 2px 6px rgba(2,6,23,.06);
      --radius: 18px;
    }
    [data-theme="dark"] {
      --bg: #0b1220; /* near slate-950 */
      --text: #e5e7eb; /* slate-200 */
      --muted: #94a3b8; /* slate-400 */
      --brand: #818cf8; /* indigo-400 */
      --brand-2: #22d3ee; /* cyan-400 */
      --card: #0f172a; /* slate-900 */
      --ring: rgba(129,140,248,.35);
      --link: #93c5fd; /* blue-300 */
      --shadow: 0 10px 24px rgba(148,163,184,.12), 0 2px 8px rgba(148,163,184,.08);
    }

    /* Base */
    html { scroll-behavior: smooth; }
    body {
      margin: 0;
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
      color: var(--text);
      background: linear-gradient(180deg, rgba(79,70,229,.06), rgba(6,182,212,.06)) fixed, var(--bg);
      line-height: 1.6;
    }
    .brand-font { font-family: "Baloo 2", system-ui, cursive; }

    /* Utility */
    .container { width: min(1100px, 92%); margin-inline: auto; }
    .grid { display: grid; gap: 1.25rem; }
    .grid-2 { grid-template-columns: repeat(2, minmax(0,1fr)); }
    .grid-3 { grid-template-columns: repeat(3, minmax(0,1fr)); }
    @media (max-width: 900px){ .grid-3{ grid-template-columns: 1fr 1fr; } }
    @media (max-width: 700px){ .grid-2, .grid-3{ grid-template-columns: 1fr; } }

    .card {
      background: var(--card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 1.25rem 1.25rem 1rem;
      border: 1px solid rgba(2,6,23,.06);
    }
    .card h3 { margin: 0 0 .5rem; }
    .badge { display:inline-flex; align-items:center; gap:.5rem; font-weight:700; font-size:.95rem; }
    .badge .dot { width:.65rem; height:.65rem; border-radius:999px; background: var(--brand); box-shadow:0 0 0 3px var(--ring); }

    /* Header / Nav */
    .skip { position: absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden; }
    .skip:focus{ position:static; width:auto; height:auto; padding:.5rem 1rem; background:#fff; border-radius:8px; box-shadow:var(--shadow); }

    .nav {
      position: sticky; top: 0; z-index: 30;
      background: linear-gradient(90deg, var(--brand), var(--brand-2));
      color: #fff;
      box-shadow: 0 8px 20px rgba(79,70,229,.25);
    }
    .nav-inner { display:flex; align-items:center; justify-content:space-between; padding:.6rem 0; }
    .brand { display:flex; align-items:center; gap:.7rem; text-decoration:none; color:inherit; }
    .brand .logo { width:38px; height:38px; border-radius:12px; background:#fff; display:grid; place-items:center; font-size:1.35rem; color:#111; box-shadow:inset 0 -2px 6px rgba(0,0,0,.08); }
    .brand .name { font-weight:800; letter-spacing:.2px; }
    .tagline { opacity:.9; font-size:.9rem; }
    .nav a.link { color:#fff; text-decoration:none; font-weight:600; opacity:.95; }
    .links { display:flex; gap:1rem; align-items:center; }
    .links button.link { padding:.45rem .7rem; border-radius:10px; border:0; background:transparent; color:#fff; font-weight:700; cursor:pointer; }
    .links button.link[aria-selected="true"] { background: rgba(255,255,255,.18); }
    .links button.link:hover { background: rgba(255,255,255,.14); }
    .actions { display:flex; gap:.5rem; align-items:center; }
    .btn {
      border: 0; cursor: pointer; font-weight:700; border-radius: 12px; padding:.55rem .85rem; transition: .15s transform ease;
    }
    .btn:active { transform: translateY(1px); }
    .btn-ghost { background: rgba(255,255,255,.14); color:#fff; }
    .btn-ghost:hover{ background: rgba(255,255,255,.22); }
    .btn-solid { background: #fff; color:#111; box-shadow: 0 6px 14px rgba(255,255,255,.25); }

    /* Hero */
    .hero { padding: 2.25rem 0 1.25rem; }
    .hero .headline { font-size: clamp(1.8rem, 2.6vw + 1rem, 3rem); margin: .25rem 0; }
    .hero .sub { color: var(--muted); max-width: 65ch; }
    .hero .cta { margin-top: 1rem; display:flex; gap:.75rem; flex-wrap: wrap; }

    /* Tabs */
    .tabs { margin-top: .75rem; }
    .tablist { display:flex; gap:.5rem; flex-wrap: wrap; }
    .tablist .tab {
      appearance:none; border:1px solid rgba(2,6,23,.12); background: var(--card);
      border-radius: 12px; padding:.55rem .85rem; font-weight:700; cursor:pointer; box-shadow: var(--shadow);
    }
    .tab[aria-selected="true"] { outline: 3px solid var(--ring); border-color: transparent; }
    .tabpanel { display:none; margin-top:1rem; }
    .tabpanel[data-active="true"] { display:block; }

    /* Section */
    section { scroll-margin-top: 90px; padding: 1.25rem 0 1.5rem; }
    section .title { display:flex; align-items:center; gap:.6rem; font-size:1.25rem; margin:0 0 .75rem; }
    .title .emoji { font-size:1.4rem; }
    .bullets { margin:.5rem 0 0 0; padding-left: 1.15rem; }
    .bullets li { margin:.35rem 0; }
    details.accordion { margin-top:.6rem; background: rgba(2,6,23,.03); padding:.75rem .9rem; border-radius:12px; border: 1px dashed rgba(2,6,23,.12); }
    details summary { cursor:pointer; font-weight:700; color: var(--muted); }

    /* Footer */
    footer { margin: 2rem 0 3rem; color: var(--muted); font-size:.95rem; }

    /* Back to top */
    .to-top { position: fixed; right: 1rem; bottom: 1rem; z-index: 40; }

    /* Print */
    @media print {
      .nav, .to-top, .btn, .actions, .cta, .tablist { display:none !important; }
      body { background: #fff; }
      section { break-inside: avoid; }
    }
  </style>
</head>
<body>
  <a class="skip" href="#content">Skip to content</a>
  <!-- Nav -->
  <nav class="nav">
    <div class="container nav-inner">
      <a class="brand" href="#top" aria-label="Home">
        <span class="logo" aria-hidden="true">💰</span>
        <span class="name brand-font"><?php echo htmlspecialchars($site_title); ?></span>
      </a>
      <div class="links" role="tablist" aria-label="Primary Tabs" id="primaryTabs">
        <button class="link" role="tab" id="tab-units" aria-controls="panel-units" aria-selected="true" tabindex="0">Units</button>
        <button class="link" role="tab" id="tab-founders" aria-controls="panel-founders" aria-selected="false" tabindex="-1">Founders</button>
        <button class="link" role="tab" id="tab-material" aria-controls="panel-material" aria-selected="false" tabindex="-1">Material</button>
        <button class="link" role="tab" id="tab-goal" aria-controls="panel-goal" aria-selected="false" tabindex="-1">Goal</button>
      </div>
      <div class="actions">
        <button class="btn btn-ghost" id="toggleTheme" aria-pressed="false" aria-label="Toggle dark mode">🌙</button>
        <button class="btn btn-solid" onclick="window.print()">🖨️ Print</button>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero container" id="top">
    <span class="badge"><span class="dot" aria-hidden="true"></span> Kid‑Friendly Money Course</span>
    <h1 class="headline brand-font"><?php echo htmlspecialchars($site_title); ?></h1>
    <p class="sub"><?php echo htmlspecialchars($tagline); ?> — designed with simple language, fun examples, and practical tips.</p>
    <div class="cta">
      <a href="#content" class="btn btn-solid">Start Learning</a>
      <button class="btn btn-ghost" data-focus-tab="tab-goal">Project Goal</button>
    </div>
  </header>

  <main id="content" class="container">

    <!-- Tabs -->
    <div class="tabs">
      <!-- Panels -->
      <section id="panel-units" class="tabpanel" role="tabpanel" aria-labelledby="tab-units" data-active="true">
        <h2 class="title"><span class="emoji">📚</span> Course Units</h2>
        <!-- Unit: Budgeting & Saving -->
        <div class="card">
          <h3>🏦 Budgeting & Saving</h3>
          <div class="grid grid-2">
            <div>
              <h4>Money Plan (Budget)</h4>
              <ul class="bullets">
                <li>Decide where your money goes <strong>before</strong> you spend it.</li>
                <li>Try the <strong>3 Jars</strong>: Spend, Save, Share.</li>
                <li>Separate <strong>needs</strong> and <strong>wants</strong>.</li>
                <li>Set a <strong>goal</strong> (e.g., save $50 for a bike helmet).</li>
              </ul>
            </div>
            <div>
              <h4>Smart Saving</h4>
              <ul class="bullets">
                <li>Build a tiny <strong>emergency fund</strong> for surprises.</li>
                <li>Wait one week before buying a want.</li>
                <li>Track coins with a simple list or sticker chart.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Interest, Credit, Debt, Housing, Cars -->
        <div class="card">
          <h3>💳 Interest, Credit, Debt, Housing & Cars</h3>
          <div class="grid grid-3">
            <div>
              <h4>Interest</h4>
              <ul class="bullets">
                <li><strong>Good</strong>: Bank pays you for saving.</li>
                <li><strong>Bad</strong>: Owe extra when you borrow.</li>
                <li><strong>Compound</strong>: Interest earns interest.</li>
              </ul>
            </div>
            <div>
              <h4>Credit & Debt</h4>
              <ul class="bullets">
                <li><strong>Credit score</strong> = money report card.</li>
                <li>Keep balances low; pay on time.</li>
              </ul>
            </div>
            <div>
              <h4>Housing & Cars</h4>
              <ul class="bullets">
                <li>Rent vs Buy basics.</li>
                <li>Mortgage = long house loan.</li>
                <li>Cars: buy vs lease; don’t forget gas & repairs.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Investing & Retirement -->
        <div class="card">
          <h3>🌱 Investing & Retirement</h3>
          <div class="grid grid-2">
            <div>
              <h4>Investing Basics</h4>
              <ul class="bullets">
                <li>Stocks = tiny slices of companies.</li>
                <li>Bonds = lending money for interest.</li>
                <li>Diversify: don’t put all eggs in one basket.</li>
              </ul>
            </div>
            <div>
              <h4>Retirement</h4>
              <ul class="bullets">
                <li>401(k) & IRA are for future‑you.</li>
                <li>Starting early makes a big difference.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Paychecks & Benefits -->
        <div class="card">
          <h3>🧾 Paychecks & Benefits</h3>
          <div class="grid grid-2">
            <div>
              <h4>Paychecks</h4>
              <ul class="bullets">
                <li>Gross = whole pizza; Net = slices after taxes.</li>
                <li>Pay stubs show hours, rate, deductions.</li>
              </ul>
            </div>
            <div>
              <h4>Benefits</h4>
              <ul class="bullets">
                <li>Health insurance, retirement match, PTO.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Unit: Taxes & College -->
        <div class="grid grid-2">
          <div class="card">
            <h3>🏛️ Taxes</h3>
            <ul class="bullets">
              <li>Taxes pay for schools, parks, and roads.</li>
              <li>Sales tax (on candy), income tax (on paychecks).</li>
            </ul>
          </div>
          <div class="card">
            <h3>🎓 Paying for College</h3>
            <ul class="bullets">
              <li>Scholarships/grants = free money.</li>
              <li>Work‑study = part‑time job at school.</li>
              <li>Loans = borrow now, repay later.</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="panel-founders" class="tabpanel" role="tabpanel" aria-labelledby="tab-founders">
        <h2 class="title"><span class="emoji">🧑‍🤝‍🧑</span> Founders</h2>
        <div class="grid grid-2">
          <div class="card">
            <h3>Our Story</h3>
            <p>We started <strong><?php echo htmlspecialchars($site_title); ?></strong> to make money lessons <em>simple</em>, <em>friendly</em>, and <em>actionable</em> for kids and families. We believe small habits create big results.</p>
            <ul class="bullets">
              <li>Kid‑tested activities and examples</li>
              <li>Plain‑language explanations</li>
              <li>Family‑first approach</li>
            </ul>
          </div>
          <div class="card">
            <h3>Meet the Team</h3>
            <ul class="bullets">
              <li><strong>Founder A</strong> — Educator & curriculum designer</li>
              <li><strong>Founder B</strong> — Parent & financial coach</li>
              <li><strong>Advisor</strong> — Youth programs and mentoring</li>
            </ul>
            <details class="accordion"><summary>Want to be a volunteer?</summary>
              <p>Reach out to join pilots, review content, or help local workshops.</p>
            </details>
          </div>
        </div>
      </section>

      <section id="panel-material" class="tabpanel" role="tabpanel" aria-labelledby="tab-material">
        <h2 class="title"><span class="emoji">📦</span> Material</h2>
        <div class="grid grid-3">
          <div class="card">
            <h3>Lesson Handouts</h3>
            <ul class="bullets">
              <li>3‑Jar Budget worksheet (Spend/Save/Share)</li>
              <li>Wants vs Needs sorting game</li>
              <li>Interest: Good vs Bad mini‑poster</li>
            </ul>
          </div>
          <div class="card">
            <h3>Activities</h3>
            <ul class="bullets">
              <li>Sticker‑chart savings tracker</li>
              <li>Timeline: $5/week for 10 weeks</li>
              <li>Classroom coin‑count challenge</li>
            </ul>
          </div>
          <div class="card">
            <h3>Family Guides</h3>
            <ul class="bullets">
              <li>Talking about money at home</li>
              <li>Setting simple savings matches</li>
              <li>Comparing colleges by net cost</li>
            </ul>
          </div>
        </div>
        <details class="accordion"><summary>Print All</summary>
          <p>Use the <strong>🖨️ Print</strong> button in the top‑right to print this page cleanly.</p>
        </details>
      </section>

      <section id="panel-goal" class="tabpanel" role="tabpanel" aria-labelledby="tab-goal">
        <h2 class="title"><span class="emoji">🎯</span> Project Goal</h2>
        <div class="card">
          <h3>Why We Exist</h3>
          <p>Our goal is to help kids build <strong>healthy money habits</strong> early: budgeting, saving, smart borrowing, and long‑term investing — all explained in kid‑friendly language with hands‑on practice.</p>
          <ul class="bullets">
            <li>Make finance <strong>approachable</strong> and <strong>fun</strong></li>
            <li>Promote <strong>family conversations</strong> about money</li>
            <li>Encourage <strong>action</strong> through simple activities</li>
          </ul>
        </div>
        <div class="card">
          <h3>How We Measure Success</h3>
          <ul class="bullets">
            <li>Kids can explain wants vs needs</li>
            <li>Families create a 3‑Jar system at home</li>
            <li>Students track a savings goal for 4+ weeks</li>
          </ul>
        </div>
      </section>
    </div>

    <!-- Helpful footer callout -->
    <footer class="container">
      <div class="card" role="note" aria-label="Note">
        <strong class="brand-font">Learning together:</strong>
        <span style="display:block; color:var(--muted); margin-top:.3rem">Talk about money as a family. Let kids help make small choices and celebrate saving wins!</span>
      </div>
      <p style="text-align:center; margin-top:1rem">© <?php echo $year; ?> • <?php echo htmlspecialchars($site_title); ?> • Made with ❤️ and good money habits</p>
    </footer>
  </main>

  <!-- Back to top -->
  <button class="btn btn-solid to-top" onclick="window.scrollTo({top:0, behavior:'smooth'})" aria-label="Back to top">⬆️</button>

  <script>
    (function(){
      const root = document.documentElement;
      const btn = document.getElementById('toggleTheme');
      const saved = localStorage.getItem('theme');
      if(saved){ root.setAttribute('data-theme', saved); if(saved==='dark'){ btn.textContent='☀️'; btn.setAttribute('aria-pressed','true'); } }
      btn.addEventListener('click', () => {
        const cur = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        root.setAttribute('data-theme', cur);
        localStorage.setItem('theme', cur);
        btn.textContent = cur==='dark' ? '☀️' : '🌙';
        btn.setAttribute('aria-pressed', String(cur==='dark'));
      });
    })();

    // Accessible Tabs: roving tabindex + click/keyboard support
    (function(){
      const tablist = document.getElementById('primaryTabs');
      if(!tablist) return;
      const tabs = Array.from(tablist.querySelectorAll('[role="tab"]'));
      const panels = tabs.map(t => document.getElementById(t.getAttribute('aria-controls')));

      function activateTab(tab){
        tabs.forEach(t => { t.setAttribute('aria-selected','false'); t.tabIndex = -1; });
        panels.forEach(p => p && p.setAttribute('data-active','false'));
        tab.setAttribute('aria-selected','true');
        tab.tabIndex = 0;
        const panel = document.getElementById(tab.getAttribute('aria-controls'));
        if(panel){ panel.setAttribute('data-active','true'); }
        tab.focus();
      }

      // Click
      tabs.forEach(tab => tab.addEventListener('click', () => activateTab(tab)));

      // Keyboard
      tablist.addEventListener('keydown', (e) => {
        const idx = tabs.findIndex(t => t.getAttribute('aria-selected')==='true');
        if(['ArrowRight','ArrowLeft','Home','End'].includes(e.key)) e.preventDefault();
        if(e.key==='ArrowRight') activateTab(tabs[(idx+1)%tabs.length]);
        if(e.key==='ArrowLeft') activateTab(tabs[(idx-1+tabs.length)%tabs.length]);
        if(e.key==='Home') activateTab(tabs[0]);
        if(e.key==='End') activateTab(tabs[tabs.length-1]);
      });

      // CTA helper to jump to a tab
      document.querySelectorAll('[data-focus-tab]').forEach(btn => {
        btn.addEventListener('click', () => {
          const id = btn.getAttribute('data-focus-tab');
          const t = document.getElementById(id);
          if(t) activateTab(t);
          document.getElementById('content').scrollIntoView({behavior:'smooth'});
        });
      });
    })();
  </script>
</body>
</html>
