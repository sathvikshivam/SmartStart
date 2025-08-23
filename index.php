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
    .links a.link { padding:.45rem .7rem; border-radius:10px; }
    .links a.link:hover { background: rgba(255,255,255,.14); }
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
      .nav, .to-top, .btn, .actions, .cta { display:none !important; }
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
      <div class="links" role="navigation" aria-label="Primary">
        <a class="link" href="#budget">Budgeting & Saving</a>
        <a class="link" href="#credit">Interest/Credit/Debt/Housing/Cars</a>
        <a class="link" href="#invest">Investing & Retirement</a>
        <a class="link" href="#paychecks">Paychecks & Benefits</a>
        <a class="link" href="#taxes">Taxes</a>
        <a class="link" href="#college">Paying for College</a>
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
      <a href="#budget" class="btn btn-solid">Start Learning</a>
      <a href="#college" class="btn btn-ghost">Jump to College</a>
    </div>
  </header>

  <main id="content" class="container">
    <!-- Section 1 -->
    <section id="budget">
      <h2 class="title"><span class="emoji">🏦</span> Budgeting & Saving</h2>
      <div class="grid grid-2">
        <div class="card">
          <h3>Money Plan (Budget)</h3>
          <ul class="bullets">
            <li>Decide where your money goes <strong>before</strong> you spend it.</li>
            <li>Try the <strong>3 Jars</strong>: Spend, Save, Share.</li>
            <li>Separate <strong>needs</strong> (must‑haves) and <strong>wants</strong> (nice‑to‑haves).</li>
            <li>Set a <strong>goal</strong> (e.g., save $50 for a bike helmet).</li>
          </ul>
          <details class="accordion"><summary>Try it!</summary>
            <ul class="bullets">
              <li>You get $10. Put $5 in Spend, $3 in Save, $2 in Share. What can you buy now? What are you saving for?</li>
            </ul>
          </details>
        </div>
        <div class="card">
          <h3>Smart Saving</h3>
          <ul class="bullets">
            <li>Build a tiny <strong>emergency fund</strong> for surprises (like a popped tire).</li>
            <li>Wait one week before buying a want — do you still want it?</li>
            <li>Turn off lights and pack snacks to save small amounts that add up.</li>
            <li>Track your coins in a simple list or sticker chart.</li>
          </ul>
          <details class="accordion"><summary>Family Tip</summary>
            <ul class="bullets"><li>Match your kid’s savings $1‑for‑$1 to motivate them.</li></ul>
          </details>
        </div>
      </div>
    </section>

    <!-- Section 2 -->
    <section id="credit">
      <h2 class="title"><span class="emoji">💳</span> Interest, Credit, Debt, Housing, and Cars</h2>
      <div class="grid grid-3">
        <div class="card">
          <h3>Interest</h3>
          <ul class="bullets">
            <li><strong>Good</strong>: Bank pays you extra for saving.</li>
            <li><strong>Bad</strong>: If you borrow and don’t pay, you owe extra.</li>
            <li><strong>Compound</strong>: Interest can earn more interest — like apples growing more apple trees.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Credit & Debt</h3>
          <ul class="bullets">
            <li><strong>Credit score</strong> = a grown‑up money report card.</li>
            <li><strong>Debt</strong> = money you owe; borrowing too much means less for fun later.</li>
            <li>Best habit: <strong>pay on time</strong> and keep balances low.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Housing & Cars</h3>
          <ul class="bullets">
            <li><strong>Renting</strong> a home is like borrowing a library book.</li>
            <li><strong>Buying</strong> a home means you keep it, but you must maintain it.</li>
            <li><strong>Mortgage</strong> = long loan for a house.</li>
            <li><strong>Cars</strong>: Buying = own it; Leasing = rent it. Don’t forget gas & repairs.</li>
          </ul>
        </div>
      </div>
      <details class="accordion"><summary>Quick Activity</summary>
        <ul class="bullets">
          <li>Make a mini poster: one side “Good Interest” (savings), other side “Bad Interest” (borrowing). Add examples.</li>
        </ul>
      </details>
    </section>

    <!-- Section 3 -->
    <section id="invest">
      <h2 class="title"><span class="emoji">🌱</span> Investing & Retirement</h2>
      <div class="grid grid-2">
        <div class="card">
          <h3>Investing Basics</h3>
          <ul class="bullets">
            <li><strong>Investing</strong> helps money grow over time.</li>
            <li><strong>Stocks</strong> = owning tiny slices of companies.</li>
            <li><strong>Bonds</strong> = lending money and getting a little extra back.</li>
            <li>Diversify: don’t put all your eggs in one basket.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Retirement</h3>
          <ul class="bullets">
            <li>Adults save so they don’t have to work forever.</li>
            <li><strong>401(k)</strong> & <strong>IRA</strong>: special accounts for future‑you.</li>
            <li><strong>Time is magic</strong>: starting early makes a big difference.</li>
          </ul>
          <details class="accordion"><summary>Try it!</summary>
            <ul class="bullets">
              <li>Draw a timeline: Save $5 each week for 10 weeks. How much will you have? What if the bank adds a little interest?</li>
            </ul>
          </details>
        </div>
      </div>
    </section>

    <!-- Section 4 -->
    <section id="paychecks">
      <h2 class="title"><span class="emoji">🧾</span> Paychecks & Benefits</h2>
      <div class="grid grid-2">
        <div class="card">
          <h3>Paycheck</h3>
          <ul class="bullets">
            <li>Like allowance for adults — money earned for work.</li>
            <li><strong>Gross</strong> pay = whole pizza; <strong>Net</strong> pay = slices after taxes.</li>
            <li>Pay stubs show hours worked, pay rate, and deductions.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Benefits</h3>
          <ul class="bullets">
            <li>Health insurance helps with doctor bills.</li>
            <li>Retirement match = boss adds money to savings.</li>
            <li>Paid time off = vacation days.</li>
          </ul>
        </div>
      </div>
      <details class="accordion"><summary>Mini Math</summary>
        <ul class="bullets">
          <li>If an adult earns $100 but pays $15 in taxes, <strong>net pay</strong> is $85.</li>
        </ul>
      </details>
    </section>

    <!-- Section 5 -->
    <section id="taxes">
      <h2 class="title"><span class="emoji">🏛️</span> Taxes</h2>
      <div class="grid grid-2">
        <div class="card">
          <h3>What Are Taxes?</h3>
          <ul class="bullets">
            <li>Money everyone chips in to pay for schools, parks, and roads.</li>
            <li>Examples: <strong>sales tax</strong> on candy, <strong>income tax</strong> on paychecks.</li>
            <li>People who earn more usually pay a bigger share.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Forms Adults Use</h3>
          <ul class="bullets">
            <li><strong>W‑2</strong>: shows how much someone earned.</li>
            <li><strong>1040</strong>: the main tax form to file with the government.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Section 6 -->
    <section id="college">
      <h2 class="title"><span class="emoji">🎓</span> Paying for College</h2>
      <div class="grid grid-3">
        <div class="card">
          <h3>What Costs Money?</h3>
          <ul class="bullets">
            <li>Tuition (classes), books, place to live, and food.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Ways to Pay</h3>
          <ul class="bullets">
            <li><strong>Scholarships & grants</strong>: free money.</li>
            <li><strong>Work‑study</strong>: part‑time job at school.</li>
            <li><strong>Loans</strong>: borrowed money you must repay later.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Smart Tips</h3>
          <ul class="bullets">
            <li>Complete the <strong>FAFSA</strong> for financial aid.</li>
            <li>Compare schools by their <strong>net cost</strong> (after aid), not sticker price.</li>
            <li>Borrow only what you truly need.</li>
          </ul>
        </div>
      </div>
      <details class="accordion"><summary>Conversation Starter</summary>
        <ul class="bullets">
          <li>Ask: “If I win a $500 scholarship, how would that change my plan?”</li>
        </ul>
      </details>
    </section>

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
  </script>
</body>
</html>
