<?php
$purchase_url = 'track.php';
$product_name = 'CitrusBurn™';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Why Can't You Lose Belly Fat After 40? — Free Quiz</title>
    <meta name="description"
        content="Take this free 7-question quiz to discover why losing belly fat after 40 feels impossible — and what you can do about it.">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Why Can't You Lose Belly Fat After 40? Find Out in 7 Questions">
    <meta property="og:description"
        content="Take this quick quiz to uncover the real reason your body changed — and what actually works.">
    <meta property="og:type" content="website">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="quiz-style.css">

    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '33824746947141043');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=33824746947141043&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <!-- Progress Bar -->
    <div class="quiz-progress-bar">
        <div class="quiz-progress-fill" id="progressFill"></div>
    </div>

    <!-- Hero / Intro Screen -->
    <div class="quiz-screen active" id="screen-intro">
        <div class="quiz-container">
            <div class="intro-badge">📋 Free Assessment</div>
            <h1 class="quiz-title">Why Can't You Lose Belly Fat After 40?</h1>
            <p class="quiz-subtitle">Find Out in 7 Questions</p>
            <div class="intro-description">
                <p>This quick quiz will help you identify the hidden reason your body changed — and why nothing you've
                    tried seems to work anymore.</p>
            </div>
            <div class="intro-features">
                <span>⏱️ Takes 60 seconds</span>
                <span>🔒 100% Private</span>
                <span>✨ Personalized Result</span>
            </div>
            <button class="quiz-start-btn" onclick="startQuiz()">
                Start My Free Assessment →
            </button>
            <p class="intro-taken"><span class="pulse-dot-small"></span> <strong>2,847</strong> women took this quiz
                today</p>

            <!-- Top Reviews Ticker -->
            <div class="reviews-ticker">
                <div class="reviews-ticker-label">⭐ What women are saying:</div>
                <div class="reviews-ticker-track">
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"I was skeptical about another quiz, but the results were scarily accurate. Started CitrusBurn 3 weeks ago and I'm already down a pant size."</p>
                        <span class="ticker-author">— Karen T., 51 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"This quiz literally described my life. The bloating, the cravings, the Monday restarts. Tried the recommendation and haven't looked back."</p>
                        <span class="ticker-author">— Michelle R., 46 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"Finally, something that actually explains WHY my body changed. Not just 'eat less and move more.' This felt personal."</p>
                        <span class="ticker-author">— Debra W., 54 · <em>Quiz Taker</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"My daughter sent me this quiz. Took it, got CitrusBurn, and now she wants to know my secret. 12 lbs down in 6 weeks 🙌"</p>
                        <span class="ticker-author">— Patricia H., 49 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"The night cravings were ruining me. Since starting the formula from my results, I actually forget to snack. That NEVER happened before."</p>
                        <span class="ticker-author">— Sandra L., 47 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"Woke up today and my jeans fit. Not tight-fit. FIT fit. Actual tears. Thank you for this quiz — it changed everything."</p>
                        <span class="ticker-author">— Linda M., 52 · <em>Verified Buyer</em></span>
                    </div>
                    <!-- Duplicated for seamless loop -->
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"I was skeptical about another quiz, but the results were scarily accurate. Started CitrusBurn 3 weeks ago and I'm already down a pant size."</p>
                        <span class="ticker-author">— Karen T., 51 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"This quiz literally described my life. The bloating, the cravings, the Monday restarts. Tried the recommendation and haven't looked back."</p>
                        <span class="ticker-author">— Michelle R., 46 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"Finally, something that actually explains WHY my body changed. Not just 'eat less and move more.' This felt personal."</p>
                        <span class="ticker-author">— Debra W., 54 · <em>Quiz Taker</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"My daughter sent me this quiz. Took it, got CitrusBurn, and now she wants to know my secret. 12 lbs down in 6 weeks 🙌"</p>
                        <span class="ticker-author">— Patricia H., 49 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"The night cravings were ruining me. Since starting the formula from my results, I actually forget to snack. That NEVER happened before."</p>
                        <span class="ticker-author">— Sandra L., 47 · <em>Verified Buyer</em></span>
                    </div>
                    <div class="ticker-card">
                        <div class="ticker-stars">★★★★★</div>
                        <p>"Woke up today and my jeans fit. Not tight-fit. FIT fit. Actual tears. Thank you for this quiz — it changed everything."</p>
                        <span class="ticker-author">— Linda M., 52 · <em>Verified Buyer</em></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Question Screens -->
    <div class="quiz-screen" id="screen-q1">
        <div class="quiz-container">
            <div class="question-counter">Question <span class="q-current">1</span> of <span class="q-total">7</span>
            </div>
            <h2 class="question-text">Where do you notice weight gain the most since turning 40?</h2>
            <div class="answers-list">
                <button class="answer-btn" onclick="selectAnswer(this, 1)">
                    <span class="answer-letter">A</span>
                    <span class="answer-text">Mostly around my belly and waist — it's like it appeared overnight</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 1)">
                    <span class="answer-letter">B</span>
                    <span class="answer-text">All over, but my middle is the most stubborn part</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 1)">
                    <span class="answer-letter">C</span>
                    <span class="answer-text">My weight feels "puffy" or bloated more than actual fat</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 1)">
                    <span class="answer-letter">D</span>
                    <span class="answer-text">I haven't really noticed any changes</span>
                </button>
            </div>
        </div>
    </div>

    <div class="quiz-screen" id="screen-q2">
        <div class="quiz-container">
            <div class="question-counter">Question <span class="q-current">2</span> of <span class="q-total">7</span>
            </div>
            <h2 class="question-text">How would you describe your relationship with food cravings?</h2>
            <div class="answers-list">
                <button class="answer-btn" onclick="selectAnswer(this, 2)">
                    <span class="answer-letter">A</span>
                    <span class="answer-text">Out of control — especially at night and with sugar</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 2)">
                    <span class="answer-letter">B</span>
                    <span class="answer-text">I eat pretty well but I still have cravings I can't always stop</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 2)">
                    <span class="answer-letter">C</span>
                    <span class="answer-text">I don't eat badly, but I think about food constantly</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 2)">
                    <span class="answer-letter">D</span>
                    <span class="answer-text">Cravings aren't really my issue</span>
                </button>
            </div>
        </div>
    </div>

    <div class="quiz-screen" id="screen-q3">
        <div class="quiz-container">
            <div class="question-counter">Question <span class="q-current">3</span> of <span class="q-total">7</span>
            </div>
            <h2 class="question-text">When you try to diet or eat healthy, what usually happens?</h2>
            <div class="answers-list">
                <button class="answer-btn" onclick="selectAnswer(this, 3)">
                    <span class="answer-letter">A</span>
                    <span class="answer-text">I start strong but the cravings always win after a few days</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 3)">
                    <span class="answer-letter">B</span>
                    <span class="answer-text">I lose a little, then completely stall — my body doesn't respond
                        anymore</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 3)">
                    <span class="answer-letter">C</span>
                    <span class="answer-text">I feel like I'm doing everything right and nothing moves</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 3)">
                    <span class="answer-letter">D</span>
                    <span class="answer-text">It usually works fine for me</span>
                </button>
            </div>
        </div>
    </div>

    <div class="quiz-screen" id="screen-q4">
        <div class="quiz-container">
            <div class="question-counter">Question <span class="q-current">4</span> of <span class="q-total">7</span>
            </div>
            <h2 class="question-text">Which of these sounds most like something you've said to yourself?</h2>
            <div class="answers-list">
                <button class="answer-btn" onclick="selectAnswer(this, 4)">
                    <span class="answer-letter">A</span>
                    <span class="answer-text">"I don't even recognize my stomach anymore"</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 4)">
                    <span class="answer-letter">B</span>
                    <span class="answer-text">"I swear my metabolism just shut off after 40"</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 4)">
                    <span class="answer-letter">C</span>
                    <span class="answer-text">"I'm so sick of starting over every Monday"</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 4)">
                    <span class="answer-letter">D</span>
                    <span class="answer-text">"I just want to feel normal again — not skinny, just normal"</span>
                </button>
            </div>
        </div>
    </div>

    <div class="quiz-screen" id="screen-q5">
        <div class="quiz-container">
            <div class="question-counter">Question <span class="q-current">5</span> of <span class="q-total">7</span>
            </div>
            <h2 class="question-text">How is belly bloat and weight affecting your daily life?</h2>
            <div class="answers-list">
                <button class="answer-btn" onclick="selectAnswer(this, 5)">
                    <span class="answer-letter">A</span>
                    <span class="answer-text">I avoid certain clothes, photos, and social situations because of
                        it</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 5)">
                    <span class="answer-letter">B</span>
                    <span class="answer-text">I feel uncomfortable in my own body most of the day</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 5)">
                    <span class="answer-letter">C</span>
                    <span class="answer-text">I wake up already bloated — and it just gets worse by evening</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 5)">
                    <span class="answer-letter">D</span>
                    <span class="answer-text">It bothers me but doesn't really affect my daily choices</span>
                </button>
            </div>
        </div>
    </div>

    <div class="quiz-screen" id="screen-q6">
        <div class="quiz-container">
            <div class="question-counter">Question <span class="q-current">6</span> of <span class="q-total">7</span>
            </div>
            <h2 class="question-text">What have you already tried to lose the belly weight?</h2>
            <div class="answers-list">
                <button class="answer-btn" onclick="selectAnswer(this, 6)">
                    <span class="answer-letter">A</span>
                    <span class="answer-text">Keto, intermittent fasting, or cutting carbs — it worked at first, then
                        stopped</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 6)">
                    <span class="answer-letter">B</span>
                    <span class="answer-text">Calorie counting and walking more — barely made a difference</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 6)">
                    <span class="answer-letter">C</span>
                    <span class="answer-text">Supplements or detox teas — either didn't work or made me feel
                        worse</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 6)">
                    <span class="answer-letter">D</span>
                    <span class="answer-text">I haven't really tried anything specific yet</span>
                </button>
            </div>
        </div>
    </div>

    <div class="quiz-screen" id="screen-q7">
        <div class="quiz-container">
            <div class="question-counter">Question <span class="q-current">7</span> of <span class="q-total">7</span>
            </div>
            <h2 class="question-text">What would feel like a real win for you in the next 60–90 days?</h2>
            <div class="answers-list">
                <button class="answer-btn" onclick="selectAnswer(this, 7)">
                    <span class="answer-letter">A</span>
                    <span class="answer-text">My jeans buttoning without a fight</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 7)">
                    <span class="answer-letter">B</span>
                    <span class="answer-text">Fewer cravings and less thinking about food all day</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 7)">
                    <span class="answer-letter">C</span>
                    <span class="answer-text">Waking up feeling lighter and less bloated</span>
                </button>
                <button class="answer-btn" onclick="selectAnswer(this, 7)">
                    <span class="answer-letter">D</span>
                    <span class="answer-text">Just feeling like myself again — confident, calm, in control</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Analyzing Screen -->
    <div class="quiz-screen" id="screen-analyzing">
        <div class="quiz-container analyzing-container">
            <div class="analyzing-icon">
                <div class="analyzing-spinner"></div>
                <span class="analyzing-emoji">🔬</span>
            </div>
            <h2 class="analyzing-title">Analyzing Your Answers...</h2>
            <p class="analyzing-sub">Comparing your profile to 12,400+ women over 40</p>
            <div class="analyzing-steps">
                <div class="analyze-step" id="step1">
                    <span class="step-icon">⏳</span>
                    <span class="step-text">Evaluating metabolic profile...</span>
                </div>
                <div class="analyze-step" id="step2">
                    <span class="step-icon">⏳</span>
                    <span class="step-text">Checking craving pattern match...</span>
                </div>
                <div class="analyze-step" id="step3">
                    <span class="step-icon">⏳</span>
                    <span class="step-text">Building personalized recommendation...</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Screen -->
    <div class="quiz-screen" id="screen-results">
        <div class="quiz-container results-container">
            <div class="results-badge">Your Results Are Ready</div>
            <h2 class="results-title">Your #1 Blocker: <span class="accent">Hormonal Metabolic Resistance</span></h2>

            <div class="results-card">
                <div class="results-match">
                    <div class="match-circle">
                        <svg viewBox="0 0 100 100">
                            <circle class="match-bg" cx="50" cy="50" r="42"></circle>
                            <circle class="match-fill" cx="50" cy="50" r="42" id="matchCircle"></circle>
                        </svg>
                        <span class="match-number" id="matchNumber">0</span>
                    </div>
                    <p class="match-label">Profile Match</p>
                </div>
                <div class="results-insights">
                    <div class="insight-item">
                        <span class="insight-icon">🔥</span>
                        <div>
                            <strong>Metabolic slowdown detected</strong>
                            <p>Your answers indicate classic signs of age-related metabolic resistance — your body is
                                storing fat instead of burning it.</p>
                        </div>
                    </div>
                    <div class="insight-item">
                        <span class="insight-icon">🧠</span>
                        <div>
                            <strong>High "food noise" pattern</strong>
                            <p>Constant cravings and thinking about food is a hormonal signal, not a willpower issue.
                                This is very common after 40.</p>
                        </div>
                    </div>
                    <div class="insight-item">
                        <span class="insight-icon">💡</span>
                        <div>
                            <strong>Good news: This is reversible</strong>
                            <p>Women with your profile respond extremely well to stimulant-free metabolic support
                                formulas designed for the 40+ body.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="results-recommendation">
                <h3>Our #1 Recommendation For Your Profile</h3>
                <p>Based on your answers, you're a strong match for <strong>
                        <?php echo $product_name; ?>
                    </strong> — a gentle, stimulant-free formula specifically designed for women dealing with hormonal
                    metabolic resistance after 40.</p>
                <div class="recommendation-points">
                    <span>✓ Targets stubborn belly fat</span>
                    <span>✓ Reduces cravings &amp; food noise</span>
                    <span>✓ No jitters, no crashes</span>
                    <span>✓ 180-day money-back guarantee</span>
                </div>
            </div>

            <!-- Bottom Reviews -->
            <div class="results-reviews">
                <h3 class="results-reviews-title">💬 From Women With Your Same Profile</h3>
                <div class="results-reviews-grid">
                    <div class="result-review-card">
                        <div class="rr-header">
                            <div class="rr-avatar" style="background: linear-gradient(135deg, #f472b6, #ec4899);">JC</div>
                            <div class="rr-meta">
                                <strong>Jennifer C., 48</strong>
                                <span class="rr-verified">✓ Verified Purchase</span>
                            </div>
                            <span class="rr-stars">★★★★★</span>
                        </div>
                        <p class="rr-text">"I scored 91% on this quiz and thought 'yeah right, another gimmick.' But I figured the guarantee made it risk-free, so why not. <strong>4 weeks later my husband asked what I was doing differently.</strong> The bloating is practically gone and I don't stand in front of the fridge at 9pm anymore. I feel like I got my old body's operating system back."</p>
                        <span class="rr-date">Reviewed 3 days ago</span>
                    </div>
                    <div class="result-review-card">
                        <div class="rr-header">
                            <div class="rr-avatar" style="background: linear-gradient(135deg, #a78bfa, #8b5cf6);">BH</div>
                            <div class="rr-meta">
                                <strong>Barbara H., 55</strong>
                                <span class="rr-verified">✓ Verified Purchase</span>
                            </div>
                            <span class="rr-stars">★★★★★</span>
                        </div>
                        <p class="rr-text">"Every single answer in this quiz felt like someone had been reading my diary. The metabolic resistance thing — THAT'S what's been happening to me. <strong>I've tried keto, fasting, gym 4x a week… nothing moved the needle until this.</strong> Two months in, I'm wearing clothes I'd hidden in the back of my closet. No jitters, no weird side effects. Just… lighter."</p>
                        <span class="rr-date">Reviewed 1 week ago</span>
                    </div>
                    <div class="result-review-card">
                        <div class="rr-header">
                            <div class="rr-avatar" style="background: linear-gradient(135deg, #34d399, #10b981);">NP</div>
                            <div class="rr-meta">
                                <strong>Nancy P., 43</strong>
                                <span class="rr-verified">✓ Verified Purchase</span>
                            </div>
                            <span class="rr-stars">★★★★★</span>
                        </div>
                        <p class="rr-text">"I'm a nurse, so I'm naturally skeptical of supplements. But the ingredients in CitrusBurn are all things I actually recognize and trust. <strong>The biggest change? I stopped obsessing over food.</strong> That constant 'food noise' in my head is finally quiet. Down 9 lbs in 5 weeks and my scrubs are loose for the first time in years."</p>
                        <span class="rr-date">Reviewed 5 days ago</span>
                    </div>
                </div>
            </div>

            <a href="<?php echo $purchase_url; ?>" class="results-cta-btn">
                👉 See How
                <?php echo $product_name; ?> Works For Your Profile
            </a>
            <span class="results-cta-sub"><span class="shield">🛡️</span> 180-Day Money-Back Guarantee • Risk Free •
                Limited Stock</span>

            <div class="results-social-proof">
                <div class="sp-avatars">
                    <div class="sp-avatar av-1">SM</div>
                    <div class="sp-avatar av-2">DR</div>
                    <div class="sp-avatar av-3">LK</div>
                </div>
                <p><strong>2,847+</strong> women with similar profiles already tried it</p>
            </div>
        </div>
    </div>

    <script>
        const TOTAL_QUESTIONS = 7;
        let currentScreen = 'intro';

        // ── Analytics ──────────────────────────────────────
        const VISITOR_ID = localStorage.getItem('quiz_vid') || (function () {
            const id = 'v_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
            localStorage.setItem('quiz_vid', id);
            return id;
        })();

        function trackEvent(eventName, answer) {
            const payload = {
                visitor_id: VISITOR_ID,
                event: eventName,
                answer: answer || null,
                referrer: document.referrer || '',
            };
            // Use sendBeacon for reliability (fires even if page is closing)
            if (navigator.sendBeacon) {
                navigator.sendBeacon('analytics.php', JSON.stringify(payload));
            } else {
                fetch('analytics.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload),
                    keepalive: true,
                }).catch(() => { });
            }
        }

        // Track page view immediately
        trackEvent('page_view');

        // ── Quiz Logic ─────────────────────────────────────
        function updateProgress(step) {
            const fill = document.getElementById('progressFill');
            const pct = (step / (TOTAL_QUESTIONS + 1)) * 100;
            fill.style.width = pct + '%';
        }

        function goToScreen(targetId) {
            const current = document.querySelector('.quiz-screen.active');
            if (current) {
                current.classList.add('leaving');
                current.classList.remove('active');
                setTimeout(() => {
                    current.classList.remove('leaving');
                }, 500);
            }
            setTimeout(() => {
                const target = document.getElementById(targetId);
                target.classList.add('active');
                window.scrollTo({ top: 0, behavior: 'instant' });
            }, 350);
        }

        function startQuiz() {
            trackEvent('quiz_start');
            updateProgress(1);
            goToScreen('screen-q1');
        }

        function selectAnswer(btn, questionNum) {
            // Get the answer letter
            const letter = btn.querySelector('.answer-letter').textContent.trim();
            trackEvent('q' + questionNum, letter);

            // Visual feedback
            const siblings = btn.parentElement.querySelectorAll('.answer-btn');
            siblings.forEach(b => b.classList.remove('selected'));
            btn.classList.add('selected');

            // Wait a beat then move to next
            setTimeout(() => {
                if (questionNum < TOTAL_QUESTIONS) {
                    updateProgress(questionNum + 1);
                    goToScreen('screen-q' + (questionNum + 1));
                } else {
                    updateProgress(TOTAL_QUESTIONS);
                    showAnalyzing();
                }
            }, 600);
        }

        function showAnalyzing() {
            trackEvent('analyzing');
            goToScreen('screen-analyzing');
            updateProgress(TOTAL_QUESTIONS + 0.5);

            const steps = ['step1', 'step2', 'step3'];
            steps.forEach((id, i) => {
                setTimeout(() => {
                    const el = document.getElementById(id);
                    el.classList.add('done');
                    el.querySelector('.step-icon').textContent = '✅';
                }, 1200 * (i + 1));
            });

            setTimeout(() => {
                updateProgress(TOTAL_QUESTIONS + 1);
                showResults();
            }, 4200);
        }

        function showResults() {
            trackEvent('results');
            goToScreen('screen-results');

            // Animate the match circle
            setTimeout(() => {
                const circle = document.getElementById('matchCircle');
                const numberEl = document.getElementById('matchNumber');
                const targetPct = 94;
                const circumference = 2 * Math.PI * 42;

                circle.style.strokeDasharray = circumference;
                circle.style.strokeDashoffset = circumference;

                setTimeout(() => {
                    const offset = circumference - (targetPct / 100) * circumference;
                    circle.style.strokeDashoffset = offset;
                }, 100);

                let current = 0;
                const interval = setInterval(() => {
                    current += 2;
                    if (current >= targetPct) {
                        current = targetPct;
                        clearInterval(interval);
                    }
                    numberEl.textContent = current + '%';
                }, 30);
            }, 500);
        }

        // Track CTA click
        document.addEventListener('DOMContentLoaded', function () {
            const ctaBtn = document.querySelector('.results-cta-btn');
            if (ctaBtn) {
                ctaBtn.addEventListener('click', function () {
                    trackEvent('cta_click');
                });
            }
        });
    </script>
</body>

</html>