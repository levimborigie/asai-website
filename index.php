<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azande Students Association in India</title>
  <meta name="description" content="Website for the Azande Students Association in India with student registration, events, updates, executives, and contact information.">
  <link rel="icon" href="assets/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header" id="top">
    <a class="brand" href="#home" aria-label="ASAI home">
      <img src="assets/logo.png" alt="Azande Students Association in India logo">
      <span>
        <strong>ASAI</strong>
        <small>Azande Students Association in India</small>
      </span>
    </a>

    <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <nav class="site-nav" aria-label="Primary navigation">
      <a href="#about">About</a>
      <a href="#registration">Registration</a>
      <a href="#programs">Programs</a>
      <a href="#updates">Updates</a>
      <a href="#events">Events</a>
      <a href="#gallery">Gallery</a>
      <a href="#executives">Executives</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="hero-media" aria-hidden="true">
        <div class="flag-ribbon ribbon-one"></div>
        <div class="flag-ribbon ribbon-two"></div>
        <div class="hero-logo-wrap">
          <img src="assets/logo.png" alt="">
        </div>
      </div>
      <div class="hero-copy">
        <p class="eyebrow">Student community &middot; Culture &middot; Career growth</p>
        <h1>Azande Students Association in India</h1>
        <p class="lead">A student-led home for Azande students studying across India, built around academic support, professional development, cultural pride, event planning, and lifelong community.</p>
        <div class="hero-actions">
          <a class="button primary" href="#registration">Register as a Student</a>
          <a class="button secondary" href="#events">View Events</a>
        </div>
      </div>
      <div class="hero-strip" aria-label="Association highlights">
        <span>Student registration</span>
        <span>Career guidance</span>
        <span>Event scheduling</span>
        <span>Community updates</span>
      </div>
    </section>

    <section class="section about-section" id="about">
      <div class="section-heading">
        <p class="eyebrow">About ASAI</p>
        <h2>Supporting Azande students from arrival to graduation and beyond.</h2>
      </div>
      <div class="about-grid">
        <article>
          <h3>Who We Are</h3>
          <p>The Azande Students Association in India represents members of the Azande community, many from South Sudan, who are pursuing studies in Indian universities and colleges.</p>
        </article>
        <article>
          <h3>What We Do</h3>
          <p>ASAI helps students connect, register with the association, learn from each other, celebrate Azande heritage, and access educational and career-development opportunities.</p>
        </article>
        <article>
          <h3>Why It Matters</h3>
          <p>Studying far from home is easier when students have a trusted community for guidance, encouragement, cultural belonging, practical support, and timely updates.</p>
        </article>
      </div>
    </section>

    <section class="section mission-band">
      <div>
        <p class="eyebrow">Our Focus</p>
        <h2>Education with identity, ambition with community.</h2>
      </div>
      <div class="mission-list">
        <p>Support Azande students studying in India.</p>
        <p>Promote educational and career development.</p>
        <p>Strengthen connections across Indian universities.</p>
        <p>Preserve and promote Azande culture and identity.</p>
      </div>
    </section>

    <section class="section registration-section" id="registration">
      <div class="section-heading wide">
        <p class="eyebrow">Student Registration</p>
        <h2>New Azande students can register with ASAI for support and community updates.</h2>
      </div>
      <div class="split-layout">
        <form class="contact-form" id="registrationForm" action="api/register.php" method="post">
          <label>
            Full name
            <input type="text" name="fullName" autocomplete="name" required>
          </label>
          <label>
            Email
            <input type="email" name="email" autocomplete="email" required>
          </label>
          <label>
            Phone or WhatsApp
            <input type="tel" name="phone" autocomplete="tel" required>
          </label>
          <label>
            University or college
            <input type="text" name="university" required>
          </label>
          <div class="form-row">
            <label>
              City in India
              <input type="text" name="city" required>
            </label>
            <label>
              Course / program
              <input type="text" name="course" required>
            </label>
          </div>
          <label>
            Year of study
            <select name="studyYear" required>
              <option value="">Select one</option>
              <option>First year</option>
              <option>Second year</option>
              <option>Third year</option>
              <option>Final year</option>
              <option>Postgraduate</option>
              <option>Graduate / alumni</option>
            </select>
          </label>
          <label>
            Support needed
            <textarea name="support" rows="4" placeholder="Accommodation, orientation, documents, mentoring, career guidance, or other needs"></textarea>
          </label>
          <button class="button primary" type="submit">Submit Registration</button>
          <p class="form-note" id="registrationNote" role="status"></p>
        </form>

        <aside class="info-panel">
          <h3>What registration helps with</h3>
          <ul>
            <li>Finding ASAI members in your city or university.</li>
            <li>Receiving academic, cultural, and career-development updates.</li>
            <li>Connecting new students with executives and coordinators.</li>
            <li>Helping the association plan better events and support services.</li>
          </ul>
        </aside>
      </div>
    </section>

    <section class="section" id="programs">
      <div class="section-heading wide">
        <p class="eyebrow">Programs</p>
        <h2>Practical support for student life, career readiness, and community growth.</h2>
      </div>
      <div class="program-grid">
        <article class="program-item">
          <span class="program-icon">01</span>
          <h3>Student Support</h3>
          <p>Peer connection for students navigating admissions, campus life, accommodation, study routines, and life in a new environment.</p>
        </article>
        <article class="program-item">
          <span class="program-icon">02</span>
          <h3>Career Guidance</h3>
          <p>Online sessions, mentoring, and networking opportunities focused on career planning, skills development, and professional confidence.</p>
        </article>
        <article class="program-item">
          <span class="program-icon">03</span>
          <h3>Academic Exchange</h3>
          <p>Study circles, knowledge sharing, and graduate-to-student advice across fields, universities, and regions in India.</p>
        </article>
        <article class="program-item">
          <span class="program-icon">04</span>
          <h3>Alumni Network</h3>
          <p>Connections between current students, graduates, and professionals who can share experience, opportunities, and direction.</p>
        </article>
      </div>
    </section>

    <section class="section updates-section" id="updates">
      <div class="section-heading wide">
        <p class="eyebrow">Updates Widgets</p>
        <h2>Quick notices for students, executives, and partners.</h2>
      </div>
      <div class="updates-grid">
        <article class="update-widget highlight">
          <span>Now Open</span>
          <h3>New Student Registration</h3>
          <p>Students arriving in India can register their details and request support from ASAI.</p>
          <a href="#registration">Register now</a>
        </article>
        <article class="update-widget">
          <span>Upcoming</span>
          <h3>Career Guidance Sessions</h3>
          <p>ASAI will continue sharing opportunities for mentoring, networking, and professional development.</p>
        </article>
        <article class="update-widget">
          <span>Community</span>
          <h3>City Representatives</h3>
          <p>Members can help identify active Azande students across Indian universities and cities.</p>
        </article>
        <article class="update-widget">
          <span>Culture</span>
          <h3>Our Culture, Our Pride</h3>
          <p>Cultural programs and community conversations keep Azande identity visible and valued.</p>
        </article>
      </div>
    </section>

    <section class="culture-section" id="culture">
      <div class="culture-copy">
        <p class="eyebrow">Our Culture, Our Pride</p>
        <h2>A community that carries Azande identity with care.</h2>
        <p>ASAI creates space for language, stories, values, celebration, and mutual respect. Cultural pride is not treated as something separate from education; it is part of the confidence students carry into classrooms, careers, and public life.</p>
      </div>
      <div class="culture-panel" aria-label="Cultural values">
        <div>
          <strong>Belonging</strong>
          <span>Students find a familiar community while studying far from home.</span>
        </div>
        <div>
          <strong>Service</strong>
          <span>Members support one another through guidance and shared responsibility.</span>
        </div>
        <div>
          <strong>Heritage</strong>
          <span>Azande identity is celebrated through culture, language, and memory.</span>
        </div>
      </div>
    </section>

    <section class="section events-section" id="events">
      <div class="section-heading wide">
        <p class="eyebrow">Postings, Scheduling, Events and Plans</p>
        <h2>Plan the calendar and share what is happening across the association.</h2>
      </div>
      <div class="event-tools">
        <div class="event-timeline">

          <?php include 'includes/events-feed.php'; ?>

        </div>

        <form class="contact-form event-form" id="eventForm" action="api/event.php" method="post">
          <h3>Post or Schedule an Event</h3>
          <label>
            Event title
            <input type="text" name="eventTitle" required>
          </label>
          <div class="form-row">
            <label>
              Date
              <input type="date" name="eventDate" required>
            </label>
            <label>
              Time
              <input type="time" name="eventTime" required>
            </label>
          </div>
          <label>
            Location or meeting link
            <input type="text" name="eventLocation" required>
          </label>
          <label>
            Event details
            <textarea name="eventDetails" rows="4" required></textarea>
          </label>
          <button class="button primary" type="submit">Save Event Posting</button>
          <p class="form-note" id="eventNote" role="status"></p>
        </form>
      </div>
    </section>

    <section class="section gallery-section" id="gallery">
      <div class="section-heading wide">
        <p class="eyebrow">Get Together Program</p>
        <h2>Moments from the ASAI Get Together, 27-28 June 2025.</h2>
      </div>
      <div class="featured-gallery">
        <figure>
          <img src="assets/gallery/get-together-23.jpeg" alt="ASAI members at the Get Together program">
          <figcaption>Community gathering and fellowship.</figcaption>
        </figure>
        <figure>
          <img src="assets/gallery/get-together-24.jpeg" alt="ASAI members posing together outdoors">
          <figcaption>Students strengthening connection and belonging.</figcaption>
        </figure>
      </div>
      <div class="gallery-grid" aria-label="Get Together photo gallery">
        <img src="assets/gallery/get-together-01.jpeg" alt="ASAI Get Together photo 1">
        <img src="assets/gallery/get-together-02.jpeg" alt="ASAI Get Together photo 2">
        <img src="assets/gallery/get-together-03.jpeg" alt="ASAI Get Together photo 3">
        <img src="assets/gallery/get-together-04.jpeg" alt="ASAI Get Together photo 4">
        <img src="assets/gallery/get-together-05.jpeg" alt="ASAI Get Together photo 5">
        <img src="assets/gallery/get-together-06.jpeg" alt="ASAI Get Together photo 6">
        <img src="assets/gallery/get-together-07.jpeg" alt="ASAI Get Together photo 7">
        <img src="assets/gallery/get-together-08.jpeg" alt="ASAI Get Together photo 8">
        <img src="assets/gallery/get-together-09.jpeg" alt="ASAI Get Together photo 9">
        <img src="assets/gallery/get-together-10.jpeg" alt="ASAI Get Together photo 10">
        <img src="assets/gallery/get-together-11.jpeg" alt="ASAI Get Together photo 11">
        <img src="assets/gallery/get-together-12.jpeg" alt="ASAI Get Together photo 12">
        <img src="assets/gallery/get-together-13.jpeg" alt="ASAI Get Together photo 13">
        <img src="assets/gallery/get-together-14.jpeg" alt="ASAI Get Together photo 14">
        <img src="assets/gallery/get-together-15.jpeg" alt="ASAI Get Together photo 15">
        <img src="assets/gallery/get-together-16.jpeg" alt="ASAI Get Together photo 16">
        <img src="assets/gallery/get-together-17.jpeg" alt="ASAI Get Together photo 17">
        <img src="assets/gallery/get-together-18.jpeg" alt="ASAI Get Together photo 18">
        <img src="assets/gallery/get-together-19.jpeg" alt="ASAI Get Together photo 19">
        <img src="assets/gallery/get-together-20.jpeg" alt="ASAI Get Together photo 20">
        <img src="assets/gallery/get-together-21.jpeg" alt="ASAI Get Together photo 21">
        <img src="assets/gallery/get-together-22.jpeg" alt="ASAI Get Together photo 22">
        <img src="assets/gallery/get-together-25.jpeg" alt="ASAI Get Together photo 23">
        <img src="assets/gallery/get-together-26.jpeg" alt="ASAI Get Together photo 24">
        <img src="assets/gallery/get-together-27.jpeg" alt="ASAI Get Together photo 25">
      </div>
    </section>

    <section class="section executives-section" id="executives">
      <div class="section-heading wide">
        <p class="eyebrow">ASAI Executives</p>
        <h2>Leadership team serving students across India 2025 - 2026.</h2>
      </div>
      <div class="executive-grid">
        <article>
          <img src="assets/executives/president.jpeg" alt="Tumo Asenta Charles Zamaida">
          <span>President</span>
          <h3>Tumo Asenta Charles Zamaida</h3>
        </article>
        <article>
          <img src="assets/executives/vice-president.jpeg" alt="Hipai Anna Simon">
          <span>Vice President</span>
          <h3>Hipai Anna Simon</h3>
        </article>
        <article>
          <img src="assets/executives/secretary.jpeg" alt="Marina Anthony">
          <span>Secretary</span>
          <h3>Marina Anthony</h3>
        </article>
        <article>
          <img src="assets/executives/assistant-secretary.jpeg" alt="Silvester Baraka">
          <span>Assistant Secretary</span>
          <h3>Silvester Baraka</h3>
        </article>
        <article>
          <img src="assets/executives/coordinator.jpeg" alt="Emmanuel Simon Marino Inopai">
          <span>Coordinator</span>
          <h3>Emmanuel Simon Marino Inopai</h3>
        </article>
        <article>
          <img src="assets/executives/finance-secretary.jpeg" alt="Anibiko Joshua">
          <span>Finance Secretary</span>
          <h3>Anibiko Joshua</h3>
        </article>
        <article>
          <img src="assets/executives/media-cultural-religion-affairs.jpeg" alt="Faustino Elia">
          <span>Media, Cultural and Religion Affairs</span>
          <h3>Faustino Elia</h3>
        </article>
      </div>
    </section>

    <section class="section contact-section" id="contact">
      <div class="contact-copy">
        <p class="eyebrow">Contact Us</p>
        <h2>Connect with ASAI</h2>
        <p>Use this form for membership, partnerships, events, mentoring, or student support. Messages are saved through the local XAMPP backend.</p>
        <div class="contact-details">
          <span>India-based student network</span>
          <span>Open to students, graduates, mentors, and partners</span>
        </div>
      </div>
      <form class="contact-form" id="contactForm" action="api/contact.php" method="post">
        <label>
          Name
          <input type="text" name="name" autocomplete="name" required>
        </label>
        <label>
          Email
          <input type="email" name="email" autocomplete="email" required>
        </label>
        <label>
          Interest
          <select name="interest" required>
            <option value="">Select one</option>
            <option>Membership</option>
            <option>Student support</option>
            <option>Partnership</option>
            <option>Event collaboration</option>
          </select>
        </label>
        <label>
          Message
          <textarea name="message" rows="5" required></textarea>
        </label>
        <button class="button primary" type="submit">Send Message</button>
        <p class="form-note" id="formNote" role="status"></p>
      </form>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-brand">
      <img src="assets/logo.png" alt="ASAI logo">
      <div>
        <strong>Azande Students Association in India</strong>
        <p>Our culture, our pride. Supporting Azande students through education, community, leadership, and identity.</p>
      </div>
    </div>
    <div class="footer-columns">
      <div>
        <h3>Website</h3>
        <a href="#registration">Student Registration</a>
        <a href="#events">Events and Plans</a>
        <a href="#gallery">Get Together Gallery</a>
        <a href="#executives">Executives</a>
      </div>
      <div>
        <h3>Services</h3>
        <span>Student support</span>
        <span>Career guidance</span>
        <span>Cultural programs</span>
        <span>Community updates</span>
      </div>
      <div>
        <span>Registration, events, contacts</span>
      </div>
    </div>
    <div class="footer-bottom" style="align-items: center;">
      <span>&copy; Azande Students Association in India.</span>
      <a href="#top">Back to top</a>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
