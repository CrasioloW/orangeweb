<?php
/**
 * CitrusBurn™ Advertorial Landing Page
 * ─────────────────────────────────────
 * Upload this entire folder to Hostinger via File Manager or FTP.
 * Edit the variables below to customise.
 */

// ── Configuration ──────────────────────────────────────
$purchase_url = 'https://hop.clickbank.net/?affiliate=khalesai&vendor=citrusburn&pid=buy';
$product_name = 'CitrusBurn™';
$site_title = 'The 40+ Belly Fat Mystery — Why Healthy Women Suddenly Gain Weight';
$byline_author = 'Wellness Desk';
$byline_label = 'Special Report';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($site_title); ?></title>
    <meta name="description"
        content="Discover why women over 40 struggle with belly fat — and the gentle, stimulant-free approach that's finally helping them feel in control again.">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($site_title); ?>">
    <meta property="og:description"
        content="A gentle, stimulant-free formula designed for women 40+ who want to feel lighter, less bloated, and more like themselves again.">
    <meta property="og:type" content="article">

    <link rel="stylesheet" href="style.css">

    <!-- Preconnect for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>

    <!-- Reading Progress Bar -->
    <div class="reading-progress" id="readingProgress"></div>

    <!-- ══════════════════════════════════════════════════════
     URGENCY TOP BAR
     ══════════════════════════════════════════════════════ -->
    <div class="top-bar">
        <span><span class="pulse-dot"></span> Sale Status: <strong>Live</strong></span>
        <span>🔥 Stock Level: <strong>LOW</strong></span>
        <span>⏰ Spot Reserved For: <strong class="timer" id="countdown">10:00</strong></span>
        <a href="<?php echo $purchase_url; ?>" class="top-bar-cta">Order Now →</a>
    </div>

    <!-- ══════════════════════════════════════════════════════
     STICKY PRODUCT SIDEBAR
     ══════════════════════════════════════════════════════ -->
    <aside class="product-sidebar" id="productSidebar">
        <a href="<?php echo $purchase_url; ?>" class="sidebar-card">
            <div class="sidebar-img-wrap">
                <img src="assets/bottle.png" alt="<?php echo $product_name; ?>" class="sidebar-bottle">
            </div>
            <div class="sidebar-info">
                <span class="sidebar-name"><?php echo $product_name; ?></span>
                <div class="sidebar-rating">
                    <span class="sidebar-stars">★★★★<span class="star-partial">★</span></span>
                    <span class="sidebar-score">4.8</span>
                </div>
                <span class="sidebar-reviews">2,847+ Verified Reviews</span>
                <span class="sidebar-cta-btn">Order Now →</span>
            </div>
        </a>
    </aside>

    <!-- ══════════════════════════════════════════════════════
     ARTICLE CONTAINER
     ══════════════════════════════════════════════════════ -->
    <main class="article-container">

        <!-- ── Header ──────────────────────────────────── -->
        <header class="article-header fade-up">
            <span class="article-category">Health & Wellness</span>
            <h1><?php echo htmlspecialchars($site_title); ?></h1>
            <p class="byline">
                By: <strong><?php echo $byline_author; ?></strong>
                <span class="byline-dot"></span>
                <?php echo $byline_label; ?>
                <span class="byline-dot"></span>
                <span class="reading-time">📖 5 min read</span>
            </p>
        </header>

        <!-- ── Hero Image Section ──────────────────────── -->
        <div class="hero-image-wrap fade-up">
            <div class="hero-gradient">
                <img src="assets/bottle.png" alt="<?php echo $product_name; ?> bottle" class="hero-bottle"
                    onerror="this.parentElement.querySelector('.bottle-placeholder').style.display='flex';this.style.display='none'">
                <div class="bottle-placeholder"
                    style="display:none;width:200px;height:320px;background:linear-gradient(135deg,#f5f5f5,#e0e0e0);border-radius:16px;align-items:center;justify-content:center;text-align:center;font-size:.85rem;color:#999;padding:20px;flex-direction:column;">
                    <span style="font-size:3rem;margin-bottom:8px;">💊</span>
                    Add bottle.png to assets/
                </div>
                <div class="hero-text-block">
                    <h2>Finally — A Gentle Way to Support Your Body After 40</h2>
                    <p>No harsh stimulants. No jitters. Just natural ingredients designed for women who want to feel
                        like themselves again.</p>
                    <span class="hero-badge">🛡️ 180-Day Money-Back Guarantee</span>
                </div>
            </div>
        </div>

        <!-- ── Article Body ────────────────────────────── -->
        <article class="article-body">

            <!-- SECTION 1: The Problem -->
            <p class="lead">If you're a woman over 40 and you've been thinking… <em>"I eat pretty healthy… so why is my
                    body changing?"</em> — you're not imagining it.</p>

            <p>And no — <strong>it's not because you suddenly lost discipline.</strong></p>

            <p>For many women, the most frustrating part is this: <strong>they're doing MORE than they used to.</strong>
            </p>

            <ul class="pain-list">
                <li>More walking</li>
                <li>More clean eating</li>
                <li>More dieting</li>
                <li>More cutting sugar</li>
                <li>More workouts</li>
            </ul>

            <p><strong>Yet the midsection still won't budge.</strong></p>

            <div class="callout">
                "Jeans feel tighter. Bras feel uncomfortable. Bloating shows up out of nowhere. And the mirror starts to
                feel like an enemy."
            </div>

            <hr class="section-divider">

            <!-- SECTION 2: The Real Reason -->
            <h2 class="fade-up">The Real Reason Weight Loss Feels Different After 40</h2>

            <p>After 40, <strong>the rules change.</strong></p>

            <p>Not because your body is "broken." But because it becomes harder to switch into <strong>fat-burning
                    mode</strong> the way it used to.</p>

            <p>That's why a woman can do everything right… and still feel like her body is resisting her.</p>

            <p>Many experts now describe this as a form of <strong>"metabolic resistance"</strong> — where your body is
                more likely to store fat around the belly, trigger cravings, and hold onto water weight.</p>

            <hr class="section-divider">

            <!-- SECTION 3: Why Diets Stop Working -->
            <h2 class="fade-up">Why Diets Stop Working (Even When You're Strong)</h2>

            <p>Most women over 40 have tried <em>everything</em>:</p>

            <ul class="styled-list red-list">
                <li>Cutting calories</li>
                <li>Keto</li>
                <li>Fasting</li>
                <li>Cardio</li>
                <li>Detoxes</li>
            </ul>

            <p>Some of it works temporarily… but cravings, stress, fatigue, and poor sleep usually <strong>bring the
                    weight right back.</strong></p>

            <p>And stimulant fat burners? For many women, they're a <strong>nightmare:</strong></p>

            <ul class="styled-list red-list">
                <li>Jitters</li>
                <li>Anxiety</li>
                <li>Heart racing</li>
                <li>Worse sleep</li>
                <li>Worse cravings the next day</li>
            </ul>

            <hr class="section-divider">

            <!-- SECTION 4: What Women Actually Want -->
            <h2 class="fade-up">The #1 Thing Women Over 40 Actually Want</h2>

            <p>It's not "burn fat faster."</p>

            <div class="callout">
                "I want to feel in control again."
            </div>

            <p>Because the real enemy isn't just belly fat… it's the <strong>constant cravings, bloating, and food
                    noise.</strong></p>

            <!-- MID-ARTICLE CTA -->
            <div class="cta-wrap fade-up">
                <a href="<?php echo $purchase_url; ?>" class="cta-btn">
                    👉 View <?php echo $product_name; ?> Now
                </a>
                <span class="cta-sub"><span class="shield">🛡️</span> 180-Day Money-Back Guarantee • No Risk</span>
            </div>

            <hr class="section-divider">

            <!-- SECTION 5: The Solution -->
            <h2 class="fade-up">A Gentle New Approach: <?php echo $product_name; ?></h2>

            <p>That's why a new <strong>stimulant-free formula</strong> called <?php echo $product_name; ?> has been
                getting attention.</p>

            <p>Instead of harsh stimulants, it's designed to <strong>support the body's natural metabolism
                    signals</strong> — especially for women 40+.</p>

            <h3><?php echo $product_name; ?> Combines Ingredients Like:</h3>

            <div class="ingredients-grid fade-up">
                <div class="ingredient-card">
                    <span class="ingredient-icon">🍊</span>
                    <span>Seville Orange Peel</span>
                </div>
                <div class="ingredient-card">
                    <span class="ingredient-icon">🍎</span>
                    <span>Apple Cider Vinegar</span>
                </div>
                <div class="ingredient-card">
                    <span class="ingredient-icon">🌶️</span>
                    <span>Red Pepper</span>
                </div>
                <div class="ingredient-card">
                    <span class="ingredient-icon">🫚</span>
                    <span>Ginger</span>
                </div>
                <div class="ingredient-card">
                    <span class="ingredient-icon">🍵</span>
                    <span>Green Tea</span>
                </div>
                <div class="ingredient-card">
                    <span class="ingredient-icon">💊</span>
                    <span>Berberine</span>
                </div>
                <div class="ingredient-card">
                    <span class="ingredient-icon">🌿</span>
                    <span>Korean Red Ginseng</span>
                </div>
            </div>

            <p>The goal isn't extreme "fat burner" results. It's helping women feel:</p>

            <div class="benefits-strip fade-up">
                <div class="benefit-item">
                    <span class="icon">💨</span>
                    <h4>Less Bloated</h4>
                    <p>Feel lighter and more comfortable day to day</p>
                </div>
                <div class="benefit-item">
                    <span class="icon">🧘</span>
                    <h4>Fewer Cravings</h4>
                    <p>Take back control from constant food noise</p>
                </div>
                <div class="benefit-item">
                    <span class="icon">✨</span>
                    <h4>Lighter Midsection</h4>
                    <p>Support a slimmer-feeling waistline naturally</p>
                </div>
                <div class="benefit-item">
                    <span class="icon">💪</span>
                    <h4>Feel Like Yourself</h4>
                    <p>Regain the confidence and energy you deserve</p>
                </div>
            </div>

            <hr class="section-divider">

            <!-- SECTION 6: No Jitters -->
            <h2 class="fade-up">The Best Part: No Jitters</h2>

            <p><?php echo $product_name; ?> is designed to <strong>support metabolism without the stimulant
                    crash</strong> most women hate.</p>

            <!-- Guarantee Box -->
            <div class="guarantee-box fade-up">
                <span class="shield-icon">🛡️</span>
                <h3>180-Day Money-Back Guarantee</h3>
                <p>Try <?php echo $product_name; ?> with confidence. If you're not satisfied for any reason, you're
                    covered for a full 6 months. No questions asked.</p>
            </div>

            <hr class="section-divider">

            <!-- SECTION 7: Testimonials -->
            <section class="testimonials fade-up">
                <h2>What Women Are Saying</h2>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar av-1">SM</div>
                            <div class="testimonial-meta">
                                <span class="author">Sarah M., 47</span>
                                <span class="verified">✓ Verified Purchase</span>
                            </div>
                            <span class="stars">★★★★★</span>
                        </div>
                        <blockquote>"I've tried everything for years — keto, fasting, those jittery pills. Nothing worked
                            long-term. With CitrusBurn I feel less bloated, my cravings are calmer, and I actually feel
                            GOOD. I'm not starving myself anymore."</blockquote>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar av-2">DR</div>
                            <div class="testimonial-meta">
                                <span class="author">Diana R., 52</span>
                                <span class="verified">✓ Verified Purchase</span>
                            </div>
                            <span class="stars">★★★★★</span>
                        </div>
                        <blockquote>"I was so skeptical. But after the first two weeks, my jeans weren't as tight. The bloating
                            went down. I just feel lighter. It's not a miracle — it's just… gentle. And that's what I
                            needed."</blockquote>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar av-3">LK</div>
                            <div class="testimonial-meta">
                                <span class="author">Lisa K., 44</span>
                                <span class="verified">✓ Verified Purchase</span>
                            </div>
                            <span class="stars">★★★★★</span>
                        </div>
                        <blockquote>"The 180-day guarantee made me try it. So glad I did. No jitters, no anxiety, no racing
                            heart. Just more energy and way less snacking. I feel like myself again."</blockquote>
                    </div>
                </div>
            </section>

            <hr class="section-divider">

            <!-- FINAL CTA -->
            <div class="final-cta">
                <h2>If You Want to Learn More…</h2>
                <p><?php echo $product_name; ?> is currently available online through a limited supply offer.</p>
                <a href="<?php echo $purchase_url; ?>" class="cta-btn">
                    👉 Click Here to View <?php echo $product_name; ?> Now
                </a>
                <span class="cta-sub"><span class="shield">🛡️</span> 180-Day Money-Back Guarantee • Free Bonuses •
                    Limited Stock</span>
            </div>

        </article>

    </main>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop" title="Back to top">↑</a>

    <!-- ══════════════════════════════════════════════════════
     FOOTER
     ══════════════════════════════════════════════════════ -->
    <footer class="site-footer">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $product_name; ?> — Special Report</p>
        <p>This is an advertisement and not an actual news article, blog, or consumer protection update.</p>
        <p>Statements on this page have not been evaluated by the Food and Drug Administration. This product is not
            intended to diagnose, treat, cure, or prevent any disease.</p>
        <p>Individual results may vary. Consult your physician before starting any supplement.</p>
        <p><a href="#">Privacy Policy</a> &nbsp;|&nbsp; <a href="#">Terms of Service</a> &nbsp;|&nbsp; <a
                href="#">Contact</a></p>
    </footer>

    <!-- ══════════════════════════════════════════════════════
     JAVASCRIPT
     ══════════════════════════════════════════════════════ -->
    <script>
        // ── Countdown Timer ──
        (function () {
            let totalSeconds = 10 * 60;
            const timerEl = document.getElementById('countdown');
            function tick() {
                if (totalSeconds <= 0) { timerEl.textContent = '00:00'; return; }
                const m = Math.floor(totalSeconds / 60);
                const s = totalSeconds % 60;
                timerEl.textContent = String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
                totalSeconds--;
                setTimeout(tick, 1000);
            }
            tick();
        })();

        // ── Reading Progress Bar ──
        (function () {
            const bar = document.getElementById('readingProgress');
            const btn = document.getElementById('backToTop');
            window.addEventListener('scroll', function () {
                const scrollTop = window.scrollY;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const progress = Math.min((scrollTop / docHeight) * 100, 100);
                bar.style.width = progress + '%';
                // Back to top button
                if (scrollTop > 600) {
                    btn.classList.add('show');
                } else {
                    btn.classList.remove('show');
                }
            });
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        })();

        // ── Scroll fade-in animations ──
        (function () {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
        })();
    </script>

</body>

</html>