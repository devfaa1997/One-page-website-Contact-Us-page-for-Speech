<?php
$page_title = "Speech & Language Therapy | Professional Children's Therapy Services";
$page_description = "Professional speech and language therapy services tailored to help your child communicate with confidence and clarity.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>

    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-container">
            <div class="hero-content">
                <h1>Helping Children Find Their Voice</h1>
                <p>Professional speech and language therapy services tailored to help your child communicate with confidence and clarity.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary">Book a Consultation</a>
                    <a href="#services" class="btn-secondary">Our Services</a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Families Helped</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">95%</span>
                        <span class="stat-label">Success Rate</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#FDF8F4"/>
            </svg>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <span class="tag">About Us</span>
                <h2>Compassionate Care, Expert Results</h2>
                <p>We believe every child deserves to be heard. Our dedicated team provides personalized therapy approaches that meet each child where they are.</p>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <div class="about-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" stroke-linecap="round"/>
                            <path d="M8 12h8M12 8v8" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Child-Centered Approach</h3>
                    <p>We make therapy fun and engaging, using play-based techniques that keep children motivated and excited to learn.</p>
                </div>
                <div class="about-card">
                    <div class="about-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke-linecap="round"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3>Family Involvement</h3>
                    <p>We empower parents with strategies and techniques to support their child's progress at home.</p>
                </div>
                <div class="about-card">
                    <div class="about-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke-linecap="round"/>
                            <path d="M22 4 12 14.01l-3-3" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Proven Methods</h3>
                    <p>Our evidence-based techniques are tailored to each child's unique needs and learning style.</p>
                </div>
            </div>
            <div class="about-image-section">
                <img src="../assets/WhatsApp Image 2026-02-17 at 17.21.42.jpeg" alt="Therapy session">
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <span class="tag">Our Services</span>
                <h2>Comprehensive Speech & Language Therapy</h2>
                <p>From initial assessment to ongoing therapy, we're here to support your child's communication journey.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="../assets/WhatsApp Image 2026-02-17 at 17.21.42-2.jpeg" alt="Speech therapy session">
                    </div>
                    <div class="service-content">
                        <h3>Speech Sound Disorders</h3>
                        <p>Help with articulation, phonology, and pronunciation difficulties to ensure clear speech.</p>
                        <ul>
                            <li>Articulation therapy</li>
                            <li>Phonological processing</li>
                            <li>Motor speech disorders</li>
                        </ul>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="../assets/WhatsApp Image 2026-02-17 at 17.21.42-5 (1).jpeg" alt="Language therapy">
                    </div>
                    <div class="service-content">
                        <h3>Language Development</h3>
                        <p>Supporting expressive and receptive language skills for better communication.</p>
                        <ul>
                            <li>Expressive language</li>
                            <li>Receptive language</li>
                            <li>Language comprehension</li>
                        </ul>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="../assets/WhatsApp Image 2026-02-17 at 17.21.42.jpeg" alt="Therapy activities">
                    </div>
                    <div class="service-content">
                        <h3>Social Communication</h3>
                        <p>Building pragmatic skills and conversational abilities for meaningful connections.</p>
                        <ul>
                            <li>Pragmatic language</li>
                            <li>Conversation skills</li>
                            <li>Social stories</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="services-cta">
                <div class="cta-card">
                    <h3>Not Sure What You Need?</h3>
                    <p>Book a free 15-minute phone consultation to discuss your child's needs.</p>
                    <a href="#contact" class="btn-primary">Schedule Free Call</a>
                </div>
            </div>
        </div>
    </section>

    <section id="who" class="who">
        <div class="container">
            <div class="section-header">
                <span class="tag">Who We Help</span>
                <h2>Making a Difference Together</h2>
                <p>We work with children of all ages and their families to overcome communication challenges.</p>
            </div>
            <div class="who-grid">
                <div class="who-card">
                    <div class="who-icon">🧒</div>
                    <h3>Children Ages 2-5</h3>
                    <p>Early intervention for late talkers, pronunciation issues, and early language development.</p>
                </div>
                <div class="who-card">
                    <div class="who-icon">📚</div>
                    <h3>School-Age Children</h3>
                    <p>Support for speech sounds, vocabulary building, reading, and classroom communication.</p>
                </div>
                <div class="who-card">
                    <div class="who-icon">💬</div>
                    <h3>Teens</h3>
                    <p>Helping teenagers refine communication skills for social and academic success.</p>
                </div>
                <div class="who-card">
                    <div class="who-icon">👨‍👩‍👧</div>
                    <h3>Parents & Families</h3>
                    <p>Training and resources to support your child's progress at home and in daily life.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process">
        <div class="container">
            <div class="section-header">
                <span class="tag">How It Works</span>
                <h2>Your Journey Starts Here</h2>
                <p>Simple, straightforward steps to get your child the support they need.</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Free Consultation</h3>
                    <p>We'll discuss your concerns and determine if we're the right fit for your needs.</p>
                </div>
                <div class="process-connector"></div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Assessment</h3>
                    <p>Comprehensive evaluation to understand your child's strengths and areas to work on.</p>
                </div>
                <div class="process-connector"></div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Personalized Plan</h3>
                    <p>We'll create a tailored therapy plan with clear goals and milestones.</p>
                </div>
                <div class="process-connector"></div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Begin Therapy</h3>
                    <p>Regular sessions combining fun activities with proven techniques.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header">
                <span class="tag">Testimonials</span>
                <h2>What Families Say</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p>"The transformation in our daughter's speech has been incredible. She went from barely speaking to confidently telling stories. The team is patient, kind, and truly cares about each child's progress."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">S</div>
                        <div class="author-info">
                            <strong>Sarah M.</strong>
                            <span>Parent</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p>"We were nervous about starting therapy, but from day one, we felt welcomed and at ease. The personalized approach made all the difference for our son."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">J</div>
                        <div class="author-info">
                            <strong>James T.</strong>
                            <span>Parent</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p>"The strategies we learned have helped us support our child at home. Seeing her confidence grow has been the best gift."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <strong>Maria L.</strong>
                            <span>Parent</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'contact-section.php'; ?>

    <?php include 'footer.php'; ?>

    <script src="../script.js"></script>
</body>
</html>
