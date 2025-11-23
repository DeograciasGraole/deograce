<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your SaaS – Home</title>
  <style>
    /* Base reset + simple styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f9f9f9;
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    header {
      background: linear-gradient(135deg, #4f46e5, #3b82f6);
      color: white;
      padding: 60px 20px;
      text-align: center;
      position: relative;
    }
    header .container {
      max-width: 1200px;
      margin: 0 auto;
    }
    header h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    header p {
      font-size: 1.25rem;
      margin-bottom: 30px;
    }
    header .cta-btn {
      display: inline-block;
      padding: 12px 30px;
      font-size: 1.1rem;
      background: #10b981;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }
    header .cta-btn:hover {
      background: #059669;
    }
    /* Feature section */
    .features {
      padding: 80px 20px;
      background-color: #fff;
    }
    .features .container {
      max-width: 1000px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
    }
    .feature-card {
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s;
    }
    .feature-card:hover {
      transform: translateY(-5px);
    }
    .feature-card h3 {
      margin-bottom: 15px;
      font-size: 1.5rem;
      color: #4f46e5;
    }
    .feature-card p {
      font-size: 1rem;
      color: #555;
    }
    /* Testimonials */
    .testimonials {
      padding: 80px 20px;
      background: #f3f4f6;
    }
    .testimonials .container {
      max-width: 900px;
      margin: 0 auto;
      text-align: center;
    }
    .testimonials h2 {
      margin-bottom: 40px;
      font-size: 2rem;
      color: #4f46e5;
    }
    .testimonial {
      margin-bottom: 30px;
    }
    .testimonial p {
      font-style: italic;
      color: #555;
    }
    .testimonial .author {
      margin-top: 10px;
      font-weight: bold;
      color: #333;
    }
    /* Footer */
    footer {
      padding: 40px 20px;
      background: #1f2937;
      color: #d1d5db;
      text-align: center;
    }
    footer a {
      color: #10b981;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Scale smarter with **YourSaaS**</h1>
      <p>All‑in‑one platform to manage, automate, and grow your tech business without the headache.</p>
      <button class="cta-btn" id="signup-btn">Get Started</button>
    </div>
  </header>

  <section class="features">
    <div class="container">
      <div class="feature-card">
        <h3>Feature One</h3>
        <p>Automate your workflow with our powerful tool that saves you hours each day.</p>
      </div>
      <div class="feature-card">
        <h3>Feature Two</h3>
        <p>Track your performance in real time with customized dashboards.</p>
      </div>
      <div class="feature-card">
        <h3>Feature Three</h3>
        <p>Collaborate with your team seamlessly using our built-in communication tools.</p>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="container">
      <h2>What our users say</h2>
      <div class="testimonial">
        <p>"This SaaS changed how we run our business. Productivity has gone through the roof!"</p>
        <div class="author">— Jane Doe, CEO of StartupX</div>
      </div>
      <div class="testimonial">
        <p>"I love the dashboard. I get real-time insights and it’s super intuitive."</p>
        <div class="author">— John Smith, Product Manager</div>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 YourSaaS. <a href="#">Privacy Policy</a> · <a href="#">Terms</a></p>
  </footer>

  <script>
    // Basic JS for button click
    document.getElementById('signup-btn').addEventListener('click', function() {
      window.location.href = '/signup';
    });
  </script>
</body>
</html>
