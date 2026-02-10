<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daly College Indore</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="script.js"></script>
    <script>
        window.addEventListener('load', () => {
            const track = document.querySelector('.carousel-track');

            const trackWidth = track.offsetWidth;

            gsap.to(track, {
                x: -trackWidth / 2,
                duration: 20,
                ease: "none",
                repeat: -1
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <header>
            <div class="layer-vid">
                <video muted autoplay loop class="bg-video">
                    <source src="/assets/campus.mp4" type="video/mp4">
                </video>
            </div>

            <nav>
                <div class="title">
                    <img src="/assets/dc_logo.jpg" alt="logo">
                    <p style="font-family: initial">DALY COLLEGE, INDORE</p>
                </div>
                <div class="all-right">
                    <a href="contact@daly.org">contact@daly.org</a>
                    <a href="100">9842710342</a>
                    <button type="button" class="erp-btn">
                        <span class="erp-icon">➜]</span>
                        <span class="erp-text">ERP Login</span>
                    </button>
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </nav>


            <div class="hero-section">
                <h2>Live.Learn.Lead.</h2>
                <p>Shaping Leaders Since 1882</p>
                <div class="buttons">
                    <button class="admission"> 📝 Explore Admissions</button>
                    <button class="enquire"> ✉ Enquire Now</button>
                </div>
            </div>

            <div class="hover-buttons">
                <div class="hover-item">
                    <span class="icon">🏛️</span>
                    <p>Daly College of Business Management</p>
                </div>
                <div class="hover-item">
                    <span class="icon">👤</span>
                    <p>Parent's Login</p>
                </div>
                <div class="hover-item">
                    <span class="icon">🤝</span>
                    <p>Old Dalian Association</p>
                </div>
                <div class="hover-item">
                    <span class="icon">📰</span>
                    <p>The Daly Prophet</p>
                </div>
            </div>

        </header>

        <main>
            <section class="affiliations">
                <h2>Affiliations</h2>
                <div class="carousel-container">
                    <div class="carousel-track">
                        <img src="logo1.png" alt="Affiliation 1">
                        <img src="logo2.png" alt="Affiliation 2">
                        <img src="logo3.png" alt="Affiliation 3">
                        <img src="logo4.png" alt="Affiliation 4">
                        <img src="logo5.png" alt="Affiliation 5">
                        <img src="logo6.png" alt="Affiliation 6">
                        <img src="logo7.png" alt="Affiliation 7">
                        <img src="logo8.png" alt="Affiliation 8">
                        <img src="logo1.png" alt="Affiliation 1">
                        <img src="logo2.png" alt="Affiliation 2">
                        <img src="logo3.png" alt="Affiliation 3">
                        <img src="logo4.png" alt="Affiliation 4">
                        <img src="logo5.png" alt="Affiliation 5">
                        <img src="logo6.png" alt="Affiliation 6">
                        <img src="logo7.png" alt="Affiliation 7">
                        <img src="logo8.png" alt="Affiliation 8">
                    </div>
                </div>
            </section>
            <section class="info-cards">
                <div class="card white-card">
                    <div class="card-img">
                        <img src="assets/The-Daly-College-indore.jpg" alt="Daly College Building">
                    </div>
                    <h3>About Daly College</h3>
                    <p>The new building was inaugurated on November 14, 1885 by the Viceroy, Lord Dufferin. By 1891 the
                        Holkars of Indore and the Scindias of Gwalior donated the two student houses.</p>
                    <p>In 1905 Sir Henry's Son, Sir Hugh Daly, was appointed Agent at Indore, to the position previously
                        occupied by his father. He took great interest in Daly College which flourished as a Chiefs
                        College.</p>
                </div>

                <div class="card beige-card">
                    <div class="stat-item">
                        <span>Founded in</span>
                        <p class="stat-value">1870</p>
                    </div>
                    <hr class="stat-divider">
                    <div class="stat-item">
                        <span>Campus Size</span>
                        <p class="stat-value">119 Acres</p>
                    </div>
                    <hr class="stat-divider">
                    <div class="stat-item">
                        <span>Student Strength</span>
                        <p class="stat-value">2,000+</p>
                    </div>
                    <hr class="stat-divider">
                    <div class="stat-item">
                        <span>Student-Teacher Ratio</span>
                        <p class="stat-value">30 : 1</p>
                    </div>
                </div>

                <div class="card white-card">
                    <div class="card-img">
                        <img src="assets/founder.jpg" alt="Sir Henry Dermot Daly">
                    </div>
                    <h3>The Founder</h3>
                    <p>Sir Henry Dermot Daly was born at Kirkee, near Poona, on 25th October 1823. His father, Francis
                        Dermot Daly, was a soldier and served in British Indian from 1821 in the 4th Light Dragoons.</p>
                    <p>Sir Daly was a keen student of history and delved into the history of the States of Malwa region.
                        His cheerful and pleasant disposition won him the friendship and confidence of the Chiefs of
                        Malwa States.</p>
                </div>
            </section>
            <section></section>
        </main>

        <section class="publications">
            <div class="pub-header">
                <h2>Read. Discover. Connect.</h2>
                <p>Experience Daly College Through Our Publications.</p>
            </div>

            <div class="pub-container">
                <div class="pub-card" style="background-image: url('assets/newsletter.jpg');">
                    <div class="pub-overlay">
                        <h3>Read Our Newsletter</h3>
                    </div>
                </div>

                <div class="pub-card" style="background-image: url('assets/brochure.png');">
                    <div class="pub-overlay">
                        <h3>Download Brochure</h3>
                    </div>
                </div>

                <div class="pub-card" style="background-image: url('assets/magazine.jpg');">
                    <div class="pub-overlay">
                        <h3>Explore DC Magazine</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="announcements">
            <div class="announcement-header">
                <div class="header-text">
                    <h2>DC Announcements</h2>
                    <p>Stay ahead with real-time updates and notices from Daly College administration.</p>
                </div>
                <div class="filter-controls">
                    <button class="filter-btn active" data-filter="all">All Notices</button>
                    <button class="filter-btn" data-filter="junior">Junior School Byte</button>
                    <button class="filter-btn" data-filter="academic">Academic Calendar</button>
                </div>
            </div>

            <div class="announcement-grid">
                <div class="announcement-card" data-category="academic">
                    <div class="date-badge"><span>Feb</span><strong>10</strong></div>
                    <p>CBSE: Annual Examination Syllabus (VII to XI)</p>
                </div>
                <div class="announcement-card" data-category="junior">
                    <div class="date-badge"><span>Feb</span><strong>07</strong></div>
                    <p>Junior School: Inter-House Quiz Results</p>
                </div>
                <div class="announcement-card" data-category="academic">
                    <div class="date-badge"><span>Feb</span><strong>07</strong></div>
                    <p>Annual Examination Time Table 2024-25 (VII to IX)</p>
                </div>
                <div class="announcement-card" data-category="academic">
                    <div class="date-badge"><span>Feb</span><strong>06</strong></div>
                    <p>Annual Examination Time Table 2024-25 (X and XII)</p>
                </div>
            </div>

            <button class="view-all-btn">View All</button>
        </section>

        <footer class="main-footer">
            <div class="footer-columns">
                <div class="footer-col">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Principal's Desk</a></li>
                        <li><a href="#">Prefects and Captains</a></li>
                        <li><a href="#">Synopsis on DC</a></li>
                        <li><a href="#">Alumni / ODA</a></li>
                        <li><a href="#">Campus</a></li>
                        <li><a href="#">Facilities</a></li>
                        <li><a href="#">Location</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>History</h3>
                    <ul>
                        <li><a href="#">Evolution</a></li>
                        <li><a href="#">Founder of DC</a></li>
                        <li><a href="#">Presidents of the Board</a></li>
                        <li><a href="#">Original Donors</a></li>
                        <li><a href="#">Patrons of the College</a></li>
                        <li><a href="#">Principals at DC</a></li>
                        <li><a href="#">First Batch</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Admission</h3>
                    <ul>
                        <li><a href="#">Admission Procedure</a></li>
                        <li><a href="#">E-Brochure</a></li>
                        <li><a href="#">Fee Structure</a></li>
                        <li><a href="#">Registration</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Academics</h3>
                    <ul>
                        <li><a href="#">Committee</a></li>
                        <li><a href="#">Mandatory Disclosure</a></li>
                        <li><a href="#">Transfer Certificate</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Career & College Guidance</h3>
                    <ul>
                        <li><a href="#">Career Guidance Activities</a></li>
                        <li><a href="#">ICS Career Login</a></li>
                        <li><a href="#">Placement Records</a></li>
                        <li><a href="#">Career Guidance Calendar</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="bottom-left">
                    <span>© 2025 Daly College Indore</span>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Sitemap</a>
                </div>
                <div class="social-links">
                    <a href="#">FB</a> <a href="#">X</a>
                    <a href="#">IG</a>
                    <a href="#">YT</a>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>