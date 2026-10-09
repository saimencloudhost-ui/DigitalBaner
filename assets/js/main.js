/**
 * PORTAL DIGITAL BANER - TV SIGNAGE MAIN JAVASCRIPT
 * Interactive channel switching, live clock ticker, scroll animation, form validation.
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. Live TV Clock Update
    function updateTVClock() {
        const clockEl = document.getElementById('tvClockText');
        if (clockEl) {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            clockEl.textContent = `${hours}:${minutes}:${seconds} WIB`;
        }
    }
    setInterval(updateTVClock, 1000);
    updateTVClock();

    // 2. Interactive TV Signage Simulator Channel Switcher Data
    const channels = {
        restaurant: {
            name: "Restoran & Kafe",
            badge: "DIGITAL MENU BOARD",
            image: "assets/images/menu_board.jpg",
            ticker: "🔥 PROMO HARI INI: Diskon 30% Paket Combo Burger & Drinks | Buka setiap hari 10:00 - 22:00 WIB",
            tag: "SPECIAL PROMO"
        },
        office: {
            name: "Korporat & Kantor",
            badge: "CORPORATE DISPLAY",
            image: "assets/images/office_board.jpg",
            ticker: "📢 PENGUMUMAN: Townhall Meeting Kuartal IV akan dilaksanakan Jumat Pukul 14.00 di Main Hall | Target Q3 Tercapai 115%",
            tag: "INFO INTERNAL"
        },
        hospital: {
            name: "Rumah Sakit & Klinik",
            badge: "ANTEAN & KESEHATAN",
            image: "assets/images/hospital_queue.jpg",
            ticker: "🏥 NOMOR ANTREAN SAAT INI: A-102 (Poli Spesialis Penyakit Dalam) | Tetap Jaga Jarak & Pakai Masker",
            tag: "STATUS ANTREAN"
        },
        retail: {
            name: "Retail & Mall",
            badge: "PROMO STORE & SALE",
            image: "assets/images/menu_board.jpg", // Fallback to menu/retail display
            ticker: "🛍️ FLASH SALE 50% OFF All Items Fashion Collection | Promo terbatas hingga akhir pekan ini!",
            tag: "HOT DEAL"
        }
    };

    const tvScreenImg = document.getElementById('tvScreenImg');
    const tvBadge = document.getElementById('tvBadge');
    const tvTickerText = document.getElementById('tvTickerText');
    const tvTickerTag = document.getElementById('tvTickerTag');
    const channelBtns = document.querySelectorAll('.btn-channel');

    channelBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const selectedChannelKey = this.getAttribute('data-channel');
            const data = channels[selectedChannelKey];

            if (data && tvScreenImg) {
                // Remove active class from all buttons
                channelBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Fade out TV screen image smoothly
                tvScreenImg.style.opacity = '0.3';
                
                setTimeout(() => {
                    tvScreenImg.src = data.image;
                    if (tvBadge) tvBadge.textContent = data.badge;
                    if (tvTickerText) tvTickerText.textContent = data.ticker;
                    if (tvTickerTag) tvTickerTag.textContent = data.tag;
                    
                    tvScreenImg.style.opacity = '1';
                }, 200);
            }
        });
    });

    // 3. Stats Counter Animation on Scroll
    let animated = false;
    const statsSection = document.getElementById('statsSection');
    
    function animateCounters() {
        if (!statsSection) return;
        const rect = statsSection.getBoundingClientRect();
        if (rect.top <= window.innerHeight && !animated) {
            animated = true;
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                let current = 0;
                const increment = Math.ceil(target / 40);
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target.toLocaleString('id-ID') + (counter.getAttribute('data-suffix') || '');
                        clearInterval(timer);
                    } else {
                        counter.textContent = current.toLocaleString('id-ID') + (counter.getAttribute('data-suffix') || '');
                    }
                }, 30);
            });
        }
    }
    window.addEventListener('scroll', animateCounters);
    animateCounters();

    // 4. Request Demo Form Handling
    const demoForm = document.getElementById('demoForm');
    const formAlert = document.getElementById('formAlert');

    if (demoForm) {
        demoForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('inputName').value.trim();
            const company = document.getElementById('inputCompany').value.trim();
            const email = document.getElementById('inputEmail').value.trim();
            const phone = document.getElementById('inputPhone').value.trim();
            const screens = document.getElementById('selectScreens').value;

            if (!name || !company || !email || !phone) {
                formAlert.className = 'alert alert-danger mb-4';
                formAlert.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i> Harap isi semua kolom formulir dengan benar!';
                formAlert.classList.remove('d-none');
                return;
            }

            const submitBtn = demoForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status"></span> Memproses...';

            // Simulate AJAX request
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                demoForm.reset();

                formAlert.className = 'alert alert-success mb-4';
                formAlert.innerHTML = `
                    <h5 class="alert-heading font-weight-bold mb-1"><i class="bi bi-check-circle-fill me-2"></i> Permintaan Demo Berhasil Dikirim!</h5>
                    <p class="mb-0 text-sm">Terima kasih <strong>${name}</strong> dari <strong>${company}</strong>. Tim spesialis TV Signage kami akan menghubungi Anda via WhatsApp/Email dalam kurun waktu 1x24 jam.</p>
                `;
                formAlert.classList.remove('d-none');
            }, 1200);
        });
    }
});
