
<!-- Mission Vision Section Start -->
<div class="mission-vision">
    <div class="container">
        

        <div class="row">
            <div class="col-lg-6">
                <!-- Mission Card Start -->
                <div class="mv-card mission-card wow fadeInUp">
                    <div class="card-ornament">
                        <div class="ornament-circle"></div>
                        <div class="ornament-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ornament-line"></div>
                    </div>
                    <div class="mv-header">
                        <div class="mv-icon">
                            <div class="icon-shape">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                        </div>
                        <h3>Our Mission</h3>
                    </div>
                    <div class="mv-content">
                        <p>To pioneer innovative biological solutions that transform osteoporosis treatment, making advanced care accessible while maintaining uncompromising quality standards.</p>
                        <div class="mv-highlights">
                            <div class="mv-highlight-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Innovative Therapeutic Solutions</span>
                            </div>
                            <div class="mv-highlight-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Accessible & Affordable Healthcare</span>
                            </div>
                            <div class="mv-highlight-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Uncompromising Quality Standards</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mission Card End -->
            </div>

            <div class="col-lg-6">
                <!-- Vision Card Start -->
                <div class="mv-card vision-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-ornament">
                        <div class="ornament-circle"></div>
                        <div class="ornament-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ornament-line"></div>
                    </div>
                    <div class="mv-header">
                        <div class="mv-icon">
                            <div class="icon-shape">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                        </div>
                        <h3>Our Vision</h3>
                    </div>
                    <div class="mv-content">
                        <p>To lead the biologics revolution in musculoskeletal health, creating a future where every patient has access to life-changing treatments through sustainable innovation.</p>
                        <div class="mv-highlights">
                            <div class="mv-highlight-item">
                                <i class="fa-solid fa-star"></i>
                                <span>Global Leadership in Biologics</span>
                            </div>
                            <div class="mv-highlight-item">
                                <i class="fa-solid fa-star"></i>
                                <span>Transformative Patient Outcomes</span>
                            </div>
                            <div class="mv-highlight-item">
                                <i class="fa-solid fa-star"></i>
                                <span>Sustainable Healthcare Innovation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vision Card End -->
            </div>
        </div>
    </div>
</div>
<!-- Mission Vision Section End -->

<style>
    /************************************/
    /***   Mission & Vision Section  ***/
    /************************************/

    .mission-vision {
        padding: 100px 0;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .mv-card {
        background: var(--white-color);
        border-radius: 46px;
        padding: 50px 40px;
        height: 100%;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease-in-out;
        /* border: 1px solid transparent;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); */
    }

    .mv-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, var(--accent-color) 0%, var(--accent-color-two) 100%);
        opacity: 0;
        transition: all 0.4s ease-in-out;
        z-index: 1;
    }

    .mv-card:hover::before {
        opacity: 1;
    }

    .mv-card:hover {
        transform: translateY(-10px);
        border-color: var(--accent-color);
        box-shadow: 0 20px 40px rgba(19, 105, 180, 0.15);
    }

    /* Card Ornament Styles */
    .card-ornament {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 2;
    }

    .ornament-circle {
        position: absolute;
        top: -30px;
        right: -30px;
        width: 150px;
        height: 150px;
        background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        border-radius: 50%;
        opacity: 0.1;
        transition: all 0.4s ease;
    }

    .mv-card:hover .ornament-circle {
        opacity: 0.15;
        transform: scale(1.1);
    }

    .ornament-dots {
        position: absolute;
        top: 40px;
        right: 40px;
        display: flex;
        flex-wrap: wrap;
        width: 60px;
        height: 60px;
    }

    .ornament-dots span {
        display: block;
        width: 6px;
        height: 6px;
        background: var(--accent-color);
        border-radius: 50%;
        margin: 4px;
        opacity: 0.3;
        transition: all 0.3s ease;
    }

    .mv-card:hover .ornament-dots span {
        opacity: 0.6;
        transform: scale(1.2);
    }

    .ornament-line {
        position: absolute;
        top: 50%;
        right: 0;
        width: 80px;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--accent-color));
        opacity: 0.1;
        transform: translateY(-50%);
        transition: all 0.4s ease;
    }

    .mv-card:hover .ornament-line {
        opacity: 0.3;
        width: 100px;
    }

    /* Flex Header for Icon and Title */
    .mv-header {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
        position: relative;
        z-index: 3;
    }

    .mv-icon {
        margin-right: 20px;
        flex-shrink: 0;
    }

    .icon-shape {
        width: 80px;
        height: 80px;
        background: var(--secondary-color);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease-in-out;
        /* box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); */
    }

    .mv-card:hover .icon-shape {
        background: var(--white-color);
        transform: scale(1.1) rotate(5deg);
    }

    .icon-shape i {
        font-size: 32px;
        color: var(--accent-color);
        transition: all 0.4s ease-in-out;
    }

    .mv-card:hover .icon-shape i {
        color: var(--accent-color);
        transform: scale(1.1);
    }

    .mv-header h3 {
        font-size: 28px;
        margin: 0;
        transition: all 0.4s ease-in-out;
        background: linear-gradient(135deg, var(--accent-color) 0%, var(--accent-color-two) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .mv-card:hover .mv-header h3 {
        -webkit-text-fill-color: var(--white-color);
    }

    .mv-content {
        position: relative;
        z-index: 3;
    }

    .mv-content p {
        margin-bottom: 25px;
        transition: all 0.4s ease-in-out;
        padding-left: 20px;
        border-left: 2px solid rgba(71, 83, 191, 0.1);
    }

    .mv-card:hover .mv-content p {
        color: var(--white-color);
        border-left-color: rgba(255, 255, 255, 0.3);
    }

    .mv-highlights {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .mv-highlight-item {
        display: flex;
        align-items: center;
        transition: all 0.4s ease-in-out;
    }

    .mv-highlight-item i {
        width: 24px;
        height: 24px;
        background: var(--accent-color);
        color: var(--white-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        margin-right: 12px;
        transition: all 0.4s ease-in-out;
        flex-shrink: 0;
    }

    .mv-card:hover .mv-highlight-item i {
        background: var(--white-color);
        color: var(--accent-color);
    }

    .mv-highlight-item span {
        font-weight: 500;
        transition: all 0.4s ease-in-out;
    }

    .mv-card:hover .mv-highlight-item span {
        color: var(--white-color);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .mv-header {
            flex-direction: column;
            text-align: center;
        }
        
        .mv-icon {
            margin-right: 0;
            margin-bottom: 15px;
        }
        
        .mv-card {
            padding: 30px 25px;
        }
    }
</style>