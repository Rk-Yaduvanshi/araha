<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Contact System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ===========================
           Floating Action Buttons (Desktop)
        =========================== */
        .fab-container {
            position: fixed;
            right: 28px;
            bottom: 28px;
            z-index: 100;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .fab-btn {
            position: relative;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.25);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 100;
            overflow: hidden;
        }

        .fab-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .fab-btn i { 
            color: #fff; 
            z-index: 2;
        }

        .fab--call   { 
            background: linear-gradient(135deg, #1369b4, #4facfe);
            animation: pulse 2s infinite;
        }
        .fab--email  { 
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }
        .fab--whatsapp { 
               background: linear-gradient(20deg, #28D146 0%, #5FFC7B 70%);
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(19, 105, 180, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(19, 105, 180, 0); }
            100% { box-shadow: 0 0 0 0 rgba(19, 105, 180, 0); }
        }

        /* Tablet Adjustments */
        @media (min-width: 768px) and (max-width: 991px) {
            .fab-container {
                bottom: 20px;
                right: 20px;
            }
            
            .fab-btn {
                width: 48px;
                height: 48px;
                font-size: 19px;
            }
        }

        /* ===========================
           Contact Form (Desktop)
        =========================== */
        .contact-popup {
            position: fixed;
            right: 100px;
            bottom: 100px;
            width: 320px;
            background: #fff;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transform: scale(0) translateY(20px);
            transform-origin: bottom right;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 99;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .contact-popup.open {
            transform: scale(1) translateY(0);
            opacity: 1;
        }

        .contact-popup::before {
            content: '';
            position: absolute;
            top: 50%;
            right: -10px;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 10px solid #fff;
            transform: translateY(-50%);
            filter: drop-shadow(2px 0 2px rgba(0,0,0,0.1));
        }

        .contact-popup__header {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
            text-align: center;
        }

        .form-group { 
            margin-bottom: 16px; 
            position: relative;
        }

        .contact-popup input {
            width: 100%;
            padding: 12px 15px;
            font-size: 15px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            transition: all 0.3s;
            background: #f9f9f9;
        }

        .contact-popup input:focus {
            border-color: #4facfe;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.2);
            outline: none;
            background: #fff;
        }

        .contact-popup button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #ff9a3d, #ff6b6b);
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(255, 107, 107, 0.3);
        }

        .contact-popup button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 107, 107, 0.4);
        }

        /* Close Button (Desktop + Mobile) */
        .btn-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 22px;
            color: #999;
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            z-index: 10;
        }

        .btn-close:hover { 
            background: #f5f5f5;
            color: #333;
        }

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
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
            z-index: 100;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            overflow: hidden;
        }

        .mobile-contact-bar__list {
            display: flex;
            width: 100%;
            margin: 0; 
            padding: 0;
            list-style: none;
        }

        .mobile-contact-bar__item { 
            flex: 1; 
            text-align: center; 
            position: relative;
        }

        .mobile-contact-bar__link {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            color: #fff;
            font-size: 22px;
            text-decoration: none;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .mobile-contact-bar__item.call .mobile-contact-bar__link { 
            background: linear-gradient(135deg, #1369b4, #4facfe);
        }
        .mobile-contact-bar__item.email .mobile-contact-bar__link { 
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }
        .mobile-contact-bar__item.whatsapp .mobile-contact-bar__link { 
           
                background: linear-gradient(20deg, #28D146 0%, #5FFC7B 70%);
        }

        /* ===========================
           Mobile Contact Popup
        =========================== */
        .mobile-contact-popup {
            position: fixed;
            left: 50%;
            bottom: 50px;
            width: 90%;
            max-width: 350px;
            background: #fff;
            padding: 25px;
            border-radius: 20px 20px 0 0;
            transform: translateX(-50%) scaleY(0);
            transform-origin: bottom center;
            box-shadow: 0 -5px 25px rgba(0,0,0,0.15);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 999;
        }

        .mobile-contact-popup.open {
            transform: translateX(-50%) scaleY(1);
            opacity: 1;
        }

        .mobile-contact-popup input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 16px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            font-size: 15px;
            background: #f9f9f9;
            transition: all 0.3s;
        }

        .mobile-contact-popup input:focus {
            border-color: #4facfe;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.2);
            outline: none;
            background: #fff;
        }

        .mobile-contact-popup button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #ff9a3d, #ff6b6b);
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(255, 107, 107, 0.3);
        }

        .mobile-contact-popup button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 107, 107, 0.4);
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
        <a href="tel:+91-9833690049" class="fab-btn fab--call">
            <i class="fas fa-phone"></i>
        </a>
        <div class="fab-btn fab--email" id="desktopEmailBtn">
            <i class="fas fa-envelope"></i>
        </div>
        <a href="https://api.whatsapp.com/send/?phone=919833690049" target="_blank" class="fab-btn fab--whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- ===========================
         Desktop Contact Popup
    =========================== -->
    <div class="contact-popup" id="desktopContactPopup">
        <button class="btn-close" id="desktopCloseBtn">&times;</button>
        <div class="contact-popup__header">Quick Contact</div>
        <form id="desktopContactForm">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your name" required>
                <span class="error_field" id="desktopNameError"></span>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Enter your phone number" required>
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
            <li class="mobile-contact-bar__item call">
                <a href="tel:+91-9833690049" class="mobile-contact-bar__link">
                    <i class="fas fa-phone"></i>
                </a>
            </li>
            <li class="mobile-contact-bar__item email">
                <div class="mobile-contact-bar__link" id="mobileEmailBtn">
                    <i class="fas fa-envelope"></i>
                </div>
            </li>
            <li class="mobile-contact-bar__item whatsapp">
                <a href="https://api.whatsapp.com/send/?phone=919833690049" target="_blank" class="mobile-contact-bar__link">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- ===========================
         Mobile Contact Popup
    =========================== -->
    <div class="mobile-contact-popup" id="mobileContactPopup">
        <button class="btn-close" id="mobileCloseBtn">&times;</button>
        <div class="contact-popup__header">Quick Contact</div>
        <form id="mobileContactForm">
            <input type="text" name="name" placeholder="Enter your name" required>
            <span class="error_field" id="mobileNameError"></span>
            <input type="tel" name="phone" placeholder="Enter your phone number" required>
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
</body>
</html>