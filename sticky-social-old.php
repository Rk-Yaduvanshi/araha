
<style>
/* ===========================
   Floating Action Buttons (Desktop)
=========================== */
.fab-btn {
    position: fixed;
    width: 50px;
    height: 50px;
    right: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: #fff;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    z-index: 100;
    cursor: pointer;
}

.fab-btn i { color: #fff; }

.fab--call   { bottom: 50%; background-color: #da852a; }
.fab--email  { bottom: 40%; background-color: #2576d3; }
.fab--whatsapp { bottom: 30%; background-color: #25d366; }

/* Tablet Adjustments */
@media (min-width: 768px) and (max-width: 991px) {
    .fab--call { bottom: 21%; }
    .fab--email { bottom: 15%; }
    .fab--whatsapp { bottom: 9%; }
}

/* ===========================
   Contact Form (Desktop)
=========================== */
.contact-popup {
    position: fixed;
    right: 83px;
    bottom: 28%;
    width: 300px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    transform: scaleY(0);
    transform-origin: bottom right;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
    z-index: 99;
}
.contact-popup.open {
    transform: scaleY(1);
    opacity: 1;
}

.contact-popup__header {
    font-size: 18px;
    margin-bottom: 15px;
    color: #333;
}
.form-group { margin-bottom: 12px; }

.contact-popup input {
    width: 100%;
    padding: 8px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.contact-popup button[type="submit"] {
    width: 100%;
    padding: 10px;
    background: linear-gradient(45deg, #de6f30, #ff6354);
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Close Button (Desktop + Mobile) */
.btn-close {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    font-size: 22px;
    color: #333;
    cursor: pointer;
    width: auto;
    height: auto;
    padding: 0;
    line-height: 1;
    display: inline-block;
    z-index: 10;
}
.btn-close:hover { color: #000; }

/* ===========================
   Mobile Contact Bar
=========================== */
.mobile-contact-bar {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 50px;
    background: #fff;
    display: flex;
    box-shadow: 0 -3px 3px rgba(0,0,0,0.12);
    z-index: 100;
}
.mobile-contact-bar__list {
    display: flex;
    width: 100%;
    margin: 0; padding: 0;
    list-style: none;
}
.mobile-contact-bar__item { flex: 1; text-align: center; }
.mobile-contact-bar__link {
    display: block;
    height: 50px;
    line-height: 50px;
    color: #fff;
    font-size: 22px;
}
.mobile-contact-bar__item.call .mobile-contact-bar__link { background: linear-gradient(20deg, #D6851A, #efa23b); }
.mobile-contact-bar__item.email .mobile-contact-bar__link { background: linear-gradient(20deg, #2576d3, #3e8be3); }
.mobile-contact-bar__item.whatsapp .mobile-contact-bar__link { background: linear-gradient(20deg, #28D146, #5FFC7B); }

.mobile-contact-bar__link::before {
    font-family: "FontAwesome";
}
.call .mobile-contact-bar__link::before { content: "\f095"; }
.email .mobile-contact-bar__link::before { content: "\f0e0"; }
.whatsapp .mobile-contact-bar__link::before { content: "\f232"; }

/* ===========================
   Mobile Contact Popup
=========================== */
.mobile-contact-popup {
    position: fixed;
    left: 50%;
    bottom: 50px;
    width: 90%;
    max-width: 320px;
    background: #fff;
    padding: 20px;
    border-radius: 10px 10px 0 0;
    transform: translateX(-50%) scaleY(0);
    transform-origin: bottom center;
    box-shadow: 0 -3px 10px rgba(0,0,0,0.2);
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
    z-index: 999;
}
.mobile-contact-popup.open {
    transform: translateX(-50%) scaleY(1);
    opacity: 1;
}
.mobile-contact-popup input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.mobile-contact-popup button[type="submit"] {
    width: 100%;
    padding: 10px;
    background: linear-gradient(45deg, #de6f30, #ff6354);
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* ===========================
   Responsive Visibility
=========================== */
@media (min-width: 768px) {
    .mobile-contact-bar, .mobile-contact-popup { display: none !important; }
}
@media (max-width: 767px) {
    .fab-container, .contact-popup { display: none !important; }
}
</style>
</head>
<body>

<!-- ===========================
     Floating Action Buttons (Desktop)
=========================== -->
<div class="fab-container">
    <a href="tel:+91-7738043769" class="fab-btn fab--call"><i class="fa fa-phone"></i></a>
    <div class="fab-btn fab--email" id="desktopEmailBtn"><i class="fa fa-envelope"></i></div>
    <a href="https://api.whatsapp.com/send/?phone=917738043769" target="_blank" class="fab-btn fab--whatsapp"><i class="fab fa-whatsapp"></i></a>
</div>

<!-- ===========================
     Desktop Contact Popup
=========================== -->
<div class="contact-popup" id="desktopContactPopup">
    <button class="btn-close" id="desktopCloseBtn">&times;</button>
    <div class="contact-popup__header">Quick Contact</div>
    <form id="desktopContactForm">
        <div class="form-group">
            <input type="text" name="name" placeholder="Enter your name">
            <span class="error_field" id="desktopNameError"></span>
        </div>
        <div class="form-group">
            <input type="tel" name="phone" placeholder="Enter your phone number">
            <span class="error_field" id="desktopPhoneError"></span>
        </div>
        <button type="submit" class="btn-submit">Submit</button>
    </form>
</div>

<!-- ===========================
     Mobile Contact Bar
=========================== -->
<div class="mobile-contact-bar">
    <ul class="mobile-contact-bar__list">
        <li class="mobile-contact-bar__item call"><a href="tel:+91-7738043769" class="mobile-contact-bar__link"></a></li>
        <li class="mobile-contact-bar__item email"><div class="mobile-contact-bar__link" id="mobileEmailBtn"></div></li>
        <li class="mobile-contact-bar__item whatsapp"><a href="https://api.whatsapp.com/send/?phone=917738043769" target="_blank" class="mobile-contact-bar__link"></a></li>
    </ul>
</div>

<!-- ===========================
     Mobile Contact Popup
=========================== -->
<div class="mobile-contact-popup" id="mobileContactPopup">
    <button class="btn-close" id="mobileCloseBtn">&times;</button>
    <div class="contact-popup__header">Quick Contact</div>
    <form id="mobileContactForm">
        <input type="text" name="name" placeholder="Enter your name">
        <span class="error_field" id="mobileNameError"></span>
        <input type="tel" name="phone" placeholder="Enter your phone number">
        <span class="error_field" id="mobilePhoneError"></span>
        <button type="submit" class="btn-submit">Submit</button>
    </form>
</div>

<!-- ===========================
     Unified JavaScript Logic
=========================== -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // === Desktop ===
    const emailBtn = document.getElementById('desktopEmailBtn');
    const popup = document.getElementById('desktopContactPopup');
    const closeBtn = document.getElementById('desktopCloseBtn');

    emailBtn?.addEventListener('click', e => {
        e.preventDefault();
        popup.classList.toggle('open');
    });
    closeBtn?.addEventListener('click', () => popup.classList.remove('open'));
    document.addEventListener('click', e => {
        if (popup.classList.contains('open') && !popup.contains(e.target) && !emailBtn.contains(e.target)) {
            popup.classList.remove('open');
        }
    });

    // === Mobile ===
    const mobileBtn = document.getElementById('mobileEmailBtn');
    const mobilePopup = document.getElementById('mobileContactPopup');
    const mobileClose = document.getElementById('mobileCloseBtn');

    mobileBtn?.addEventListener('click', e => {
        e.preventDefault();
        mobilePopup.classList.toggle('open');
    });
    mobileClose?.addEventListener('click', () => mobilePopup.classList.remove('open'));
    document.addEventListener('click', e => {
        if (mobilePopup.classList.contains('open') && !mobilePopup.contains(e.target) && !mobileBtn.contains(e.target)) {
            mobilePopup.classList.remove('open');
        }
    });
});
</script>
