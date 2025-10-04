<?php
  // Basic site settings
  $site_title = "Smart Start";
  $tagline = "A kid-friendly course about money";
  $year = date('Y');

  // Simple router: separate page indexes via ?tab=units|founders|material|goal
  $valid_tabs = ['units','founders','material','goal'];
  $tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : 'units';
  if(!in_array($tab, $valid_tabs, true)) { $tab = 'units'; }
  $tab_titles = [
    'units' => 'Units',
    'founders' => 'Founders',
    'material' => 'Material',
    'goal' => 'Goal'
  ];
  $page_title = $site_title . ' — ' . $tab_titles[$tab];
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="A simple, kid-friendly personal finance website covering budgeting, saving, credit, investing, paychecks, taxes, and paying for college.">
  <meta name="theme-color" content="#4f46e5">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #ffffff; --text: #0f172a; --muted: #475569; --brand: #4f46e5; --brand-2: #06b6d4; --card: #f8fafc; --link: #2563eb; --shadow: 0 10px 20px rgba(2,6,23,.08), 0 2px 6px rgba(2,6,23,.06); --radius: 18px;
    }
    body { margin: 0; font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial; color: var(--text); background: linear-gradient(180deg, rgba(79,70,229,.06), rgba(6,182,212,.06)) fixed, var(--bg); }
    .brand-font { font-family: "Baloo 2", system-ui, cursive; }

    .container { width: min(1100px, 92%); margin-inline: auto; }
    .card { background: var(--card); border-radius: var(--radius); box-shadow: var(--shadow); padding: 1.25rem; margin: 1rem 0; }
    .title { font-size:1.25rem; margin-bottom: .75rem; display:flex; align-items:center; gap:.6rem; }

    .nav { background: linear-gradient(90deg, var(--brand), var(--brand-2)); color:#fff; padding:.6rem 0; box-shadow: 0 8px 20px rgba(79,70,229,.25); }
    .nav-inner { display:flex; align-items:center; justify-content:space-between; }
    .brand { display:flex; align-items:center; gap:.7rem; text-decoration:none; color:inherit; }
    .logo { width:38px; height:38px; border-radius:12px; background:#fff; display:grid; place-items:center; font-size:1.35rem; color:#111; }

    .links { display:flex; gap:.25rem; flex-wrap:wrap; }
    .links a { color:#fff; text-decoration:none; font-weight:700; padding:.45rem .7rem; border-radius:10px; }
    .links a[aria-current="page"]{ background: rgba(255,255,255,.18); }

    header.header { padding: 1.25rem 0; }
    section { padding:1rem 0 2rem; }
    footer { text-align:center; margin:2rem 0; color:var(--muted); }
  </style>
</head>
<body>
  <nav class="nav">
    <div class="container nav-inner">
      <a class="brand" href="?tab=units"><span class="logo">💰</span><span class="brand-font"><?php echo htmlspecialchars($site_title); ?></span></a>
      <div class="links" role="navigation" aria-label="Primary">
        <a href="?tab=units" <?php echo $tab==='units'?'aria-current="page"':''; ?>>Units</a>
        <a href="?tab=founders" <?php echo $tab==='founders'?'aria-current="page"':''; ?>>Founders</a>
        <a href="?tab=material" <?php echo $tab==='material'?'aria-current="page"':''; ?>>Material</a>
        <a href="?tab=goal" <?php echo $tab==='goal'?'aria-current="page"':''; ?>>Goal</a>
      </div>
    </div>
  </nav>

  <header class="container header" id="top">
    <h1 class="brand-font"><?php echo htmlspecialchars($tab_titles[$tab]); ?></h1>
    <p><?php echo htmlspecialchars($site_title . ' — ' . $tagline); ?></p>
  </header>

  <main class="container">
  <?php if($tab==='units'): ?>
    <section>
      <h2 class="title">📚 Units</h2>
      <div class="card">
        <h3>Budgeting & Saving</h3>
        <p>Learn how to budget, save, and set goals.</p>
      </div>
      <div class="card">
        <h3>Interest, Credit, Debt, Housing & Cars</h3>
        <p>Understand borrowing, credit scores, and big purchases.</p>
      </div>
      <div class="card">
        <h3>Investing & Retirement</h3>
        <p>Basics of stocks, bonds, and planning for the future.</p>
      </div>
      <div class="card">
        <h3>Paychecks & Benefits</h3>
        <p>Learn about gross vs net pay, and employee benefits.</p>
      </div>
      <div class="card">
        <h3>Taxes & College</h3>
        <p>Why we pay taxes and how to plan for college costs.</p>
      </div>
    </section>
  <?php elseif($tab==='founders'): ?>
    <section>
      <h2 class="title">🧑‍🤝‍🧑 Founders</h2>
      <div class="card">
        <p>Meet the team behind <strong><?php echo htmlspecialchars($site_title); ?></strong>. Sahil Mehta, Sathvik Shivam, and Ved Meduri.</p>
      </div>
    </section>
  <?php elseif($tab==='material'): ?>
    <section>
      <h2 class="title">📦 Material</h2>
      <div class="card">
        <p>Access worksheets, activities, and other resources.</p>
      </div>
    </section>
  <?php elseif($tab==='goal'): ?>
    <section>
      <h2 class="title">🎯 Goal</h2>
      <div class="card">
        <p>Our goal is to teach kids healthy money habits in a fun and approachable way.</p>
      </div>
    </section>
  <?php endif; ?>
  </main>
</body>
</html>
